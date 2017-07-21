<?Php

class contactController extends IdEnController
	{		
		public function __construct()
			{
				parent::__construct();
			}
        
		public function index()
			{
                $this->vView->visualizar('index');
				//$this->redireccionar('index');
			}
  

		public function sendMail(){												

				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        
						$vName = (string) $_POST['name'];
						$vEmail = (string) $_POST['email'];
						$vMessage = (string) $_POST['message'];
                        
                        $vTextMessage = '<strong>Nombre Completo:</strong> '.$vName.'<br/>'.'<strong>Correo Electronico:</strong> '.$vEmail.'<br/>'.'<strong>Consulta:</strong> '.$vMessage.'<br/>';

                        $this->getLibrary('class.phpmailer');
                        $this->vMail = new PHPMailer();								
                        //$this->vMail->IsSMTP();
                        $this->vMail->SMTPAuth = true;
                        $this->vMail->Host = 'smtp.squemas.com';
                        $this->vMail->Username = 'info@squemas.com';
                        $this->vMail->Password = '@Squ3m4s';
                        $this->vMail->SMTPSecure = 'ssl';
                        $this->vMail->Port = 25;
                        $this->vMail->SetFrom($vEmail, strtoupper($vName));
                        $this->vMail->AddAddress(strtolower(trim('info@squemas.com')));
                        $this->vMail->Subject = 'Formulario de Contacto Centro Squemas La Paz, Bolivia';
                        $this->vMail->MsgHTML($vTextMessage);											

                        $exito = $this->vMail->Send();

                        if($exito){
                                $vTextMessage2 = 'Gracias por comunicarte con nosotros,<br/><br/>Trataremos de atender tu consulta lo más rápido posible, y nos pondermos en contacto contigo.<br/><br/>por favor te pedimos que no respondas a este correo. <br/><br/>Saludos';
                                $this->vMail->ClearAddresses();
                                $this->vMail->SMTPAuth = true;
                                $this->vMail->Host = 'smtp.squemas.com';
                        $this->vMail->Username = 'info@squemas.com';
                        $this->vMail->Password = '@Squ3m4s';
                                $this->vMail->SMTPSecure = 'ssl';
                                $this->vMail->Port = 25;
                                $this->vMail->SetFrom('info@squemas.com', strtoupper('Contacto Centro Squemas'));
                                $this->vMail->AddAddress(strtolower(trim($vEmail)));
                                $this->vMail->Subject = 'Centro Squemas recibio tu mensaje';
                                $this->vMail->MsgHTML($vTextMessage2);											

                                $exito = $this->vMail->Send();                                
                                //echo 'Se ha enviado el correo a '.$email;
                                echo 'OK';
                            } else {
                                 //echo 'No se ha enviado el correo a '.$email;
                                echo $exito;
                            }
					}
			}
    
        public function newsletter(){
                echo 'Este es el newsletter';
            }
	}
?>