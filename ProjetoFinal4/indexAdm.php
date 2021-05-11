<?php
session_start();
require_once 'Db/db2.php';
if(!empty($_SESSION['cod_usuario'])){
        if($_SESSION['nivel_acesso']    ==  'user'):           
            echo '<script>window.location="indexUser.php"</script>';          
   endif;
?>

<!DOCTYPE html>
<html lang=pt-br>
    <head>
        <title>Plano ambiental</title>
        <meta charset=UTF-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="icon" href="imagens/f3.jpg">
        <script src="js/jQuery/jquery-3.1.1.min.js"></script>
        <script src="js/js.js"></script>        
        <link href="css/cssReset.css" rel="stylesheet"/>
        <link href="css/default.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container">
            <header>
                <nav>
                    <ul class="shadow">
                        <li><a href="indexAdm.php?p=home" id="logo" class=""><img id="logo" src="imagens/f3.jpg" alt="Logo Ambiental"></a></li>
                        <li><a href="indexAdm.php?p=home">HOME</a></li>

                        
                        <li class="usuario_adm"><?php echo 'Administrador'.':'; ?>
                        <?php echo '<span class="nome"><b>'.$_SESSION['nome_usuario'].'</b></span>'; ?>
                        <a href="sair.php">SAIR</a></li>

                   
                  
                        
                    
                     <?php
			if(isset($_SESSION['msgSiteIn'])){
				echo $_SESSION['msgSiteIn'];
				unset($_SESSION['msgSiteIn']);
			}
                        ?>

              
                   
                        <?php
			if(isset($_SESSION['msgDeleteP'])){
				echo $_SESSION['msgDeleteP'];
				unset($_SESSION['msgDeleteP']);
			}
                        ?>
                       
                      
                        </ul>   
                </nav>
            </header>
            <main>
                <?php
                if (isset($_GET['p'])) {
                    $b = $_GET['p'];
                    include_once './viewAdm/' . $b . '.php';
                } else {
                    include_once './viewAdm/home.php';
                }
                ?>
               </main>
            <footer>
                <ul class="shadow">


                    <?php

                     }else{

                         $_SESSION['msgRes'] = "<div class='alert alert-danger'>AREA RESTRITA!</div>";
                echo '<script>';
                echo "location.href='index.php'";
                echo '</script>';
                }
                    
                    ?>
               </ul>
            </footer>
        </div>
    </body>
</html>