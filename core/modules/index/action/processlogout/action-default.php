<?php
/**
* @author evilnapsis
* @brief Proceso de Cerrar sesion
**/

		unset($_SESSION["user_id"]);
		session_destroy();
		Core::redir("./");
?>