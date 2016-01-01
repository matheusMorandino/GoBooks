<?php
	include_once 'conecao.php';
	
	if(isset($_GET['delete_idProduto'])){
		$sql_query = "delete from produto where idProduto = ".$_GET['delete_idProduto'];
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
	function editar_idProduto(idProduto){
		if(confirm('Deseja editar?')){
			window.location.href = 'editar.php?editar_idProduto='+idProduto;
		}
	}
	function delete_idProduto(idProduto){
		if(confirm('Deseja deletar a informação?')){
			window.location.href ='busca_livro.php?delete_idProduto='+idProduto;
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
    	<td><b>Nº do Livro</b></td>
        <td><b>Nome</b></td>
        <td><b>Preço</b></td>
        <td><b>Descrição</b></td>
    </tr>


<?php
//variavel seleciona os dados do DB
$sql_query="SELECT * FROM produto";
//variavel que recebe os dados coletados
$result_set = mysql_query($sql_query);
while($row = mysql_fetch_row($result_set)){	

?>

	<tr>
    	<td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <!-- falta código ainda!-->
        <td align="center"><a href="javascript:editar_idProduto('<?php echo $row[0];?>')">
        <img src="Icones/lapis.png" height="40" width="40" /></a></td>
        
        <td align="center"><a href="javascript:delete_idProduto('<?php echo $row[0];?>')">
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