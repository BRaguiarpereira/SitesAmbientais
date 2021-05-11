<section>
       <h1>Faça Login para continuar</h1>
    <form method="POST" action="acoesLogin.php" class="frm">
        
        
         <?php
			if(isset($_SESSION['msgLog'])){
				echo $_SESSION['msgLog'];
				unset($_SESSION['msgLog']);
			}
                        
                       ?>
        
          <?php
			if(isset($_SESSION['msgPerm'])){
                           
				echo $_SESSION['msgPerm'];
				unset($_SESSION['msgPerm']);
			}
                        ?>
        
        
        
        <label class="">Informe seu e-mail</label><br>
        <input type="email" name="email_usuario" class="campo" placeholder="Ex: exemplo@mail.com" required><br>
        <label class="">Digite uma senha</label><br>
        <input type="password" name="senha_usuario" class="campo" required><br>
        
       <button class="button bg-azul" type="submit" name="btnLogin" value="Login"><span>Entrar</span></button>
    </form>
       <br>
</section>
    
