<?
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
			
			case 'carrinho':
			include "modulos/loja/detCarrinho.php";
			break;

			case 'login':
			include "modulos/login/cadLogin.php";
			break;


		}
	}
?>
