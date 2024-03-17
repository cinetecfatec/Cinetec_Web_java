<?php
  include 'conexao.php';
  session_start();
		 $usuario = $_POST["login_usuario"];
		 $senha = $_POST["login_senha"];

         	 $sql=mysql_query ("SELECT  * FROM tb_cadastro 
		            WHERE (cad_email='$usuario') 
					and senha='$senha'"); 			 

         if ($usuario ==="admin" && $senha === "admin"){

			$_SESSION['nome'] = 'admin';
            header("Location:adm_page.php");
        }
			
		 if (mysql_num_rows($sql) > 0) {
			$bd = mysql_fetch_assoc($sql);
		    echo "<center>";
			echo "<hr>";
			echo "CONTA LOGADA COM SUCESSO!"; 
			echo "<hr>"; 
            echo "<br>";
			$_SESSION['nome'] = $bd['cad_nome'];
			header("Location:index.php");


			}	
	    else {
		      echo "<center>";
			  echo "<hr>";
		      echo "LOGIN INVALIDO!!!"; 
              echo "<hr>";
			  echo "<br>";

			  }
?>
