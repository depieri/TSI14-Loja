<?php
include("../config.php");
include("../database.php");
include("crudProdutos.php");

$nome = $_POST['nome'];
$descricao_id = $_POST['descricao_id'];
$detalhes = $_POST['detalhes'];
$imgURL = $_POST['imgURL'];
$preco = $_POST['preco'];

if (insereProdutos($conexao, $nome, $detalhes, $imgURL, $preco, $categoria_id)){ ?>
 <script>
     alert ("ADICIONADO COM SUCESSO!");
</script>
<?php } else {
    $msg = msqli_error($conexao);
    echo $msg;
}
?>
