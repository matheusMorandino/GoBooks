<?php
	//comando para chamar a conexão
	include_once 'conecao.php';
	
	if(isset($_POST['salvar'])){
	//'post': método de envio de dados oculto
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	
	//confirmação 
	/*echo"<br>cpf:".$cpf;
	echo"<br>nome:".$nome;
	echo"<br>email:".$email;
	echo"<br>endereco:".$endereco;
	echo"<br>cidade:".$cidade;*/
	
	//no primeiro parentese é inserido os valores ao DB
	$sql_query ="insert into cliente(cpf, nome, email, endereco, cidade) values('$cpf', '$nome', '$email', '$endereco', '$cidade')";
	
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
    		<label for="exampleInputPassword1">CPF</label>
    		<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required/>
  		</div>
        <div class="form-group">
    		<label for="exampleInputEmail1">Nome</label>
    		<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required/>
  		</div>
            <div class="form-group">
    		<label for="exampleInputEmail1">E-mail</label>
    		<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required/>
  		</div>
        <div class="form-group">
    		<label for="exampleInputEmail1">Endereço</label>
    		<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Enedereço" required/>
  		</div>
        <div class="form-group">
    		<label for="exampleInputEmail1">Cidade</label>
    		<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required/>
  		</div>
  	
      
  		<button type="submit" name="salvar" onClick="redi()" class="btn btn-primary"><strong>Salvar</strong></button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="home.html"><button type="button" name="voltar" class="btn btn-default"><strong>Voltar</strong></button></a>
       
	</form>

    </body>
</html>