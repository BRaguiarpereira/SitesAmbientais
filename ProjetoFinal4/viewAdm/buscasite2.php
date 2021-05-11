<section>
    <h1>Proteger o meio ambiente é responsabilidade de todos</h1>
       <div class="filtro_busca">
           
        <form action="indexAdm.php?p=buscasite2" method="post" autocomplete="off" id="" class="frm fl busca">
            <label class="">Pesquisar por SITE</label><br>
            <input class="campo" type="search" name="busca" placeholder="Pesquisar..." tabindex="1" required><button class="buscar" type="submit" name="buscar" value=""></button>
        </form>
              
           <a href="indexAdm.php?p=adm_lista_site" class="button_voltar bg-roxo"><span>Ver TODOS</span></a>
    </div>
<?php
require_once 'Db/busca.php';

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
        
        
	$pesquisar2 = $_POST['busca'];
	$result_sites2 = "SELECT * FROM site WHERE nome_site LIKE '%$pesquisar2%' LIMIT 5";
	$resultado_sites2 = mysqli_query($conn, $result_sites2);
	
	
        
             if(mysqli_num_rows($resultado_sites2) > 0){
while($rows_sites2 = mysqli_fetch_array($resultado_sites2)){              
  
          echo '<div class="mini_card shadow">
        <img src="imagens/add/'.$rows_sites2['img_site'].'" alt="250x150">
        <div class="mini_caixa">
             <span class="bloquear_texto">'.$rows_sites2['nome_site'].'</span>
             <span class="bloquear_texto">'.$rows_sites2['desc_site'].'</span>
        </div>
        <a href="delete.php?codigo='.$rows_sites2['cod_site'].'"   class="mini_button bg-vermelho"><span>Excluir</span></a> 
    </div>'; 
	}
	}else{
		echo '<p class="not_found frm">Nenhum SITE encontrado...</p>';
	}  
?>    
</section>


