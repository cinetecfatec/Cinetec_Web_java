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
              <a href="index.php">INÍCIO</a>
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
                <a href="login.php" id="att">LOGIN</a>
                <a href="cadastro.php">CADASTRO</a>
            </div>
       </header>
       <div class="sidebar">
           <div class="sidecont">
               <a href="index.php">INÍCIO</a>
               <a href="programacao.php">PROGRAMAÇÃO</a>
               <a href="sobrenos.php">SOBRE NÓS</a>
            </div>
            <div class="sidelog">
                <a href="login.php" id="att">LOGIN</a>
                <a href="cadastro.php">CADASTRO</a>
            </div>
        </div>


       <main>
            <div class="conteudo">

                <div>
                    <h1>Faça Login</h1>
                    <h3>Cadastre-se ou informe seu e-mail e senha para prosseguir</h3>
                </div>
<form class="cadastro" name="form1" method="post">
                <div class="conteudoLogin">
                    <div class="inputs">
                    <div class="inputlog">
                    <input type="text" name= "login_usuario" class="input1" required/> 
                    <label for="">E-mail</label>
                    </div>
                    <div class="inputlog">
                        <input type="password" name= "login_senha" class="input1" required/>
                        <label for="">Senha</label>
                    </div>
                    </div>
                    <input type="submit" value="Entrar" onclick="document.form1.action='logar.php'" class="enviar">
                    <p>Esqueceu a senha?</p>
                </form>
                </div>
            </div>    
       </main>

       <footer>
        <div class="googlePlayIcone">
            <i class="fa-brands fa-google-play fa-3x"></i>
            <i class="fa-brands fa-google-pay fa-2x"></i>
        </div>

        <div class="iconesRedesSociais">
            <a href="https://www.facebook.com/profile.php?id=61553522772338&mibextid=ZbWKwL" style='color: white;'><i class="fa-brands fa-square-facebook fa-3x icons" ></i></a>
            <a href="https://instagram.com/cinetecfatec?igshid=OGQ5ZDc2ODk2ZA=="style='color: white;'><i class="fa-brands fa-square-instagram fa-3x icons"></i></a>
            <a href="https://twitter.com/cinetecfatec"style='color: white;'><i class="fa-brands fa-square-twitter fa-3x icons"></i></a>
        </div>

</footer>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="sidebar.js"></script>
       
    </body>
</html>