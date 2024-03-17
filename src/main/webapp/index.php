    <html>
    <head>
        <title>Cinetec</title>
        <link rel="stylesheet" href="stylescell.css">
        <link rel="stylesheet" href="style.css">
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
            <?php
            
            ?>
            <div class="sidelog">
                <a href="login.php">LOGIN</a>
                <a href="cadastro.php">CADASTRO</a>
            </div>
        </div>
       <main>
            <div class="filmes">
                <h1>FILMES EM CARTAZ</h1>
                <div class="listaDeFilmes">

                    <div class="filme"> 
                    <?php
                        include 'conexao.php';
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 1;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_cartaz/filme1.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        
                        ?> 
                    </div>
                    
                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 2;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_cartaz/filme2.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                    </div>
                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 3;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_cartaz/filme3.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                        </div>
                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 4;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_cartaz/filme4.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                    </div>
                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 5;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_cartaz/filme5.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                    </div>
                    <div style="align-self: center; line-height: 0%;">
                    
                    </div>
                </div>
            </div>
            
            <div class="filmes2">
                <h1>FILMES EM BREVE</h1>
                <div class="listaDeFilmes">

                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 6;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_breve/filme6.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                    </div>
                    
                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 7;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_breve/filme7.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                    </div>
                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 8;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_breve/filme8.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                    </div>
                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 9;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_breve/filme9.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                    </div>
                    <div class="filme"> 
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, genero from `lista_filmes` where id_filme = 10;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<a href="./Filmes_em_breve/filme10.php">';
                        echo '<img src='.$bd['foto_cartaz'].'>'; 
                      
                        echo '<div class="nomeFilme">';
                        echo    '<strong>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</strong>';
                        echo '</div>';
                        echo    '</a>';
                        echo    '<p>'.utf8_decode(utf8_encode($bd['nome'])).'<br>('.utf8_decode(utf8_encode($bd['genero'])).')</p>';
                        ?> 
                    </div>
                    <div style="align-self: center; line-height: 0%;">
                    
                    </div>
                </div>
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