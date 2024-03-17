<?php
session_start();
    if (isset($_SESSION['nome'])) {
    echo '<div class="sidelog" style="
                                display: flex;
                                align-items: center;
                                font-size: 1.2em;
                                gap: 10px;">';
    echo '<p style="font-size: 1.5em; display: block">'.$_SESSION['nome'].'</p>';
    echo '<a href="deslogar.php" style= "text-decoration: none; border: white solid; border-radius: 15px; padding: 3px 3px 3px 3px; background-color: white; color: black">Deslogar</a>';
    echo '</div>';
    } else {
    echo '<div class="headerLogin">
        <a href="/Cinetec/login.php">LOGIN</a>
        <a href="/Cinetec/cadastro.php">CADASTRO</a>
        </div>';   
    }
?>