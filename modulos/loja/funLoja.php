<?php
ob_start();
session_start();

include "../../lib/config.php";

if(isset($_GET['op']) and $_GET['op']=='add' and isset($_GET['produto_id'])){
 $cp = mysql_query("SELECT * FROM carrinho WHERE usuario_id = '".$_SESSION."' and produto_id = '".$_GET['produto_id']."'");
    if(mysql_num_rows($cp)==false){
        $sql = mysql_query("SELECT preco FROM produto WHERE produto_id = '".$_GET['produto_id']."'");
    if(mysql_num_rows($sql)==true){
        while($ln = mysql_fetch_assoc($sql)){
            $preco = $ln['preco'];
        }
    }
    mysql_query("INSERT INTO carrinho (usuario_id, produto_id, quantidade, total) VALUES ('".$_SESSION['usuario_id']."', '".$_GET['produto_id']."',1, '".$preco."')");
    }
    header("Location: ../../index.php?mod=carrinho");
    }
