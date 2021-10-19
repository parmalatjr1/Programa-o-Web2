 <UNIME>
 <SISTEMAS DE INFORMAÇÃO>
 <PROGRAMAÇÃO PARA WEB 2>
 <PROF. PABLO RICARDO ROXO SILVA>
 <ALUNO. GERALDO ANTÔNIO DA SILVA JÚNIOR>
 <ATIVIDADE OFICIAL 1 >
 
<!doctype html>
<html>
    <head>
        <title>Biblioteca Virtual</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="style.css"/>
    </head>
    <body>
	
	<div class= "imagem">
	   
	   <div class ="img1">
		  
		   <img src = "Imagens/Logo.jpg" alt=""/>
		   		   
		 </div>
		   	   
		   
	</div class="fundo">
		 
	   <div class="titulo">
		 
        <h1>Lista de Cadastros</h1>
		
	  </div>
		
        <div class= "novo">
		
            <a href="add.php"> Novo Cadastro</a>
			
        </div>
		
		<div class="fundo">
		    </br>
		    </br>
		    </br>
		</div>
		
        <div class="tabela">
		
            <table border="1">
                <tr>
                    <td>Nome</td>
                    <td>Idade</td>
					<td>CPF</td>
					<td>VIP</td>
                    <td>Cadastrado/Atualizado</td>
                    <td>Fim do Cadastro</td>
                    <td>Opções</td>
                </tr>

                <?php
                    $conexao = new mysqli('localhost', 'root', '', 'db_biblioteca');
                    
                    if(!empty($_GET['id'])) {
                        $query = "DELETE FROM cadastro WHERE id = " . $_GET['id'] . ";";
                        $conexao->query($query);
                    }

                    $query = "SELECT * FROM cadastro;";
                    $lista = $conexao->query($query);

                    while($pessoa = $lista->fetch_assoc()) {
                        echo '
                            <tr>
                                <td>' . $pessoa['nome'] . '</td>
                                <td>' . $pessoa['idade'] . ' anos</td>
								<td>' . $pessoa['cpf'] . '</td>
                                <td>' . $pessoa['vip'] . '</td>
                                <td>' . formatarDataHora($pessoa['entrada']) . '</td>
                                <td>' . formatarDataHora($pessoa['saida']) . '</td>
                                <td>
                                    <a href="edit.php?id=' . $pessoa['id'] . '">Editar</a>
                                    <a href="#" onclick="excluir(' . $pessoa['id'] . ')">Excluir</a>
                                </td>
                            </tr>
                        ';
                    }

                    function formatarDataHora($dataHora) {
                        if($dataHora) {
                            $dataHora = DateTime::createFromFormat('Y-m-d', $dataHora);
                            return $dataHora->format('d/m/Y');
                        }
                    }
                ?>
            </table>
        </div>
		<div class="fundo">
		    </br>
		    </br>
		    </br>
		</div>
        <script type="text/javascript">
            function excluir(id) {
                if(confirm("Deseja realmente apagar o cadastro?")) {
                    window.location = '?id=' + id;
                }
            }
        </script>
    </body>
</html>