<?php 
	include("lib/database.php"); 
	include("lib/funcListar.php");
	$categorias = listaCategorias($conexao);
?>
	
<center><h1>Cadastrar Produtos</h1></center>
<div class="login">
   <form method="post">
				<fieldset>
					<legend>Dados do produto <a href="index.php?mod=listProduto" class="lista" >Ver Todos</a>
                    </legend>
                    <form action="<?=URL_BASE?>lib/functions/insertProdutos.php" method="post">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" value="">
					</div>
					<div class="form-group">
						<legend>Departamento:</legend>
						<?php foreach ($categorias as $categoria) : ?>
                        <table border="1px">
                            <td>
                        <input type="radio" name="descricao_id" value"<?=$categoria['id']?>"><?=$categoria['nome']?>
                            </td>
                        </table>
						<?php endforeach ?>
					</div>
					<hr>
					<div class="form-group">
						<label for="detalhes">Descrição:</label>
						<textarea name="detalhes" id="detalhes"
							rows="4" cols="100"></textarea>
					</div>
                    <div class="form-group">
						<label for="imagem">URL da Imagem:</label>
						<input type="text" name="imgURL" id="imgURL" value="">
					</div>
					<div class="form-group">
						<label for="preco">Preço:</label>
						<input type="text" name="preco"
						id="preco" value="">
					</div>
				
				<div class="form-group">
					<button type="submit">Gravar</button>
					<button type="reset">Limpar</button>
				</div>
                </form>
       </fieldset>

</div>
