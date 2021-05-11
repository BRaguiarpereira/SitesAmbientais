<?php
session_start();
require_once 'Db/db2.php';
?>


<!DOCTYPE html>
<html lang=pt-br>
    <head>
        <title>Plano Ambiental</title>
        <meta charset=UTF-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="icon" href="imagens/f3.jpg">
        <link href="css/cssReset.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/default.css" rel="stylesheet"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
        <script>
            function desce(x){
                if (x===1){
                    document.getElementById('login').style.display="block";
                }else{
                    document.getElementById('login').style.display="none";
                }
            }
        </script>
    </head>
    <body>
        <div id="container">
            <header>
                <nav>
                    <ul class="shadow">
                        <li><a href="index.php?p=home" id="logo" class=""><img id="logo" src="imagens/f3.jpg" ></a></li>
                        <li><a href="index.php?p=home">HOME</a></li>
                        <li onclick="desce(1)" class="entrar"><a href="#">LOGIN▼</a>
                            <form id="login" method="POST" action="acoesLogin.php" class="shadow" onmouseover="desce(1)" autocomplete="off">
                                <input type="email" name="email_usuario" placeholder="Insira seu email" required>
                                <input type="password" name="senha_usuario" class="input_senha" placeholder="Insira sua senha" required>
                                <button type="submit" name="btnLogin" value="Login" class="btn_entrar">Entrar</button>
                                <a href="index.php?p=senha_recuperar">Esqueci a senha</a>
                            </form>
                        </li>                                              
                         <?php
			if(isset($_SESSION['msgSair'])){
                           
				echo $_SESSION['msgSair'];
				unset($_SESSION['msgSair']);
			}
                        ?>
                        
                          <?php
			if(isset($_SESSION['msgLogout'])){
                           
				echo $_SESSION['msgLogout'];
				unset($_SESSION['msgLogout']);
			}
                        ?>                       
                    </ul>
                </nav>
            </header>
            <main>
                <?php
                if (isset($_GET['p'])) {
                    $b = $_GET['p'];
                    include_once './view/' . $b . '.php';
                } else {
                    include_once './view/home.php';
                }
                ?>
            </main>        
        </div>
    </body>
</html>