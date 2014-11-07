<?php
	if(!isset($_GET['mod'])){		
		include "detHome.php";
	}else{
		switch($_GET['mod']){
			default:
			include "detHome.php";
			break;

			case 'home':
			include "detHome.php";
			break;
			
			case 'login':
			include "modulos/login/cadLogin.php";
			break;
            
                  case 'produtos':
                  include "modulos/cadastro/cadProdutos.php";
                  break;
                  
                  case 'users':
                  include "modulos/cadastro/cadUsuarios.php";
                  break;
                  
                  case 'depart':
                  include "modulos/cadastro/cadDepart.php";
                  break;
                  
                  case 'listProduto':
                  include "modulos/listagem/listProduto.php";
                  break;
                  
                  case 'listUsers':
                  include "modulos/listagem/listUsers.php";
                  break;
                  
                  case 'listDepart':
                  include "modulos/listagem/listDepart.php";
                  break;
      		}	
      	}
