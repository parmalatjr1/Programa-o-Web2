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

    $Inteiro1 = $_POST['Inteiro1'];
    $Inteiro2 = $_POST['Inteiro2'];
   
   if(!is_numeric($Inteiro1) || !is_numeric($Inteiro2))
   {
   echo "O valor é nullo ou não é um numero inteiro"; 
   }
   elseif ($Inteiro1 >0 && $Inteiro2 >0) 
      {
          echo "Os valores que dividem por $Inteiro2 são: ";
		 for($num = 1; $num <= $Inteiro1; $num++)
		 {	 
			 if($Inteiro2 % $num == 0)
	      {
				 echo "$num, "; 
				 
		  }		 
		 
        }
      }
	  
	else {
	echo "VALOR ZERADO";
         }	
	
 ?><BR>
 <BR>
  <input type = "submit" value="Voltar para o menu"> <BR>
 </form> 
   </body> 
   </html>
   
