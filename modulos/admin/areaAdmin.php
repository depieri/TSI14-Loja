<?php
 if ($_SESSION['usuario_id'] == 1){
?>

<div class="login">
    <h1>Cadastro de Usuarios</h1>
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
</div>
</hr>
<div class="login">
    <h1>Cadastro de Produtos</h1>
    <form method="post" action="modulos/admin/funCadastroProd.php">
        <label for="titulo">Titulo</label>
		<input type="text" name="titulo" id="titulo">
		<br>
		<label for="subtitulo">Descrição</label>
		<input type="text" name="subtitulo" id="subtitulo">
		<br>
		<label for="preco">Preço</label>
		<input type="text" name="preco" id="preco">
		<br>
		<label for="foto">Foto</label>
		<input type="text" name="foto" id="foto" placeholder="insira a URL da IMAGEM"/>
		<br>
		<button type="submit">Cadastrar</button>
    </form>
</div>
<?php
    }else{
     header('Location:http:index.php?mod=login');
     die;
    }
?>
