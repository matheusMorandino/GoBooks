<?php
	//declarar a váriavel $conn e a sua conecção com o DB 
	$conn = @mysql_connect('localhost', 'root', '');
	//'localhost'=endereço
	//'root'=usuario
	//''=senha
	
	//Caso não seja possível se conectar com o DB. O '!' no !$conn significa a não conecção
	if(!$conn){
		//'die' para o processo e exibe a mensagem de erro
		die('não possível se conectar:'.mysql_error());}
	//caso a conecção seja bem sucessida ele se conectaao DB
	mysql_select_db('cadastro',$conn);		
?>