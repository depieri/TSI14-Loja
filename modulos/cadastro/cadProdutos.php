<center><h1>Cadastrar Produtos</h1></center>
<div class="login">
   <form method="post" action="#">
				<fieldset>
					<legend>Dados do produto <a href="index.php?mod=listProduto" class="lista" >Ver Todos</a>
                    </legend>
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" value="<?=isset($nome) ? $nome : ''; ?>">
					</div>
					<div class="form-group">
						<label for="id_departamento">Departamento:</label>
						<select name="id_departamento">
						
						</select>
					</div>
					<div class="form-group">
						<label for="detalhes">Descrição:</label>
						<textarea name="detalhes" id="detalhes"
							rows="4" cols="100"></textarea>
					</div>
                    <div class="form-group">
						<label for="imagem">Imagem:</label>
						<input type="file" name="imagem"
						id="imagem" value="ola">
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
       </fieldset>
			</form>
</div>