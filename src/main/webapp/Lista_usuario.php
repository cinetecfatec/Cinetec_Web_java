<?php

include 'conexao.php';

if(isset($_POST['busca_nome']) != '') {
	$sql = mysql_query("select * from tb_cadastro where cad_nome like  '{$_POST['busca_nome']}%' order by cad_nome asc");
} else {
	$sql = mysql_query("select * from tb_cadastro order by cad_nome asc");
}


if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from tb_cadastro where cad_cpf=". $_GET['apagar']);
	 echo "<br>";
	 echo "<center>";
	 echo "<hr>";
	 echo "USU�RIO EXCLU�DO COM SUCESSO!!!";
	 echo "<br>";
	 echo "<br>";
	 echo "<a href=\"listagem.php\">VOLTAR</a>"; 
	 echo "<hr>";
	return false;
	
}

?>

<html>
<body>	  
<center>
<form name="form1" method="POST" action="listagem.php">
DIGITE UM USU�RIO: <input type="text" name="busca_nome"><input type="submit" value="FILTRAR">
</form>


<table border="1" align="center">
		    <tr>
			<th colspan="7" bgcolor="orange">LISTAGEM DE CONTAS CADASTRADAS</th>
			</tr>
			<tr>
			<th bgcolor="yellow">NOME</th>
			<th bgcolor="yellow">CPF</th>
			<th bgcolor="yellow">NASCIMENTO</th>
			<th bgcolor="yellow">TELEFONE</th>
			<th bgcolor="yellow">E-MAIL</th>
            <th bgcolor="yellow">EDITAR</th>
            <th bgcolor="yellow">APAGAR</th>
			</tr>
			<tr>
			
			<?php
				while($linha = mysql_fetch_assoc($sql)) {
			?>
			<td align="center"><?php echo $linha['cad_nome']; ?></td>
			<td align="center"><?php echo $linha['cad_cpf']; ?></td>
			<td align="center"><?php echo $linha['cad_nascimento']; ?></td>
            <td align="center"><?php echo $linha['cad_telefone']; ?></td>
            <td align="center"><?php echo $linha['cad_email']; ?></td>

	       <th><a href="listagem.php?apagar='<?php echo $linha['cad_nome']; ?>'"><img src='deletar_usuario.png'></a></th>
		   <th><a href="editar_conta.php?edit=<?php echo $linha['usuario']; ?>&email=<?php echo $linha['email']; ?>&senha=<?php echo $linha['senha']; ?>"><img src='edicao_usuario.png'></a></th>
	       <tr>
            			
			<?php  } 
			  
			  echo "<br>";
			  echo "<center>";
			  echo "<hr>";
		      echo "<a href=\"login.php\">RETORNAR AO LOGIN </a>"; 
			  echo "<hr>";
			?>
</table>
</body>
</html>





