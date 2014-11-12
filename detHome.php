<h1>Nossos Produtos</h1>
<ul class="unstyled lis_produtos">
    <?php
        $sql = mysql_query("SELECT * FROM produto ORDER BY produto_id DESC");
        if(mysql_num_rows($sql)==true){
            while($ln = mysql_fetch_assoc($sql)){

    ?>
    <li>
        <a <?php if(isset($_SESSION['usuario_id'])){ ?>href="modulos/loja/funLoja.php?op=add&produto_id=<?=$ln['produto_id']?>" <?php }else{?>href="#login" data-toggle="modal" <?php } ?> title="<?=$ln['titulo']?>">
            <span class="img">
                <img src="<?=URL?>/lib/rdmc.php?src=<?=URL?>/img/loja/<?=$ln['foto']?>&q=100&h=100&w=160" alt="<?=$ln['titulo']?>">
            </span>
            <span class="titulo">
                <?=$ln['titulo']?>
                <span class="paragraph-end"></span>
            </span>
            <span class="subtitulo">
                <?=$ln['subtitulo']?>
                <span class="paragraph-end"></span>
            </span>
            <span class="preco">
                R$ <?=Real($ln['preco'])?>
            </span>
            <span class="comprar">
                <i class="icon-shopping-cart"></i> Comprar
            </span>
        </a>
    </li>
    <?php
            }
        }
    ?>
</ul>
