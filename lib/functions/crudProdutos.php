<?php

function insereProdutos($conexao, $nome, $detalhes, $imgURL, $preco, $categoria_id){
    $query = "INSERT INTO produtos (nome, detalhes, imgURL, preco, categoria_id) VALUES ('{$nome}', '{$detalhes}', '{$imgURL}', {$preco}, {$categoria_id})";
    return mysqli_query($conexao, $query);
}



function removeProduto($conexao, $id){
    $query = "DELETE FROM produtos WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}
