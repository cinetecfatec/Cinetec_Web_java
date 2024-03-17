

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
                    date_default_timezone_set('UTC');
		 
                    $editar_id_filme = $_POST["edita_id_filme"];
                    $editar_nome = $_POST["edita_nome"];	
                    $editar_foto_cartaz = $_POST['edita_foto_cartaz'];		
                    $editar_trailer = $_POST["edita_trailer"];	
                    $editar_genero = $_POST["edita_genero"];	
                    $editar_distribuidora = $_POST["edita_distribuidora"];	
                    $editar_duracao = $_POST["edita_duracao"];
                    $editar_elenco = $_POST["edita_elenco"];
                    $editar_sinopse = $_POST["edita_sinopse"];
                    $editar_status = $_POST["edita_status"];
                    $editar_classificacao = $_POST["edita_classificacao"];
                    $editar_trailer_site = $_POST["edita_trailer_site"];
                    $editar_indicativa_site = $_POST["edita_indicativa_site"];
                    $editar_dublado_ou_legendado = $_POST["edita_dublado_ou_legendado"];
                    $editar_2D_ou_3D = $_POST["edita_2D_ou_3D"];
                    $editar_horario_sala1 = $_POST["edita_horario_sala1"];
                    $editar_horario_sala2 = $_POST["edita_horario_sala2"];
                    $editar_PK = $_POST["edita_PK"];	
         
    
                    $sql =mysql_query ("UPDATE lista_filmes SET id_filme='$editar_id_filme', nome='$editar_nome', foto_cartaz='$editar_foto_cartaz',                    
                    trailer='$editar_trailer', genero='$editar_genero', distribuidora='$editar_distribuidora', duracao='$editar_duracao', elenco='$editar_elenco',
                    sinopse='$editar_sinopse', status='$editar_status', classificacao='$editar_classificacao', trailer_site='$editar_trailer_site',
                    indicativa_site='$editar_indicativa_site', dublado_ou_legendado='$editar_dublado_ou_legendado', 2D_ou_3D='$editar_2D_ou_3D',
                    horario_sala1='$editar_horario_sala1', horario_sala2='$editar_horario_sala2' WHERE id_filme='$editar_PK';");
                        echo "<center>";		  
            		    echo "<hr>";
            		    echo "FILME ALTERADO COM SUCESSO !!!";
                        echo "<br>";
                        echo "PK = " . $editar_PK;
                        echo "<br>";              
                        echo "Nome do filme = " . $editar_nome;
                        echo "<br>";
                        echo "Foto do cartaz =" . $editar_foto_cartaz;
                        echo "<br>";
                        echo "Trailer = ". $editar_trailer;
                        echo "<br>";
                        echo "Gênero = ". $editar_genero;
                        echo "<br>";
                        echo "Distribuidora = ". $editar_distribuidora;
                        echo "<br>";
                        echo "Duração = ". $editar_duracao;
                        echo "<br>";
                        echo "Elenco = ". $editar_elenco;
                        echo "<br>";
                        echo "Sinopse = " . $editar_sinopse;
                        echo "<br>";
                        echo "Status = ". $editar_status;
                        echo "<br>";
                        echo "Classificação = ". $editar_classificacao;
                        echo "<br>";
                        
                        echo "<br>";
                        echo "Classificação do site = ". $editar_indicativa_site;
                        echo "<br>";
                        echo "Dublagem = ". $editar_dublado_ou_legendado;
                        echo "<br>";
                        echo "2D ou 3D = ". $editar_2D_ou_3D;
                        echo "<br>";
                        echo "Horario da sala 1 = ". $editar_horario_sala1;
                        echo "<br>";
                        echo "Horário da sala 2 = ". $editar_horario_sala2;
                        echo "<br>";

                    if (isset($_GET['edit'])) echo "ID PK = ". $_GET['edit'];
            		    echo "<hr>";
		                echo "<br>";
	                    echo "<a href=\"edita_filmes.php\">RETORNAR PARA A PÁGINA DE EDIÇÃO DOS FILMES </a>"; 
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
