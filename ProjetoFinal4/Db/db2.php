<?php
//
//$servidor = "mysql.hostinger.com.br";
//$usuario = "u502247988_luci";
//$senha = "06111965";
//$port = '3306';
//$dbname = "u502247988_luci";

   $servidor = "localhost";
	$usuario = "root";
	$senha = "";
        $port = '';
	$dbname = "ambiental";

//$conn  = mysqli_connect($servidor, $usuario, $senha, $dbname);

$conn  = mysqli_connect($servidor, $usuario, $senha, $dbname);

include_once 'config.php';

class conecta extends config{
  var $pdo;
 
 function __construct(){
   $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->usuario, $this->senha); 
 }
 
 function login($email, $senha){
   $stmt = $this->pdo->prepare("SELECT * FROM login WHERE email = :email AND senha = :senha");
   $stmt->bindValue(":email",$email);
   $stmt->bindValue(":senha",sha1($senha));
   $run = $stmt->execute();
   $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
   return $rs;
 }
 
 function geraChaveAcesso($email){
   $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email_usuario = :email");
   $stmt->bindValue(":email",$email);
   $run = $stmt->execute();
 
   $rs = $stmt->fetch(PDO::FETCH_ASSOC);
   
    if($rs){
      $chave = sha1($rs["cod_usuario"].$rs["senha_usuario"]);
      return $chave;
    }
 
 }
 
//  function VerificaEmail($email){
//   $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email_usuario = :email");
//   $stmt->bindValue(":email",$email);
//   $run = $stmt->execute();
// 
//   $rs = $stmt->fetch(PDO::FETCH_ASSOC);
//   if($rs){
//      $verifica = $rs["email_usuario"];
//      return $verifica;
// }
// }
 
 
 
 function checkChave($email,$chave){
   $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email_usuario = :email");
   $stmt->bindValue(":email",$email);
   $run = $stmt->execute();
 
   $rs = $stmt->fetch(PDO::FETCH_ASSOC);
 
   if($rs){
     $chaveCorreta = sha1($rs["cod_usuario"].$rs["senha_usuario"]);
     if($chave == $chaveCorreta){
        return $rs["cod_usuario"];
     }
   }
 }
 
 function setNovaSenha($novasenha,$cod_usuario){
   $stmt = $this->pdo->prepare("UPDATE usuario SET senha_usuario = :novasenha WHERE cod_usuario = :cod_usuario");
   $stmt->bindValue(":novasenha", password_hash($novasenha, PASSWORD_DEFAULT));
   $stmt->bindValue(":cod_usuario",$cod_usuario);
   $run = $stmt->execute();
 }
}




function isLoginSessionExpired() {
	$login_session_duration = 300; 
	$current_time = time(); 
	if(isset($_SESSION['loggedin_time']) and isset($_SESSION["cod_usuario"])){  
		if(((time() - $_SESSION['loggedin_time']) > $login_session_duration)){ 
			return true; 
		} 
	}
	return false;
}




