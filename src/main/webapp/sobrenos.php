<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sobrenosstyle.css">
    <link rel="stylesheet" href="sobrecell.css">
    <script src="https://kit.fontawesome.com/9bbaee9804.js" crossorigin="anonymous"></script>
    <title>Cinetec</title>
</head>
<body>
       <header>
            <div class="headerMenu">
                <div class="logoHeader">
                    <img src="https://i.imgur.com/tVUcSYh.png.png">
                </div>
              <a href="index.php">INÍCIO</a>
              <a href="programacao.php">PROGRAMAÇÃO</a>
              <a href="sobrenos.php" id="att">SOBRE NÓS</a>
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
               <a href="programacao.php">PROGRAMAÇÃO</a>
               <a href="sobrenos.php" id="att">SOBRE NÓS</a>
            </div>
            <div class="sidelog">
                <a href="login.php">LOGIN</a>
                <a href="cadastro.php">CADASTRO</a>
            </div>
        </div>

   <main>
    <div class="containertudo">
        <div class="container1">
            <div class="nomes">
                <div class="nomescontent">
                <h2>Grupo Cinetec</h2>
                <p><br></p>
                <ul>
                    <li>Gustavo Santana Cardoso</li>
                    <li>Rodrigo Bastos Amaral</li>
                    <li>Luciano Ramos Pereira</li>
                    <li>Renato Fernandes da Silva</li>
                    <li>Vincenzo Bonatti</li>
                    <li>Walber Cesar de Souza Santos</li>
                </ul>
                </div>
            </div>
            <div class="imagemcinema1">
                <img src="imagens/cinemasobre.jpg">
            </div>
        </div>    
                <div class="principios">
                    <h2>Princípios</h2>
                    <p><br></p>
                    <ul>
                        <li><h3>Foco no cliente</h3></li>
                        <li>Cuidamos para que do início ao fim haja um atendimento padronizado das interações, troca de informações, entrega e suporte em geral.</li>
                        <li><h3>Engajamento</h3></li>
                        <li>Não só os líderes são os responsáveis por seguir os princípios, mas também todos os colaboradores têm a responsabilidade de se engajar e devem seguir nossos princípios e requisitos.</li>
                        <li><h3>Melhoria contínua</h3></li>
                        <li>Com a abordagem de sistema e resultâncias, nós definimos e medimos resultados para ser possível melhorá-los.</li>
                        <li><h3>Determinação</h3></li>
                        <li>Inovação, participação, trabalho em equipe e responsabilidade.</li>
                    </ul>
                </div>
                <div class="valores">
                    <h2>Valores</h2>
                    <p><br></p>
                    <ul>
                        <li><h3>Atender bem para atender sempre</h3></li>
                        <li>Nosso foco sempre será a experiência do nosso cliente, para que ele se sinta em casa.</li>
                        <li><h3>Segurança</h3></li>
                        <li>Trabalhamos incessantemente para mitigar qualquer possível risco, seja ele físico ou virtual, tornando assim o nosso ambiente o mais seguro possível.</li>
                        <li><h3>Tecnologia</h3></li>
                        <li>Buscamos inserir as tecnologias mais inovadoras da atualidade para melhorar a imersão à nossa nobre arte.</li>
                    </ul>
                </div>
                <div class="imagem2">
                    <img src="imagens/cinema_sala_cc.jpg">
                </div>
            
            <div class="container1">    
                <div class="missao">
                    <h2>Missão</h2>
                    <p><br></p>
                    Nosso objetivo é transmitir a sétima arte ao público, representando todas as culturas de nossa sociedade, e democratizar seu acesso à todos.
                </div>
                <div class="visao">
                    <h2>Visão</h2>
                    <p><br></p>
                    Inspirar nosso público através da nossa dedicação e conscientização, criando uma forte base para o cinema nacional como um todo, e incentivar produtores independentes a terem mais espaço no Brasil e no mundo.
                </div>
            </div>
            <div class="historico">
                <h2>Historico da empresa</h2>
                <p><br></p>
                Fundada em 2023 em Mauá(SP), a Cinetec surgiu da ideia de seis amigos que desejavam disseminar a sétima arte de maneira simples e prática. 
                Atualmente contando com duas salas de cinema, exibindo o que tem de melhor do cinema com comodidade, segurança e tecnologia.
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