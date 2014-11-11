<?php 
	include("lib/database.php"); 
	include("lib/funcListar.php");

?>
<table class="table table-striped table-bordered">
	<tr class="info">
		
	<td>Produto</td>
	<td>Descricao</td>
	<td>Preco</td>
	<td>Deletar</td>

</tr>
<?php


$produtos = listaProdutos($conexao);
foreach ($produtos as $produto) :
?>
<tr>
	<td><?=$produto['nome']?></td>
	<td><?=$produto['detalhes']?></td>
	<td><?=$produto['preco']?></td>
	<form action="<?=URL_BASE?>lib/functions/removeProdutos.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<td><button class="btn btn-danger">Remover</button></td>
	</form>
</tr>
<?php
	endforeach
?>
</table>
