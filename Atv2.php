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

    $nota1 = $_POST['Valor1'];
    $nota2 = $_POST['Valor2'];
   
   if(!is_numeric($nota1)){
   echo "O primeiro valor deve ser um numero"; }
 else {
  switch ($nota1 > 0) {
       case ($nota1 == 1 && strtoupper($nota2) == "JANEIRO" )|| ($nota1 == 1 && strtoupper($nota2) == "JAN" ):
       echo "Correto";
       break;
	   
       case ($nota1 == 2 && strtoupper($nota2)== "FEVEREIRO" )|| ($nota1 == 2 && strtoupper($nota2) == "FEV" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 3 && strtoupper($nota2) == "MARÇO" ) || ($nota1 == 3 && strtoupper($nota2) == "MARCO" ) || ($nota1 == 3 && strtoupper($nota2) == "MAR" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 4 && strtoupper($nota2) == "ABRIL" ) || ($nota1 == 4 && strtoupper($nota2) == "ABR" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 5 && strtoupper($nota2) == "MAIO" )|| ($nota1 == 5 && strtoupper($nota2) == "MAI" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 6 && strtoupper($nota2) == "JUNHO" ) || ($nota1 == 6 && strtoupper($nota2) == "JUN" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 7 && strtoupper($nota2) == "JULHO" )|| ($nota1 == 7 && strtoupper($nota2) == "JUL" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 8 && strtoupper($nota2) == "AGOSTO" )|| ($nota1 == 8 && strtoupper($nota2) == "AGO" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 9 && strtoupper($nota2) == "SETEMBRO" ) || ($nota1 == 9 && strtoupper($nota2) == "SET" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 10 && strtoupper($nota2) == "OUTUBRO" )|| ($nota1 == 10 && strtoupper($nota2) == "OUT" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 11 && strtoupper($nota2) == "NOVEMBRO" )|| ($nota1 == 11 && strtoupper($nota2) == "NOV" ):
       echo "Correto";
       break;
	   
	   case ($nota1 == 11 && strtoupper($nota2) == "DEZEMBRO" )|| ($nota1 == 12 && strtoupper($nota2) == "DEZ" ):
       echo "Correto";
       break;
	   
	   default:
	    echo "Incorreto";
		break;
 }}
	
 ?><BR>
 <BR>
  <input type = "submit" value="Voltar para o menu"> <BR>
 </form> 
   </body> 
   </html>
   
