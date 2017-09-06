<?php

class accessModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}
        
		public function getAccessStatus($vEmail,$vPassword)
			{
				$vEmail = (string) $vEmail;
				$vPassword = (string) IdEnHash::getHash('sha1',$vPassword,DEFAULT_HASH_KEY);

				$vResultAccessStatus = $this->vDataBase->query("SELECT
                                                            tb_squemas_users.n_coduser,
                                                            tb_squemas_users.c_username,
                                                            tb_squemas_users.c_pass1,
                                                            tb_squemas_users.c_pass2,
                                                            tb_squemas_users.c_email,
                                                            tb_squemas_users.c_userrole,
                                                            tb_squemas_users.c_email,
                                                            tb_squemas_users.n_active,
                                                            tb_squemas_usernames.n_codusername,
                                                            tb_squemas_usernames.c_names,
                                                            tb_squemas_usernames.c_lastnames,
                                                            tb_squemas_usernames.c_othername
                                                        FROM tb_squemas_users, tb_squemas_usernames
                                                        WHERE tb_squemas_users.n_coduser = tb_squemas_usernames.n_coduser
                                                            AND tb_squemas_users.c_email = '$vEmail'
                                                            AND tb_squemas_users. c_pass1 = '$vPassword'
                                                            AND tb_squemas_users. c_pass2 = '$vPassword'
                                                            AND tb_squemas_users.n_active = 1
                                                            AND tb_squemas_usernames.n_active = 1;");
				return $vResultAccessStatus->fetch();
				$vResultAccessStatus->close();
			}        
    }