<?php
ob_start();
session_start();
include "../../lib/config.php";

echo '<meta charset="UTF-8" />';
if(isset($_GET['op']) and $_GET['op']=='login'){
$sql = mysql_query("SELECT * FROM usuario WHERE email = '".addslashes($_POST['email'])."' AND senha = '".addslashes(md5($_POST['senha']))."'");

if(mysql_num_rows($sql)==true){
    while($ln = mysql_fetch_assoc($sql)){
        $_SESSION['usuario_id'] = $ln['usuario_id'];
        header("Location: ../../");
    }
}else{
    echo "Usuario nao existente";
}
}

if(isset($_GET['op']) and $_GET['op']=='sair'){
    unset($_SESSION['usuario_id']);
    header("Location: ../../");
    die;
}
