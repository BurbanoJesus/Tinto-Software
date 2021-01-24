<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css'];
require_once VIEWS.'templates/head.php';

$portafolio = "active";
include VIEWS.'templates/header.php';

$array = [];
// 
function insertar_proyecto($id,$nombre,$tipo,$img){
	global $array;
	$proyecto = new stdClass();
	$proyecto->id = $id;
	$proyecto->nombre = $nombre;
	$proyecto->tipo = $tipo;
	$proyecto->img = IMG.$img;
	array_push($array, $proyecto);
}
// 
insertar_proyecto('py1','PROYECTO GESTION DEL RIESGO ARBOLEDA','Plataforma web y aplicación android','portafolio/grapp.png');
insertar_proyecto('py2','PLATAFORMA DEL MUSEO ARQUEOLOGICO BERRUECOS','Plataforma web','portafolio/museo.png');
insertar_proyecto('py3','PAGINA WEB MARKETING','Página web informativa','portafolio/marketing.png');
insertar_proyecto('py4','PAGINA WEB PC SHOP','Página web informativa','portafolio/pcshop.png');
insertar_proyecto('py5','PLATAFORMA WEB DEL PLAN DE INTERVENCIONES COLECTIVAS','Plataforma web','portafolio/pic.png');
insertar_proyecto('py6','SISTEMA WEB DEL INSTITUTO DEPARTAMENTAL DE SALUD','Plataforma web','portafolio/instituto.png');
insertar_proyecto('py7','PAGINA WEB MARKETING DIGITAL','Página web informativa','portafolio/marketing_p.png');
insertar_proyecto('py8','PAGINA WEB TIMBER','Página web informativa','portafolio/timber.png');
insertar_proyecto('py9','PAGINA WEB WAVE','Página web informativa','portafolio/wave.png');
insertar_proyecto('py10','PAGINA WEB MARKETING ONLINE','Página web informativa','portafolio/marketing_starter.png');


?>
<main>
	<div class="main">
		<div class="contenido" id="portafolio">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_titulo"></div>
				<h2 class="head_titulo_h2">Portafolio</h2>
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
			<div class="wrap_portafolio">
				<!--  -->
				<?php foreach ($array as $key => $row){ ?>
				<div class="portafolio">
					<div class="capa_background_portafolio"></div>
					<button class="button button_background_portafolio" onclick="window.location = '<?php echo HOST?>detalles_proyecto?id=<?php echo $row->id ?>'">
						<svg viewBox="0 0 512.000000 446.000000"
						 preserveAspectRatio="xMidYMid meet">
						<g transform="translate(0.000000,446.000000) scale(0.100000,-0.100000)"
						stroke="none">
						<path d="M2380 3974 c-445 -39 -802 -143 -1145 -332 -473 -262 -853 -645
						-1103 -1112 -59 -112 -132 -276 -132 -300 0 -53 146 -338 266 -520 447 -677
						1142 -1104 1974 -1212 123 -16 517 -16 640 0 581 76 1052 284 1496 663 287
						245 550 604 703 958 23 52 41 102 41 111 0 53 -146 338 -266 520 -445 674
						-1148 1107 -1964 1210 -90 11 -433 21 -510 14z m312 -595 c294 -32 581 -187
						765 -414 460 -568 286 -1425 -357 -1759 -569 -296 -1272 -78 -1564 484 -337
						650 -2 1446 694 1649 161 47 292 58 462 40z"/>
						<path d="M2382 2911 c-314 -77 -522 -349 -522 -681 0 -216 94 -424 247 -545
						126 -100 287 -155 453 -155 283 0 521 148 635 395 111 238 80 529 -78 742 -86
						115 -243 214 -394 247 -95 21 -248 19 -341 -3z"/>
						</g>
						</svg>
						Ver detalles
					</button>
					<div class="img_portafolio">
						<img class="fondo" src="<?php echo IMG?>portafolio/pc_escritorio_fondo_s.png" alt="" />
						<img class="img" src="<?php echo $row->img ?>" alt="" />
					</div>
					<div class="props">
						<h3><?php echo $row->nombre ?></h3>
						<span><?php echo $row->tipo ?></span>
					</div>
				</div>
				<?php } ?>
				<!--  -->
			</div>
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php 
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>