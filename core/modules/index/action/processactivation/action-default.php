<?php
/**
* @author evilnapsis
* @brief Proceso de Activacion
**/

		if(!empty($_POST)){
			if($_POST["email"]!=""&&$_POST["code"]!=""){
				$user = UserData::getByEmail($_POST["email"]);
				if(!$user->is_active){
					if($user->code==$_POST["code"]){
						$user->activate();
						Core::alert("Cuenta activada exitosamente, se iniciara su sesion, despues podra iniciar sesion con sus datos");
						$_SESSION["user_id"]=$user->id;
						Core::redir("./?view=home");					
					}
				}else{
					Core::alert("Este usuario esta activo");
					Core::redir("./?view=login");					
				}
			}

			else{
				Core::alert("Datos vacios");
				Core::redir("./?view=activate");
			}
		}
		else if($_GET["e"]!=""&&$_GET["c"]!=""){
				$users = UserData::getInactives();
				$user = null;
				foreach ($users as $u) {
					if(sha1(md5($u->email))==$_GET["e"] ){
						$user=$u;
						break;
					}
				}

				if($user!=null){
					if(sha1(md5($user->code))==$_GET["c"] ){
						$user->activate();
						Core::alert("Cuenta activada exitosamente, se iniciara su sesion, despues podra iniciar sesion con sus datos");
						$_SESSION["user_id"]=$user->id;
						Core::redir("./?view=home");					

					}else{
					//	Core::redir("./");					
					}

				}else{					
				//	Core::redir("./	");					
				}

			}

	?>
