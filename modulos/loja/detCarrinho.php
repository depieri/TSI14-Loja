<h1>Carrinho de Compras</h1>
<table width="100%" class="table lis_carrinho">
	<thead>
    	<tr>
        	<th colspan="2">
	        <div class="text-left">
            	Produto
	        </div>
            </th>
	    	<th width="100">
		        <div class="text-center">
	            	Quantidade
		        </div>
            </th>
	    	<th width="100">
		        <div class="text-center">
	            	Valor
	            </div>
	        </th>
            <th width="100">
                <div class="text-center">
                    Total
                </div>
            </th>
            <th width="80">
		        <div class="text-center">
	            	Remover
	            </div>
	        </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = mysql_query("SELECT * FROM carrinho INNER JOIN produto ON carrinho.produto_id = produto.produto_id WHERE carrinho.usuario_id = '".$_SESSION['usuario_id']."'");
    if(mysql_num_rows($sql)==true){
        while($ln = mysql_fetch_assoc($sql)){


        ?>
    	<tr>
        	<td width="160">
            	<div class="text-center">
                	<a href="index.php" title="">
	                    <img src="<?=URL?>/lib/rdmc.php?src=<?=URL?>/img/loja/<?=$ln['foto']?>&q=100&h=120&w=120" alt="">
	                </a>
                </div>
            </td>
        	<td>
            	<div class="text-left">
                	<?=$ln['titulo']?>
                </div>
            </td>
        	<td align="center" class="amount">
                <div class="text-center">
                    <form action="modulos/loja/funLoja.php?op=quantidade" method="post">
                        <input type="hidden" name="preco" value="">
                        <div class="input-append">
                          <input type="number" name="quantidade" min="1" max="10" value="<?=$ln['quantidade']?>">
                          <button type="submit" class="btn"><i class="icon-refresh"></i></button>
                        </div>
                    </form>
                </div>
            </td>
        	<td align="center">
            	<div class="text-center">
            		R$ <?=Real($ln['preco'])?>
            </td>
            <td align="center">
                <div class="text-center">
                    R$ <?=Real($ln['total'])?>
                </div>
            </td>
            <td align="center">
            	<div class="text-center">
                	<a href="modulos/loja/funLoja.php?op=remover"><i class="icon-remove"></i></a>
                </div>
            </td>
        </tr>
        <?php
        }else{
        ?>
        <tr>
            <td colspan="6"><div class="alert">Bora comprar na loja do TSI14!</div></td>
        </tr>
        <?php
            }
    }
        ?>
    </tbody>
    <tfoot>
    	<tr>
        	<td colspan="6" class="total">
            	<div class="text-right total">
                	SUBTOTAL: R$ <?=$total_compra?>
                </div>
            </td>
        </tr>
        <tr>
        	<td colspan="3">
            	<a href="index.php" class="finalizar"><i class="icon-chevron-left"></i> Continuar Comprando</a>
            </td>
            <td colspan="3">
                <a href="#carrinho" class="concluir pull-right accordion-toggle" data-toggle="collapse" data-parent="#accordion"><i class="icon-ok"></i> Concluir Pedido</a>
            </td>
        </tr>
    </tfoot>
</table>
