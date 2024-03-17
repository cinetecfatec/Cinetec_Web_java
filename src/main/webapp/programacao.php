

<html>
    <head>
        <title>Cinetec</title>
        <link rel="stylesheet" href="programacaoStyle.css">
        <link rel="stylesheet" href="programacocell.css">
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
              <a href="index.php">INÍCIO</a>
              <a href="programacao.php" id="att">PROGRAMAÇÃO</a>
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
               <a href="index.php">INÍCIO</a>
               <a href="programacao.php" id="att">PROGRAMAÇÃO</a>
               <a href="sobrenos.php">SOBRE NÓS</a>
            </div>
            <div class="sidelog">
                <a href="login.php">LOGIN</a>
                <a href="cadastro.php">CADASTRO</a>
            </div>
        </div>

        <main>
            <div class="programacaoContainer">
                <div class="headerData">
                    <label for="inputDatas">Data</label>
                    <input type ="text" name="data" placeholder="27/nov - Segunda" id="inputDatas" list="dataProgramacao" >
                    <datalist id="dataProgramacao"> 
                        <option>27/Nov - Segunda</option>
                        <option>28/Nov - Terça</option>
                        <option>29/Nov - Quarta</option>
                        <option>30/Nov - Quinta</option>
                        <option>01/Dez - Sexta</option>
                    </datalist>
                </div>
                <div  class="containerFilmes">
                    <?php
                    include 'conexao.php';
                    $sql = mysql_query("select foto_cartaz, nome, dublado_ou_legendado, 2D_ou_3D, indicativa_site, horario_sala1, horario_sala2 from `lista_filmes` where id_filme = 1;");
                    $bd = mysql_fetch_assoc($sql);
                    echo '<img src='.$bd['foto_cartaz'].'id="f2"/>';
                    
                    echo '<div class="info">';
                    echo        '<h1 id="tituloFilme">'.utf8_decode(utf8_encode($bd['nome'])).'</h1>';
                      
                    echo    '<div class="horarios">';
                    echo        '<p>Sala 1</p>';
                    echo        '<div class="containerBotoes">';
                    echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                    echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                    echo            '<a href="\Cinetec\Compra\cfilme1.php"><button class="botaoHorario">'.$bd['horario_sala1'].'</button></a>';
                               
                                
                    echo        '</div>';
                    echo        '<p>Sala 2</p>';
                    echo        '<div class="containerBotoes">';
                    echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                    echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                    echo            '<a href="\Cinetec\Compra\cfilme1_sala2.php"><button class="botaoHorario">'.$bd['horario_sala2'].'</button></a>';
                    
                    echo        '</div>';

                    echo        '<img src='.$bd['indicativa_site'].' />';
                    ?>        
                        </div>
                    </div>
                </div>
                <div  class="containerFilmes">
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, dublado_ou_legendado, 2D_ou_3D, indicativa_site, horario_sala1, horario_sala2 from `lista_filmes` where id_filme = 2;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<img src='.$bd['foto_cartaz'].'id="f2"/>';
                        
                        echo '<div class="info">';
                        echo        '<h1 id="tituloFilme">'.utf8_decode(utf8_encode($bd['nome'])).'</h1>';
                        
                        echo    '<div class="horarios">';
                        echo        '<p>Sala 1</p>';
                        echo        '<div class="containerBotoes">';
                        echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                        echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                        echo            '<a href="\Cinetec\Compra\cfilme2.php"><button class="botaoHorario">'.$bd['horario_sala1'].'</button></a>';
                                
                                    
                        echo        '</div>';
                        echo        '<p>Sala 2</p>';
                        echo        '<div class="containerBotoes">';
                        echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                        echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                        echo            '<a href="\Cinetec\Compra\cfilme2_sala2.php"><button class="botaoHorario">'.$bd['horario_sala2'].'</button></a>';
                        
                        echo        '</div>';

                        echo        '<img src='.$bd['indicativa_site'].' />';
                        ?> 
                        </div>
                    </div>
                </div>
                <div  class="containerFilmes">
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, dublado_ou_legendado, 2D_ou_3D, indicativa_site, horario_sala1, horario_sala2 from `lista_filmes` where id_filme = 3;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<img src='.$bd['foto_cartaz'].'id="f2"/>';
                        
                        echo '<div class="info">';
                        echo        '<h1 id="tituloFilme">'.utf8_decode(utf8_encode($bd['nome'])).'</h1>';
                        
                        echo    '<div class="horarios">';
                        echo        '<p>Sala 1</p>';
                        echo        '<div class="containerBotoes">';
                        echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                        echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                        echo            '<a href="\Cinetec\Compra\cfilme3.php"><button class="botaoHorario">'.$bd['horario_sala1'].'</button></a>';
                                
                                    
                        echo        '</div>';
                        echo        '<p>Sala 2</p>';
                        echo        '<div class="containerBotoes">';
                        echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                        echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                        echo            '<a href="\Cinetec\Compra\cfilme3_sala2.php"><button class="botaoHorario">'.$bd['horario_sala2'].'</button></a>';
                        
                        echo        '</div>';

                        echo        '<img src='.$bd['indicativa_site'].' />';
                        ?> 
                        </div>
                    </div>
                </div>
                <div  class="containerFilmes">
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, dublado_ou_legendado, 2D_ou_3D, indicativa_site, horario_sala1, horario_sala2 from `lista_filmes` where id_filme = 4;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<img src='.$bd['foto_cartaz'].'id="f2"/>';
                        
                        echo '<div class="info">';
                        echo        '<h1 id="tituloFilme">'.utf8_decode(utf8_encode($bd['nome'])).'</h1>';
                        
                        echo    '<div class="horarios">';
                        echo        '<p>Sala 1</p>';
                        echo        '<div class="containerBotoes">';
                        echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                        echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                        echo            '<a href="\Cinetec\Compra\cfilme4.php"><button class="botaoHorario">'.$bd['horario_sala1'].'</button></a>';
                                
                                    
                        echo        '</div>';
                        echo        '<p>Sala 2</p>';
                        echo        '<div class="containerBotoes">';
                        echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                        echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                        echo            '<a href="\Cinetec\Compra\cfilme4_sala2.php"><button class="botaoHorario">'.$bd['horario_sala2'].'</button></a>';
                        
                        echo        '</div>';

                        echo        '<img src='.$bd['indicativa_site'].' />';
                        ?> 
                        </div>
                    </div>
                </div>
                <div  class="containerFilmes">
                    <?php
                        $sql = mysql_query("select foto_cartaz, nome, dublado_ou_legendado, 2D_ou_3D, indicativa_site, horario_sala1, horario_sala2 from `lista_filmes` where id_filme = 5;");
                        $bd = mysql_fetch_assoc($sql);
                        echo '<img src='.$bd['foto_cartaz'].'id="f2"/>';
                        
                        echo '<div class="info">';
                        echo        '<h1 id="tituloFilme">'.utf8_decode(utf8_encode($bd['nome'])).'</h1>';
                        
                        echo    '<div class="horarios">';
                        echo        '<p>Sala 1</p>';
                        echo        '<div class="containerBotoes">';
                        echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                        echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                        echo            '<a href="\Cinetec\Compra\cfilme5.php"><button class="botaoHorario">'.$bd['horario_sala1'].'</button></a>';
                                
                                    
                        echo        '</div>';
                        echo        '<p>Sala 2</p>';
                        echo        '<div class="containerBotoes">';
                        echo            '<button class="botaoDublado">'.$bd['dublado_ou_legendado'].'</button>';
                        echo            '<button class="botao3d">'.$bd['2D_ou_3D'].'</button>';
                        echo            '<a href="\Cinetec\Compra\cfilme5_sala2.php"><button class="botaoHorario">'.$bd['horario_sala2'].'</button></a>';
                        
                        echo        '</div>';

                        echo        '<img src='.$bd['indicativa_site'].' />';
                        ?> 
                        </div>
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