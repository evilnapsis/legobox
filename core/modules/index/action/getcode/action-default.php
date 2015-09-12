<?php
/**
* @author evilnapsis
* @brief Obtener codigo de activacion
**/

		if(!empty($_POST)){
			if($_POST["email"]!=""){
				$user = UserData::getByEmail($_POST["email"]);
				if($user!=null){
					if($user->is_active){
						$mycode = RecoverData::getUnUsedByUserId($user->id);
						$code= "";
						if($mycode==null){
								$str = "abcdefghijklmopqrstuvwxyz1234567890";
								$code = "";
								for ($i=0; $i < 6; $i++) { 
									$code .= $str[rand(0,strlen($str)-1)];
								}
								
		
								$recover = new RecoverData();
								$recover->user_id = $user->id;
								$recover->code = $code;
								$recover->add();
							}else{
								$code = $mycode->code;
							}


						$msg = "<body><h1>Codigo de recuperacion</h1>
						<p>Ahora puedes recuperar tu cuenta en el siguiente link:</p>
						<p><a href='http://youhost/app/index.php?view=processcode&e=".sha1(md5($_POST["email"]))."&c=".sha1(md5($code))."'>Activa tu cuenta:</a></p>
						<p>O tambien puedes usar el siguiente codigo de activacion: ".$code."</p>
						</body>";
		
			//			mail($_POST["email"], "Codigo de recuperacion", $msg);
			
						$f = fopen (ROOT."/recover.txt","w");
						fwrite($f, $msg);
						fclose($f);

						Core::alert("Se ha enviado un mensaje a tu correo electronico con los datos necesarios para recuperar su cuenta.");
						Core::redir("./?view=recover");



					}
					else{
						Core::alert("El usuario debe estar activo");
						Core::redir("./?view=activate");
					}


				}else{
					Core::alert("Usuario no existe");
					Core::redir("./?view=recover");
				}
				
			}
		}
?>