
<section>
    <form class="frm"action="insertsite.php" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="site" value="insert">
         
         <?php
			if(isset($_SESSION['msgSite'])){
				echo $_SESSION['msgSite'];
				unset($_SESSION['msgSite']);
			}
                        
                       ?>
         
         
         
        <label class="">Digite o nome do Site</label><br>
        <input name="nome_site" class="campo" type="text" placeholder="A DEFINIR TEXTO" tabindex="1" required><br>
        
         <label>Escolher a imagem para representar o site</label><br>
        <input name="img_site" class="" type="file" tabindex="5" required><br>
        
        <label class="">Digite a descrição do site :</label><br>
        <input name="desc_site" class="campo" type="text" placeholder="A DEFINIR TEXTO" tabindex="1" required><br>
        
        <label class="">Digite a URL do site :</label><br>
        <input name="link_site" class="campo" type="url" placeholder="A DEFINIR TEXTO" tabindex="1" required><br>
   
        <button type="submit" name="btnCadastro" class="button bg-azul" value="Cadastrar"><span>Confirmar</span></button>
        
    </form>
</section>

