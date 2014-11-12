<?php
    include "../../lib/config.php";

    mysql_query("INSERT INTO usuario (nome, email, senha, permissao) VALUES ('".$_POST['nome']."', '".$_POST['email']."','".md5($_POST['senha'])."', '".$_POST['permissao']."')");

    echo "USUARIO CADASTRADO COM SUCESSO";
