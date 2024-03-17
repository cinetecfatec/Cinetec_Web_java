<html>
    <head> 

        <title>Cinetec</title>
        <link rel="stylesheet" href="editar.css">
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
                            "select * from `lista_filmes` where `nome` like  
                            '{$_POST['busca_nome']}%' ORDER BY `nome` ASC");
                    } else {
                           $sql = mysql_query("select * from `lista_filmes` ORDER BY `id_filme` ASC");
                    }
    
                       if(isset($_GET['apagar'])){
                           $sql = mysql_query("delete from lista_filmes where nome=". $_GET['apagar']);
                               echo "<br>";
                               echo "<center>";
                               echo "<hr>";
                               echo "FILME EXCLUÍDO COM SUCESSO!!!";
                               echo "<br>";
                               echo "<br>";
                               echo "<a href=\"edita_filmes.php\">VOLTAR</a>"; 
                               echo "<hr>";
                               return false;	
                    }
                ?>

                <center>
                    <form name="form3" method="POST" action="edita_filmes.php">
                        DIGITE UM FILME: <input type="text" name="busca_nome">
                        <input type="submit" value="FILTRAR" onclick="<?php $conta_linhas=0;?>" >
                    </form>

                    <table border="1" align="center">
		                <tr>
        			        <th colspan="17" bgcolor="black">LISTAGEM DE FILMES</th>
            			</tr>
	            
                        <tr>
		                	<th bgcolor="black">ID</th>
                			<th bgcolor="black">NOME</th>
        		        	<th bgcolor="black">FOTO DO CARTAZ</th>
                			<th bgcolor="black">TRAILER</th>
		                	<th bgcolor="black">GÊNERO</th>
                            <th bgcolor="black">DISTRIBUIDORA</th>
                            <th bgcolor="black">DURAÇÃO</th>
                            <th bgcolor="black">ELENCO</th>
                            <th bgcolor="black">SINOPSE</th>
                            <th bgcolor="black">STATUS</th>
                            <th bgcolor="black">CLASSIFICAÇÃO</th>
                            <th bgcolor="black">TRAILER SITE</th>
                            <th bgcolor="black">CLASSIFICAÇÃO SITE</th>
                            <th bgcolor="black">DUBLAGEM</th>
                            <th bgcolor="black">2D/3D</th>
                            <th bgcolor="black">HORARIO - SALA 1</th>
                            <th bgcolor="black">HORARIO - SALA 2</th>
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
                        
                            <form action="editar_filmes.php" name="form4" method="post">

                                <td align="center"><input type="text" name="edita_id_filme" placeholder="<?php echo $linha['id_filme'];?>"value="<?php echo $linha['id_filme'];?>"></td>
                                <td align="center"><input type="text" name="edita_nome" placeholder="<?php echo utf8_decode(utf8_encode($linha['nome']));?>"value="<?php echo utf8_decode(utf8_encode($linha['nome']));?>"></td>
                                <td align="center"><input type="text" name="edita_foto_cartaz" placeholder="<?php echo $linha['foto_cartaz']; ?>" value="<?php echo $linha['foto_cartaz']; ?>"></td>
                                <td align="center"><input type="text" name="edita_trailer" placeholder="<?php echo $linha['trailer']; ?>" value="<?php echo $linha['trailer']; ?>"></td>
                                <td align="center"><input type="text" name="edita_genero" placeholder="<?php echo utf8_decode(utf8_encode($linha['genero'])); ?>" value="<?php echo utf8_decode(utf8_encode($linha['genero'])); ?>"></td>
                                <td align="center"><input type="text" name="edita_distribuidora" placeholder="<?php echo utf8_decode(utf8_encode($linha['distribuidora'])); ?>" value="<?php echo utf8_decode(utf8_encode($linha['distribuidora'])); ?>"></td>
                                <td align="center"><input type="text" name="edita_duracao" placeholder="<?php echo $linha['duracao']; ?>" value="<?php echo $linha['duracao']; ?>"></td>
                                <td align="center"><input type="text" name="edita_elenco" placeholder="<?php echo utf8_decode(utf8_encode($linha['elenco'])); ?>" value="<?php echo utf8_decode(utf8_encode($linha['elenco'])); ?>"></td>
                                <td align="center"><input type="text" name="edita_sinopse" placeholder="<?php echo utf8_decode(utf8_encode($linha['sinopse'])); ?>" value="<?php echo utf8_decode(utf8_encode($linha['sinopse'])); ?>"></td>
                                <td align="center"><input type="text" name="edita_status" placeholder="<?php echo $linha['status']; ?>" value="<?php echo $linha['status']; ?>"></td>
                                <td align="center"><input type="text" name="edita_classificacao" placeholder="<?php echo $linha['classificacao']; ?>" value="<?php echo $linha['classificacao']; ?>"></td>
                                <td align="center"><input type="text" name="edita_trailer_site" placeholder='<?php echo $linha["trailer_site"]; ?>' value='<?php echo $linha["trailer_site"];?>'></td>
                                <td align="center"><input type="text" name="edita_indicativa_site" placeholder="<?php echo $linha['indicativa_site']; ?>" value="<?php echo $linha['indicativa_site']; ?>"></td>
                                <td align="center"><input type="text" name="edita_dublado_ou_legendado" placeholder="<?php echo $linha['dublado_ou_legendado']; ?>" value="<?php echo $linha['dublado_ou_legendado']; ?>"></td>
                                <td align="center"><input type="text" name="edita_2D_ou_3D" placeholder="<?php echo $linha['2D_ou_3D']; ?>" value="<?php echo $linha['2D_ou_3D']; ?>"></td>
                                <td align="center"><input type="text" name="edita_horario_sala1" placeholder="<?php echo $linha['horario_sala1']; ?>" value="<?php echo $linha['horario_sala1']; ?>"></td>
                                <td align="center"><input type="text" name="edita_horario_sala2" placeholder="<?php echo $linha['horario_sala2']; ?>" value="<?php echo $linha['horario_sala2']; ?>"></td>


                                <th><a href="edita_filmes.php?apagar='<?php echo $linha['id_filme']; ?>'"><img src='lixeira.png'></a></th>
                                <th><button type="submit" onclick="document.form4.action='editar_filmes.php'" value=""><img src='lapis.png'></button> </th>
                                <td align="center"><input type="text" name="edita_PK"  value="<?php echo $linha['id_filme']; ?>" class="table_disabled" style="display:none;"></td>
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
                </center>
                <a href="adm_page.php">EDITAR USUÁRIOS</a>
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