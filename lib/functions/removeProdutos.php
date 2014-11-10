<?php
include("../config.php");
include("../database.php");
include("crudProdutos.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: ".URL_BASE."index.php?mod=listProduto");
die();
