 <UNIME>
 <SISTEMAS DE INFORMAÇÃO>
 <PROGRAMAÇÃO PARA WEB 2>
 <PROF. PABLO RICARDO ROXO SILVA>
 <ALUNO. GERALDO ANTÔNIO DA SILVA JÚNIOR>

<html>
<html lang="en">
<title> AVALIAÇÃO DO ALUNO </title>
<body> 
<form method= "post" action= "Index.php">
<?php

    $nota1 = $_POST['Nota1'];
    $nota2 = $_POST['Nota2'];
    $nota3 = $_POST['Nota3']; 
   
   $MEDIA = ($nota1+$nota2+$nota3)/3;
    echo "NOTA: ";
	
      if($MEDIA >= 7)
   {

	   echo  "$MEDIA - ALUNO APROVADO";
	 
   }
   elseif($MEDIA >= 4)
    {

	   echo "$MEDIA - ALUNO EM RECUPERAÇÃO";	  
    }
   else
    {
	
	   echo "$MEDIA - ALUNO REPROVADO";
    }
	
 ?><BR>
 <BR>
  <input type = "submit" value="Voltar para o menu"> <BR>
 </form> 
   </body> 
   </html>
   
