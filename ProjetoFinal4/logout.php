<?php
session_start();
unset($_SESSION['email_usuario']);
unset($_SESSION["nivel_acesso"]);
unset($_SESSION["cod_usuario"]);
unset($_SESSION["nome_usuario"]);
unset($_SESSION['msgLog']);
$url = "index.php";
if(isset($_GET["session_expired"])) {                             
	$url .= "?session_expired=" . $_GET["session_expired"];            
}   
                echo '<script>';
                echo "location.href='$url'";
                echo '</script>'; 
                $_SESSION['msgLogout'] = "<div class='alert alert-warning'>Sessão encerrada devido inatividade.</div>";