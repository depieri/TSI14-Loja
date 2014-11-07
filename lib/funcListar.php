<?php
function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM produtos");
	while($produto = mysqli_fetch_assoc($resultado)) {
	array_push($produtos, $produto);
}
return $produtos;

}

function listaCategorias($conexao){
	$categorias = array();
	$query = "SELECT * FROM categorias";
	$resultado = mysqli_query($conexao, $query);
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria);
	}
	return $categorias;
}