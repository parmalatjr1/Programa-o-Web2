 <UNIME>
 <SISTEMAS DE INFORMAÇÃO>
 <PROGRAMAÇÃO PARA WEB 2>
 <PROF. PABLO RICARDO ROXO SILVA>
 <ALUNO. GERALDO ANTÔNIO DA SILVA JÚNIOR>
 <ATIVIDADE OFICIAL 1 >

<!doctype html>
<html>
    <head>
        <title>Cadastro Biblioteca Virtual</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="style.css"/>
    </head>
	
    <body>
	    <div class= "imagem3">
	   
	   <div class ="img3">
		  
		   <img src = "Imagens/novo.jpg" alt=""/>
		   		   
		 </div>
		 
	    <div class="titulo">
		
        <h1>Novo Cadastro</h1>
		
		</div>
		
		
        <div class="novo">
            <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if(empty($_POST['nome'])) {
                        echo 'Nome não informado';
						
                    } else if(empty($_POST['idade'])) {
                        echo 'Idade não informada';
						
					}else if(!is_numeric($_POST['idade'])) {
                        echo ' Idade não pode conter letras ';
						
                    } else if(empty($_POST['cpf'])) {
                        echo 'CPF não informado';
						
					} else if(!is_numeric($_POST['cpf'])) {
                        echo ' CPF não pode conter letras ';
					
					}  else if(mb_strlen($_POST['cpf']) != 11) {
						
                        echo ' Quantidade de números do CPF inválido ';						
						
                    } else if(strtoupper($_POST['vip']) !== 'S' &&  strtoupper($_POST['vip']) !== 'N') {
                        echo ' Tipo de Cliente informado inválido, digite (S / N) ';
                    	
                    } else if(empty($_POST['entrada'])) {
                        echo 'Data de Cadastro não informada';
						
                    } else {
                        $conexao = new mysqli('localhost', 'root', '', 'db_biblioteca');
                        $query = "INSERT INTO cadastro
                                        (
                                            nome,
                                            idade,
											cpf,
											vip,
                                            entrada											
                                            ". (!empty($_POST['saida']) ? ', Fim do Cadastro' : '') ."
                                        )
                                    VALUES
                                        (
                                        '". addslashes($_POST['nome']) ."',
                                        ". $_POST['idade'] .",
										'". $_POST['cpf'] ."',
										'". strtoupper($_POST['vip']) ."',
                                        '". $_POST['entrada'] ."'
                                        ". (!empty($_POST['saida']) ? ", saida = '" . $_POST['saida'] . "'" : '') ."
                                        );";
                         //echo $query;
                        $conexao->query($query);
                        header('Location: index.php');
                    }
                }
	
				
            ?>
			</br>
			  </br>
			</div>
			<div class="novo">
            <form method="POST">
                <div>
                    Nome: <input name="nome" type="text" />
                </div>
                <div>
                    Idade: <input name="idade" type="number" />
                </div>
				<div>
                    CPF: <input name="cpf" type="text" />
                </div>
				<div>
                    VIP: <input name="vip" type="text" />
                </div>
                <div>
                    Data de Cadastro: <input name="entrada" type="datetime-local" />
                </div>
                <div>
                    Fim do Cadastro (opcional): <input name="saida" type="datetime-local" />
                </div>
                <div>
                    <input type="submit" />
					<a href="index.php" method="POST" type="submit" class="btn btn-info" >Cancelar</a>
                </div>
            </form>
        </div>
    </body>
</html>