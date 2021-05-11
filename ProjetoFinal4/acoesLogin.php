
<?php




                 

session_start();

require_once 'Db/db2.php';


$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'email_usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha_usuario', FILTER_SANITIZE_STRING);
   
	if((!empty($usuario)) AND (!empty($senha))){

             

                $result_usuario = "SELECT  cod_usuario, nome_usuario, senha_usuario, nivel_acesso, email_usuario FROM usuario WHERE email_usuario='$usuario' LIMIT 1";
 
                $resultado_usuario = mysqli_query($conn,$result_usuario);

		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
               
                        
			if(password_verify($senha, $row_usuario['senha_usuario'])){

                                
				$_SESSION['cod_usuario'] = $row_usuario['cod_usuario'];
				$_SESSION['nome_usuario'] = $row_usuario['nome_usuario'];				
                                $_SESSION['nivel_acesso'] = $row_usuario['nivel_acesso'];
                                $_SESSION['email_usuario'] = $row_usuario['email_usuario'];
                                $_SESSION['loggedin_time'] = time(); 

                                
                  
                                
                             if($_SESSION['nivel_acesso']    ==  'User'){         
        
                             header("Location: indexUser.php");
                             	
                             }else{
                                       
                             header("Location: indexAdm.php");
                             
                             }

                             
                                }
                             
                                echo '<script>';
                                echo "location.href='index.php?p=login'";
                                echo '</script>'; 
                                    
                                }else{ 
                                    $_SESSION['msgLog'] = "<div class='alert alert-danger'>Login ou senha, incorretos. Tente novamente!</div>";
				
                                echo '<script>';
                                echo "location.href='index.php?p=login'";
                                echo '</script>';
                           
                             }
                             

	}else{

	}
}else{
	$_SESSION['msgLog'] = "<div class='alert alert-danger'>Pagina nao encontrada!</div>";

}

