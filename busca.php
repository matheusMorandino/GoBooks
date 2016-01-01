<?php
	include_once 'conecao.php';
	
	if(isset($_GET['delete_cpf'])){
		$sql_query = "delete from cliente where cpf = ".$_GET['delete_cpf'];
		mysql_query($sql_query);
		header("location:$_SERVER[PHP_SELF]");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Busca</title>

<script type = "text/javascript">
	function editar_cpf(cpf){
		if(confirm('Deseja editar?')){
			window.location.href = 'editar.php?editar_cpf='+cpf;
			<!--editar.cpf é o nome da função-->
		}
	}
	function delete_cpf(cpf){
		if(confirm('Deseja deletar a informação?')){
			window.location.href ='busca.php?delete_cpf='+cpf;
		}
	}
</script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
        
        <script type="text/javascript" src="redi-esterEgg.js">
		</script>
		
</head>

<body>
<br />
<br />
<table class="table table-striped" width="1000">
	<tr>
    	<td><b>CPF</b></td>
        <td><b>nome</b></td>
        <td><b>endereço</b></td>
        <td><b>e-mail</b></td>
        <td><b>cidade</b></td>
    </tr>


<?php
//variavel seleciona os dados do DB
$sql_query="SELECT * FROM cliente";
//variavel que recebe da anterior os dados coletados
$result_set = mysql_query($sql_query);
while($row = mysql_fetch_row($result_set)){	

?>

	<tr>
    	<td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <!-- falta código ainda!-->
        <td align="center"><a href="javascript:editar_cpf('<?php echo $row[0];?>')">
        <img src="Icones/lapis.png" height="40" width="40" /></a></td>
        
        <td align="center"><a href="javascript:delete_cpf('<?php echo $row[0];?>')">
        <img src="Icones/delete.png" height="53" width="53" /></a></td>
    </tr>
    <?php
    
	
}//chave do while
	
	
	?>
</table>
<br />
<button type="button" onClick="redi()" class="btn btn-default"><strong>Voltar</strong></button>

</body>
</html>