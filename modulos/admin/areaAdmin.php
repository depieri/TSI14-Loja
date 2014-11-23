<?php
 if ($_SESSION['usuario_id'] == 1){
?>

	<form method="post" action="modulos/admin/funCadastroUser.php">
		<label for="nome">Nome</label>
		<input type="text" name="nome" id="nome">
		<br>
		<label for="email">E-mail</label>
		<input type="email" name="email" id="email">
		<br>
		<label for="senha">Senha</label>
		<input type="password" name="senha" id="senha">
		<br>
		<label for="permissao">Permissão</label>
		<select name="permissao" id="permissao">
			<option value="0">Usuário</option>
			<option value="1">Administrador</option>
		</select>
		<br>
		<button type="submit">Cadastrar</button>
	</form>

<?php
    }else{
     header('Location:http:index.php?mod=login');
     die;
    }
?>
