<?php
	//comando para chamar a conexão
	include_once 'conecao.php';
	
	if(isset($_POST['salvar'])){
	//'post': método de envio de dados oculto
	$nome_produto = $_POST['nome_produto'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	
	//confirmação 
	/*echo"<br>cpf:".$cpf;
	echo"<br>nome:".$nome;
	echo"<br>email:".$email;
	echo"<br>endereco:".$endereco;
	echo"<br>cidade:".$cidade;*/
	
	//no primeiro parentese é inserido os valores ao DB
	$sql_query ="insert into produto(nome_produto, preco, descricao) values('$nome_produto', '$preco', '$descricao')";
	
	if(mysql_query($sql_query))
	{
		?>
        <script type="text/javascript">
		alert('Dados cadastrados com sucesso');
		window.location.href='adicionar.php';
		window.location="home.html";
		</script>
        <?php
	}else{
		?>
		<script type="text/javascript">
		alert('Erro ao cadastrar dados');
		window.location="home.html";
		</script>
        <?php
	}
	}
?>


<html>
	<head>
   		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		
    </head>
	
	<script type="text/javascript" src="redi-esterEgg.js">
	</script>
	
    <body>
    	
    <br>
    <br> 
        
    <form method="post">
    <!--'post' é método de envio de dados de forma oculta-->
 		<div class="form-group">
    		<label for="exampleInputPassword1">Livro</label>
    		<input type="text" class="form-control" id="nome_produto" placeholder="Livro" name="nome_produto" required/>
  		</div>
        <div class="form-group">
    		<label for="exampleInputEmail1">Preço</label>
    		<input type="text" class="form-control" id="preco" placeholder="Preço" name="preco" required/>
  		</div>
            <div class="form-group">
    		<label for="exampleInputEmail1">Descrição</label>
    		<input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao" required/>
  		</div>
  	
  		<button type="submit" name="salvar" onClick="redi()" class="btn btn-primary"><strong>Salvar</strong></button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="home.html"><button type="button" name="voltar" class="btn btn-default"><strong>Voltar</strong></button></a>
       
	</form>

    </body>
</html>