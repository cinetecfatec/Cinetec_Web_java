

<html>
    <head> 

        <title>Cinetec</title>
        <link rel="stylesheet" href="loginStyles.css">
        <link rel="stylesheet" href="logincell.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/9bbaee9804.js" crossorigin="anonymous"></script>
    </head>

    <body>
       <header>
            <div class="headerMenu">
                <div class="logoHeader">
                    <img src="https://i.imgur.com/tVUcSYh.png.png">
                </div>
              <a href="index.php" id="att">INÍCIO</a>
              <a href="programacao.php">PROGRAMAÇÃO</a>
              <a href="sobrenos.php">SOBRE NÓS</a>
            </div>
            <div class="headercel">
                <div class="burguer-container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <a href="index.php"><h1>Cinetec</h1></a>
            </div>
            <?php
                include('session.php');
            ?>
       </header>
       <div class="sidebar">
           <div class="sidecont">
               <a href="index.php" id="att">INÍCIO</a>
               <a href="programacao.php">PROGRAMAÇÃO</a>
               <a href="sobrenos.php">SOBRE NÓS</a>
            </div>
            <div class="sidelog">
                <a href="login.php">LOGIN</a>
                <a href="cadastro.php">CADASTRO</a>
            </div>
        </div>


       <main>
            <div class="conteudo">
            


            <?php

                include 'conexao.php';

                if(isset($_POST['busca_nome']) != '') {
                	$sql = mysql_query(
                        "select * from `tb_cadastro` where `cad_nome` like  
                        '{$_POST['busca_nome']}%' ORDER BY `cad_nome` ASC");
                } else {
                   	$sql = mysql_query("select * from `tb_cadastro` ORDER BY `cad_nome` ASC");
                }

                   if(isset($_GET['apagar'])){
                   	$sql = mysql_query("delete from tb_cadastro where cad_cpf=". $_GET['apagar']);
                       	echo "<br>";
	                       echo "<center>";
	                       echo "<hr>";
                       	echo "USUÁRIO EXCLUÍDO COM SUCESSO!!!";
                       	echo "<br>";
                       	echo "<br>";
                       	echo "<a href=\"adm_page.php\">VOLTAR</a>"; 
                       	echo "<hr>";
                       	return false;	
                }

            ?>

        <html>  
            <center>
                <form name="form1" method="POST" action="adm_page.php">
                    DIGITE UM USUÁRIO: <input type="text" name="busca_nome">
                    <input type="submit" value="FILTRAR" onclick="<?php $conta_linhas=0;?>" >
                </form>

            <table border="1" align="center">
		        <tr>
        			<th colspan="8" bgcolor="black">LISTAGEM DE CONTAS CADASTRADAS</th>
    			</tr>
	    		<tr>
		        	<th bgcolor="black">NOME</th>
        			<th bgcolor="black">CPF</th>
		        	<th bgcolor="black">NASCIMENTO</th>
        			<th bgcolor="black">TELEFONE</th>
		        	<th bgcolor="black">E-MAIL</th>
                    <th bgcolor="black">SENHA</th>
                    <th bgcolor="black">APAGAR</th>
                    <th bgcolor="black">EDITAR</th>
                </tr>
			    <tr>
			
			    <?php
                    $conta_linhas=0;
                    date_default_timezone_set('UTC');
    				while($linha = mysql_fetch_assoc($sql)) {
                    $conta_linhas++; 
                    if($conta_linhas > 10){break;} 

			    ?>
                
                <form action="editar.php" name="form2" method="post">

        			<td align="center"><input type="text" name="edita_nome" placeholder="<?php echo $linha['cad_nome'];?>"value="<?php echo $linha['cad_nome'];?>"></td>
                    <td align="center"><input type="text" name="edita_cpf" placeholder="<?php echo $linha['cad_cpf']; ?>" value="<?php echo $linha['cad_cpf']; ?>"></td>
                    <td align="center"><input type="text" name="edita_nascimento" placeholder="<?php echo date("d/m/Y",strtotime($linha['cad_nascimento'])); ?>" value="<?php echo date("d/m/Y",strtotime($linha['cad_nascimento'])); ?>"></td>
                    <td align="center"><input type="text" name="edita_telefone" placeholder="<?php echo $linha['cad_telefone']; ?>" value="<?php echo $linha['cad_telefone']; ?>"></td>
                    <td align="center"><input type="text" name="edita_email" placeholder="<?php echo $linha['cad_email']; ?>" value="<?php echo $linha['cad_email']; ?>"></td>
                    <td align="center"><input type="text" name="edita_senha" placeholder="<?php echo $linha['senha']; ?>" value="<?php echo $linha['senha']; ?>"></td>


	               <th><a href="adm_page.php?apagar='<?php echo $linha['cad_cpf']; ?>'"><img src='deletar_usuario.png'></a></th>
                   <th><button type="submit" onclick="document.form2.action='editar.php'" value=""><img src='edicao_usuario.png'></button> </th>
                   <td align="center"><input type="text" name="edita_PK"  value="<?php echo $linha['cad_cpf']; ?>" class="table_disabled" ></td>
                </form>
                <tr>
                
    			<?php } 
	    		    echo "<br>";
                    echo "<br>";
			    ?>
            </table>
            
            <style>
                .table_disabled{
                visibility: collapse;
                }
            </style>

            <a href="edita_filmes.php">EDITAR FILMES</a>
            </div>
        </main>

                

       <footer>
        <div class="googlePlayIcone">
            <i class="fa-brands fa-google-play fa-3x"></i>
            <i class="fa-brands fa-google-pay fa-2x"></i>
        </div>

        <div class="iconesRedesSociais">
        <a href="https://www.facebook.com/profile.php?id=61553522772338&mibextid=ZbWKwL" style="color: white"><i class="fa-brands fa-square-facebook fa-3x icons" ></i></a>
                    <a href="https://instagram.com/cinetecfatec?igshid=OGQ5ZDc2ODk2ZA==" style="color: white"><i class="fa-brands fa-square-instagram fa-3x icons"></i></a>
                    <a href="https://twitter.com/cinetecfatec" style="color: white"><i class="fa-brands fa-square-twitter fa-3x icons"></i></a>
        </div>

        </footer>
            <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
            <script src="sidebar.js"></script>
       
    </body>
</html>