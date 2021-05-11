<?php
session_start();           
unset($_SESSION['cod_usuario'], $_SESSION['nome_usuario'], $_SESSION['nivel_acesso'], $_SESSION['cod_status_usuario'],  $_SESSION['email_usuario'], $_SESSION['msgLog']);
                $_SESSION['msgSair'] = "<div class='alert alert-success'>Sessão encerrada.</div>";

                echo '<script>';
                echo "location.href='index.php'";
                echo '</script>';
