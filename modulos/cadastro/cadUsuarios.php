<center><h1>Cadastrar Usuários</h1></center>
<div class="login">
<form method="post" action="#">

				<fieldset>
					<legend>Dados do usuário <a href="index.php?mod=listUsers" class="lista" >Ver Todos</a></legend>
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" value="">
					</div>
					<div class="form-group">
						<label for="email">e-mail:</label>
						<input type="text" name="email" id="email" value="">
					</div>
                    <div class="form-group">
						<label for="cpf">CPF:</label>
						<input type="text" name="cpf" id="cpf" value="">
					</div>
					<div class="form-group">
						<label for="login">Login:</label>
						<input type="text" name="login" id="login" value="">
					</div>
					<div class="form-group">
						<label for="senha">Senha:</label>
						<input type="password" name="senha" id="senha">
					</div>
					<div class="form-group">
						<label for="confirma_senha">Confirmação da senha:</label>
						<input type="password" name="confirma_senha" id="confirma_senha">
					</div>
				</fieldset>
				<div class="form-group">
					<button type="submit">Cadastrar</button> <button type="reset" >Limpar</button>
				</div>
			</form>
</div>