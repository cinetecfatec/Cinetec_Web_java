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
              <a href="index.html">INÍCIO</a>
              <a href="programacao.html">PROGRAMAÇÃO</a>
              <a href="sobrenos.html">SOBRE NÓS</a>
            </div>

            <div class="headercel">
                <div class="burguer-container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <a href="index.html"><h1>Cinetec</h1></a>
            </div>

            <div class="headerLogin">
                <a href="login.html">LOGIN</a>
                <a href="cadastro.html" id="att">CADASTRO</a>
            </div>
       </header>


       <div class="sidebar">
        <div class="sidecont">
            <a href="index.html">INÍCIO</a>
            <a href="programacao.html">PROGRAMAÇÃO</a>
            <a href="sobrenos.html">SOBRE NÓS</a>
         </div>
         <div class="sidelog">
             <a href="login.html" id="att">LOGIN</a>
             <a href="cadastro.html">CADASTRO</a>
         </div>
        </div>


       <main>
            <div class="conteudo">
            


                <?php 

                    include 'conexao.php';
                    $nome = $_POST ["cad_nome"];
                    $cpf = $_POST ["cad_cpf"];
                    $nascimento = $_POST ["cad_nascimento"];
                    $telefone = $_POST ["cad_telefone"];
                    $email = $_POST ["cad_email"];
                    $senha = $_POST ["cad_senha"];


                    $sql =mysql_query ("SELECT * FROM tb_cadastro
                            WHERE cad_cpf='$cpf'
                            OR cad_email='$email'");

                    if (mysql_num_rows($sql) > 0) {
                        echo "<center>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<hr>";
                        echo "CONTA EXISTENTE!!!";
                        echo "<hr>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";

                    } else {
                        $sql=mysql_query ("INSERT INTO `tb_cadastro`(`cad_nome`, `cad_cpf`, `cad_nascimento`, `cad_telefone`, `cad_email`, `senha`) 
                            VALUES ('$nome','$cpf','$nascimento','$telefone','$email','$senha')");
                        echo "<center>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<hr>";
                        echo "CONTA CRIADA COM SUCESSO!!!";
                        echo "<hr>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                    }

                ?>
                <a href="login.php">IR PARA O LOGIN</a>
            </div>
        </main>
    </body>    
    

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