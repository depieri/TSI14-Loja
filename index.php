<?php
require_once("lib/config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="topo">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <a href="index.php" class="logo">Minha Loja</a>
                </div>
                <div class="span9">
                    <ul class="unstyled pull-right">
                        <li class="menu">
                            <a href="index.php">
                                <i class="fa fa-home"></i>
                                <br>
                                <span class="tit_menu">Home</span>
                            </a>
                        </li>
                        <li class="menu">
                            <a href="index.php?mod=login">
                               <i class="fa fa-sign-in"></i>
                                <br>
                                <span class="tit_menu">Login</span>
                            </a>
                        </li>
                        <li class="menu">
                            <a href="index.php?mod=produtos">
                                <i class="fa fa-archive"></i>
                                <br>
                                <span class="tit_menu">Cadastros Produtos</span>
                            </a>
                        </li>
                        <li class="menu">
                            <a href="index.php?mod=users">
                                <i class="fa fa-users"></i>
                                <br>
                                <span class="tit_menu">Usuários</span>
                            </a>
                        </li>
                        <li class="menu">
                            <a href="index.php?mod=depart">
                                <i class="fa fa-cubes"></i>
                                <br>
                                <span class="tit_menu">Departamentos</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="conteudo">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <? include "lisPaginas.php"; ?>

                    <div class="modal hide fade" id="login">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3>Faça o Login</h3>
                        </div>
                        <form method="post" action="#" style="margin:0;">
                            <div class="modal-body">
                                <div class="alert">
                                    Para adicionar produtos ao carrinho é necessário efetuar o login.
                                </div>
                                <label for="email">Email</label>
                                <input type="email" name="email" value="fabiogoodoy@gmail.com">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" value="123456">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Logar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>