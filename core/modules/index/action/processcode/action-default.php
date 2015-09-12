<?php
/**
* @author evilnapsis
* @brief Procesando el codigo de activacion
**/
		if(!empty($_POST)){
			if($_POST["email"]!=""&&$_POST["code"]!=""){
				$user = UserData::getByEmail($_POST["email"]);
				if($user->is_active){
					$recover = RecoverData::getUnUsedByUserId($user->id);
					if($recover!=null){
						if($recover->code==$_POST["code"]){
							$recover->used();
							$_SESSION["user_id"] = $user->id;
							Core::alert("Se iniciara sesion en su cuenta, aproveche para cambiar su contrase&ntile;a");
							Core::redir("./?view=home");					
						}
						else{					
							Core::alert("Codigo de recuperacion invalido");
							Core::redir("./?view=recover");					
						}

					}else{					
						Core::alert("No cuenta con codigo de recuperacion, debe solicitar uno");
						Core::redir("./?view=recover");					
					}
				}else{
					Core::alert("Este usuario no esta activo");
					Core::redir("./?view=login");					
				}
			}

			else{
				Core::alert("Datos vacios");
				Core::redir("./?view=activate");
			}
		}
		else if($_GET["e"]!=""&&$_GET["c"]!=""){
				$users = UserData::getActives();
				$user = null;
				foreach ($users as $u) {
					if(sha1(md5($u->email))==$_GET["e"] ){
						$user=$u;
						break;
					}
				}

				if($user!=null){
					$recover = RecoverData::getUnUsedByUserId($user->id);
					if($recover!=null){
						if(sha1(md5($recover->code))==$_GET["c"] ){
							$recover->used();
							Core::alert("Se iniciara sesion en su cuenta, aproveche para cambiar su contrase&ntile;a");
							$_SESSION["user_id"]=$user->id;
							Core::redir("./?view=home");					

						}else{
							Core::alert("Codigo invalido");
							Core::redir("./");					
						}
					}else{
						Core::alert("No existe el codigo");
						Core::redir("./");
					}


				}else{					
					Core::redir("./	");					
				}

			}
?>
