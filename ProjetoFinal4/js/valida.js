
			function validar(){
                                var conn = '';
                                var num_rows ='';
				var nome = formuser.nome.value;
				var email = formuser.email.value;
                                var rep_email = formuser.rep_email.value;
				var senha = formuser.senha_usuario.value;
                                var rep_senha = formuser.rep_senha.value;
				var result_usuario = "SELECT cod_usuario FROM usuario WHERE email_usuario='". $dados['email'];
                                var resultado_usuario = mysqli_query(conn, result_usuario);
                                
//				if(nome == ""){
//					alert('Preencha o campo nome.');
//					formuser.nome.focus();
//					return false;
//				}
//				
//				if(email == "" || email.indexOf('@') == -1 ){
//					alert('Preencha o campo E-mail.');
//					formuser.email.focus();
//					return false;
//				}
				
				if(senha == "" || senha.length <= 6){
					<div class='alert alert-danger'>A senha deve ter no minimo 6 caracteres!</div>;
					formuser.senha.focus();
					return false;
				}
                                
                                
                                if (senha != rep_senha) {
					<div class='alert alert-danger'>As senha nao conferem!</div>;
					formuser.senha.focus();
					return false;
				}
                                
                                 if (email != rep_email) {
					<div class='alert alert-danger'>Os emails nao conferem!</div>;
					formuser.senha.focus();
					return false;
				}
                                
                                 
		if((resultado_usuario) && (resultado_usuario=> num_rows == 0)){			
                        <div class='alert alert-danger'>Este e-mail nao esta cadastrado!</div>;

			
		}
            }	
		
