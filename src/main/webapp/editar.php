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
                  <div class="headerLogin">
                        <a href="login.php">LOGIN</a>
                        <a href="cadastro.php">CADASTRO</a>
                  </div>
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
                              date_default_timezone_set('UTC');
		 
                              $editar_nome = $_POST["edita_nome"];	
                              $editar_cpf = $_POST['edita_cpf'];	
                              $editar_nascimento = date('Y-m-d',strtotime($_POST["edita_nascimento"]));	
                              $editar_telefone = $_POST["edita_telefone"];	
                              $editar_email = $_POST["edita_email"];	
                              $editar_senha = $_POST["edita_senha"];	
                              $editar_PK = $_POST["edita_PK"];	
         
    
                              $sql =mysql_query ("UPDATE tb_cadastro SET cad_nome='$editar_nome', cad_cpf='$editar_cpf', cad_nascimento='$editar_nascimento'
                              , cad_telefone='$editar_telefone', cad_email='$editar_email', senha='$editar_senha' WHERE cad_cpf='$editar_PK';");
                              echo "<center>";		  
		                  echo "<hr>";
            		      echo "CONTA ALTERADA COM SUCESSO !!!";
                              echo "<br>";
                              echo "PK = " . $editar_PK;
                              echo "<br>";              
                              echo "Nome = " . $editar_nome;
                              echo "<br>";
                              echo "CPF = " . $editar_cpf;
                              echo "<br>";
                              echo "Nascimento =" . $editar_nascimento;
                              echo "<br>";
                              echo "Telefone = " . $editar_telefone;
                              echo "<br>";
                              echo "E-Mail = ". $editar_email;
                              echo "<br>";
                              echo "Senha = ". $editar_senha;
                              echo "<br>";
                  
                              if (isset($_GET['edit'])) echo "CPF PK = ". $_GET['edit'];
		                  echo "<hr>";
            		      echo "<br>";
            	            echo "<a href=\"adm_page.php\">RETORNAR PARA A PÁGINA DE ADMINSITRADOR </a>"; 
                        ?>

                  </div>    
            </main>

            <footer>
                  <div class="googlePlayIcone">
                        <i class="fa-brands fa-google-play fa-3x"></i>
                        <i class="fa-brands fa-google-pay fa-2x"></i>
                  </div>

                  <div class="iconesRedesSociais">
                        <a href="https://www.facebook.com/profile.php?id=61553522772338&mibextid=ZbWKwL"><i class="fa-brands fa-square-facebook fa-3x icons" ></i></a>
                        <a href="https://instagram.com/cinetecfatec?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-square-instagram fa-3x icons"></i></a>
                        <a href="https://twitter.com/cinetecfatec"><i class="fa-brands fa-square-twitter fa-3x icons"></i></a>
                  </div>

            </footer>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="sidebar.js"></script>
       
      </body>
</html>
