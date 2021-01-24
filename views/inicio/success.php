<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css'];
require_once VIEWS.'templates/head.php';

$active = (isset($_GET['active'])) ? $_GET['active'] : '';
$url_redirect = (isset($_GET['url_redirect'])) ? $_GET['url_redirect'] : HOST.'inicio';
$str_action = (isset($_GET['str_action'])) ? $_GET['str_action'] : '';
$titulo = (isset($_GET['titulo'])) ? $_GET['titulo'] : '';

$contactanos = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="portafolio">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_titulo"></div>
				<h2 class="head_titulo_h2">Contacto</h2>
				<svg width="100%" viewBox="0 0 1920.000000 77.000000"
				 preserveAspectRatio="xMidYMid meet">
					<g transform="translate(0.000000,77.000000) scale(0.100000,-0.100000)"
					fill="#FFF" stroke="none">
					<path d="M9780 764 c-299 -20 -517 -48 -754 -95 -142 -29 -287 -64 -846 -208
					-580 -149 -910 -194 -1425 -194 -643 -1 -1251 86 -2165 309 -405 99 -567 124
					-916 145 -496 29 -975 -15 -2084 -190 -716 -113 -1154 -161 -1487 -161 l-103
					0 0 -185 0 -185 9600 0 9600 0 0 154 0 155 -42 5 c-382 50 -573 87 -1005 196
					-722 183 -1181 252 -1668 253 -428 0 -679 -41 -1270 -209 -670 -191 -972 -238
					-1520 -237 -585 0 -1120 68 -2030 258 -401 84 -756 138 -1111 170 -161 15
					-658 27 -774 19z"/>
					</g>
				</svg>
			</div>
			<div class="wrap_success">
					<div class="success">
					<i class="icon-lineal-check"></i>
					<span><?php echo $str_action?></span>
					<?php 
						if (strlen($titulo) > 0 ) {
							echo '<p class="success_p">'.$titulo.'</p>';
						}
					?>
					<div class="content_button next">
						<button onclick="javascript:window.location ='<?php echo $url_redirect?>'" type="button" class="button">Aceptar</button>
					</div>
				</div>
			</div>
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php 
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>