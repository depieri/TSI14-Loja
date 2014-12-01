<?php
include "../../lib/config.php";

 mysql_query("INSERT INTO produto (titulo, subtitulo, preco, foto) VALUES ('".$_POST['titulo']."', '".$_POST['subtitulo']."','"$_POST['preco']."','".$_POST['foto']."')");

echo "USUARIO CADASTRADO COM SUCESSO";
