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
	   <div class= "imagem2">
	   
	   <div class ="img2">
		  
		   <img src = "Imagens/edit.jpg" alt=""/>
		   		   
		 </div>
		 
	  <div class="titulo">
	  
        <h1>Editar Cadastro</h1>
		
		</div>
		
		
        <div class="novo">
            <?php
                $conexao = new mysqli('localhost', 'root', '', 'db_biblioteca');
                 
                if($_SERVER['REQUEST_METHOD'] === 'POST') {
					 
                    if(empty($_POST['nome'])) {
						
                        echo ' O nome não foi informado ';
						
						
                    } else if(empty($_POST['idade'])) {
						
                        echo ' Idade não informada ';
					
					}else if(!is_numeric($_POST['idade'])) {
                        echo ' Idade não pode conter letras ';
						
						
					}  else if(empty($_POST['cpf'])) {
						
                        echo ' CPF não informado ';
						
					
					}  else if(!is_numeric($_POST['cpf'])) {
						
                        echo ' CPF não pode conter letras ';
						
					}  else if(mb_strlen($_POST['cpf']) != 11) {
						
                        echo ' Quantidade de números do CPF inválido ';
						
						
                    } else if(empty($_POST['vip'])) {
						
                        echo ' Tipo de Cliente não informado ';   						
					
					} else if(strtoupper($_POST['vip']) !== 'S' &&  strtoupper($_POST['vip']) !== 'N') {

						echo ' Tipo de Cliente informado inválido, digite (S / N) ';
			      } 
				    else if(empty($_POST['entrada'])) {
						
                        echo ' Data cadastro não informada ';
							
                    } else {
                        $query = "UPDATE cadastro
                                    SET
                                        nome = '". addslashes($_POST['nome']) ."',
                                        idade = ". $_POST['idade'] .",
										cpf = '". $_POST['cpf'] ."',
										vip = '". strtoupper($_POST['vip']) ."',
                                        entrada = '". $_POST['entrada'] ."'
                                        ". (!empty($_POST['saida']) ? ", saida = '" . $_POST['saida'] . "'" : '') ."
                                    WHERE id = " . $_POST['id'] . ";";
                     
                        $conexao->query($query);
                        header('Location: index.php');
                    }
							 
                }
            
                $query = "SELECT * FROM cadastro WHERE id = " . $_GET['id'] . ";";
                $visitante = $conexao->query($query);
                $visitante = $visitante->fetch_assoc();

                adaptarDataHora($visitante['entrada']);

                function adaptarDataHora($dataHora) {
                    if($dataHora) {
                        $dataHora = str_replace(' ', 'T', $dataHora);
                        $dataHora = substr($dataHora, 0, 16);
                        return $dataHora;
                    }
                }
			
            ?>
			 </br>
			  </br>
			</div>
            <div class="novo">			
            <form method="POST">

                <div>
                    Nome: <input name="nome" type="text" value="<?= $visitante['nome'] ?>" />
                </div>
				
                <div>
                    Idade: <input name="idade" type="number" value="<?= $visitante['idade'] ?>" />
                </div>
				
				<div>
                    CPF: <input name="cpf" type= "text" value="<?= $visitante['cpf'] ?>" />
                </div>
				
				<div>
                    VIP: <input name="vip" type= "text" value="<?= $visitante['vip'] ?>" />
                </div>
				
                <div>
                    Data de Cadastro: <input name="entrada" type="datetime-local" value="<?= adaptarDataHora($visitante['entrada']) ?>" />
                </div>
				
                <div>
                    Fim do Cadastro (opcional): <input name="saida" type="datetime-local" value="<?= adaptarDataHora($visitante['saida']) ?>" />
                </div>
				
                <div>
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
					</br>
                    <input type="submit" />
					
					<a href="index.php" method="POST" type="submit" class="btn btn-info" >Cancelar</a>
                </div>
            </form>
        </div>
    </body>
</html>