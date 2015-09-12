<?php
/**
* @author evilnapsis
* @brief Cambiar contrase~a
**/

		if(!empty($_POST)){
			if($_POST["password"]!=""&&$_POST["confirm"]!=""){
				if($_POST["password"]==$_POST["confirm"]){
					$user=UserData::getById($_SESSION["user_id"]);
					$user->password = sha1(md5($_POST["password"]));
					$user->update_passwd();
					Core::alert("Contrase~a actualizada!");
					Core::redir("./?view=config");
				}else{
					Core::alert("Las contrase~as no coinciden");
					Core::redir("./?view=config");
				}	
			}else{
				Core::alert("Datos vacios!");
				Core::redir("./?view=config");

			}
		}
?>