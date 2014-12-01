<?php
ob_start();
session_start();
include "lib/config.php";
include "lib/funReal.php";
define("URL", "http://".$_SERVER['HTTP_HOST']."/TSI14-Loja");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LOJA TSI14 - Programacao WEB</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
	<header class="topo">
    	<div class="container">
        	<div class="row">
            	<div class="span3">
                	<a href="index.php" class="logo">TSI 14</a>
                </div>
                <div class="span9">
                	<ul class="unstyled pull-right">
                      	<li class="menu">
                        	<a href="index.php">
                            	<i class="icon-home"></i>
                                <br>
	                    		<span class="tit_menu">Home</span>
                            </a>
                        </li>
                        <li class="menu">
                            <?php
                            if(!isset($_SESSION['usuario_id'])){
                            ?>

                        	<a href="index.php?mod=login">
                            	<i class="icon-signin"></i>
                                <br>
	                    		<span class="tit_menu">Login</span>
                            </a>
                            <?php
                                }else{
                            ?>
                            <a href="modulos/login/funLogin.php?op=sair">
                            	<i class="icon-lock"></i>
                                <br>
	                    		<span class="tit_menu">Sair</span>
                            </a>
                            <?php } ?>
                        </li>
                        <?php if(isset($_SESSION['usuario_id'])) { ?>
                    	<li class="menu">
                        	<a href="index.php?mod=vendas">
                            	<i class="icon-ok-sign"></i>
                                <br>
	                    		<span class="tit_menu">Pedidos</span>
                            </a>
                        </li>
                        <li class="carrinho">
                        	<i class="icon-shopping-cart"></i>
                            <span class="badge badge-success val_top">
                            <?php
                                $cont = mysql_query("SELECT COUNT(carrinho_id) as total_produtos FROM carrinho WHERE usuario_id = '".$_SESSION['usuario_id']."'");
                                if(mysql_num_rows($cont)==true){
                                    while($ln = mysql_fetch_assoc($cont)){
                                        echo $ln['total_produtos'];
                                    }
                                }
                            ?>
                            </span>
	                    	<br>
	                    	<span class="tit_menu">Carrinho</span>
                            <div class="itens_carrinho">
                                <?php
                                   $sql = mysql_query("SELECT * FROM carrinho INNER JOIN produto ON carrinho.produto_id = produto.produto_id WHERE carrinho.usuario_id = '".$_SESSION['usuario_id']."'");

                        if(mysql_num_rows($sql)==true){
                            ?>
	                        	<table width="100%">
	                            	<thead>
	                                	<tr>
		                                	<th colspan="2" align="left">
		                                    	Produto
		                                    </th>
		                                    <th>
		                                    	Quant.
		                                    </th>
		                                    <th>
		                                    	Valor
		                                    </th>
		                                    <th>
		                                    	Total
		                                    </th>
		                                </tr>
	                                </thead>
	                                <tbody>
                                        <?php
                            while($ln = mysql_fetch_assoc($sql)){
                                        ?>
	                                    <tr>
		                                	<td width="90" align="center">
		                                    	<a href="index.php?mod=carrinho">
	                                            	<img src="<?=URL?>/img/loja/<?=$ln['foto']?>" alt="">
	                                            </a>
		                                    </td>
		                                    <td width="200" align="left">
		                                    	<?=$ln['titulo']?>
		                                    </td>
		                                	<td width="30">
		                                    	<?=$ln['quantidade']?>
		                                    </td>
		                                	<td width="85">
		                                    	<?=Real($ln['preco'])?>
		                                    </td>
		                                    <td width="85">
		                                    	<?=Real($ln['total'])?>
		                                    </td>
		                                </tr>
                                      <?php
                                            }
                                      ?>
	                                </tbody>
	                                <tfoot>
	                                	<tr>
	                                        <td colspan="5" align="right">
	                                        SUBTOTAL:
            <?php
                $queryTotal = mysql_query("SELECT SUM(total) as total_compra FROM carrinho WHERE usuario_id = '".$_SESSION['usuario_id']."'");
                            if(mysql_num_rows($queryTotal)==true){
                                while($row = mysql_fetch_assoc($queryTotal)){
                                echo $total_compra = Real($row['total_compra']);
                             }
                        }
              ?>

	                                        </td>
	                                    </tr>
	                                    <tr>
	                                    	<td colspan="5" align="center">
	                                        	<a href="index.php?mod=carrinho" class="finalizar"><i class="icon-share-alt"></i> Finalizar <span>(Ir para o Carrinho)</span></a>
	                                        </td>
	                                    </tr>
	                                </tfoot>
	                            </table>
                                <?php
                                        }else{
                                    ?>
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert">=( Ainda ñ ha produtos no carrinho!</div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
	                        </div>
                        </li>
                        <?php
                            }
                        ?>
                        <?php
                            if ($_SESSION['usuario_id']== 1){
                         ?>
                        	<li class="menu">
                        	<a href="index.php?mod=admin">
                            	<i class="icon-cogs"></i>
                                <br>
	                    		<span class="tit_menu">Administração</span>
                            </a>
                        </li>
                       <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="conteudo">
    	<div class="container">
        	<div class="row">
            	<div class="span12">
                	<?
                    	include "lisPaginas.php";
					?>

					<div class="modal hide fade" id="login">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					    <h3>Faça o Login</h3>
					  </div>
					  <form method="post" action="<?=URL?>/modulos/login/funLogin.php?op=login" style="margin:0;">
					  	<div class="modal-body">
					  		<div class="alert">
					  			Para adicionar produtos ao carrinho é necessário efetuar o login.
					  		</div>
					    	<label for="email">Email</label>
					    	<input type="email" name="email" value="admin@admin.com">
					    	<label for="senha">Senha</label>
					    	<input type="password" name="senha" value="admin">
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
