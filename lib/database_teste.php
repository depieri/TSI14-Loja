<?php
require_once('constantes.php');

$conn = mysql_connect(HOST, USER, PASSWORD);

if(!$conn){
    die('Erro: Não foi possível conectar ao servidor MySQL.');
    
}

if (!mysql_select_db(DB)){
    
    die('Erro: Não foi possível selecionar a base de dados');
}

function consultar($sql){
  
    global $conn, $result;
    $result= mysql_query($conn, $sql);
    
    if(!$result){
        die('Erro: Problema ao executar a consulta: <br><p><code>'. $sql . '</code'. mysql_error());
    }
}

function proximo_registro(){
    
    global $result;
    
    return mysql_fetch_assoc($result);
    
}

function linhas_afetadas(){
    global $conn;
    
    return mysql_affected_row($conn);
}