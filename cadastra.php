<?php
		
		$conexao = mysqli_connect("localhost", "id11075346_carloshenrique", "crudpizza", "id11075346_crudpizzaprojeto");
		//				   ^onde esta o banco^ nome do usuario, senha, nome do banco

		
		$sabor = $_GET['sabor'];
		$valor = $_GET['valor'];

		$query = "insert into tb_pizza values (null, '$sabor', $valor)";

		mysqli_query($conexao, $query);

		echo "Registro realizado com sucesso!";