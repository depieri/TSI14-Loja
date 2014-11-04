<?php

require_once 'lib/constantes_teste.php';
require_once 'lib/database_teste';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}

if (!isset($acao)){
    
    $acao = 'listar';
}

switch($acao){
    
    case 'listar':
        // monta a consulta para recuperar a listagem de usuários ordenada pelo nome

        $consulta = 'select * from usuarios order by nome';
        consultar($consulta);
        $registros = array();

        while($registro = proximo_registro()){

            array_push($registros = $registro);

        }
        $titulo_pagina = 'Lista de Usuários';
        require_once 'gui/lista_usuarios.php'
        break;
    
    case 'incluir':
        $titulo_pagina = 'Novo usuário';
        require_once 'gui/form_usuarios.php';
        break;
    
    case 'alterar':
        if(!isset($_GET['id'])){
            die('Erro: o Código do usuário a alterar não foi informado.');
        }
        $id = $_GET['id'];
        $consulta = "select * from usuarios where id = $id";
        consultar($consulta);
        $registro = proximo_registro();
        $nome = $registro['nome'];
        $email = $registro['email'];
        $login = $registro['login'];
        $titulo_da_pagina = 'Alterar Usuário';
        require_once 'gui/form_usuarios.php'
        break;
    
    case 'gravar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $sql = "select nome from usuarios where nome ='$nome' ";
        $executa_sql = mysql_query($sql);
        $achou = mysql_num_rows($executa_sql);
        if ($achou == 1){
            echo "<script> alert('USUÁRIO EXISTENTE'); history.go(-1)</script>";
            exit;
        }
        
            
}


?>;