<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $titulo_pagina?></title>
        <meta charset="uft-8">
        <style type="text/css">
        @import "<?php echo URL_BASE;?>css/estilos.css"
        </style>
    </head>
    <body>
        <div class="container">
            <h1><?php echo $titulo_pagina;?></h1>
            <form method="post" action="<?php echo URL_BASE;?>usuarios.php?acao=gravar"><?php
                if (isset($id)){
                echo '<input type="hidden" name="id" value="'.$id. '">'
                
                }?>
                
                
                
            </form>
            
        </div>
         
            
            
            
        ?>
    </body>
    
    
    
</html>