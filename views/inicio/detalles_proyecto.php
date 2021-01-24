<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css'];
require_once VIEWS.'templates/head.php';

$id = isset($_GET['id']) ? $_GET['id']: '';

$proyecto = new stdClass();

$array = [];
// 
function insertar_proyecto($id,$nombre,$desc,$tipo,$link,$nombre_link,$img){
	global $array;
	$proyecto = new stdClass();
	$proyecto->id = $id;
	$proyecto->nombre = $nombre;
	$proyecto->desc = $desc;
	$proyecto->tipo = $tipo;
	$proyecto->link = $link;
	$proyecto->nombre_link = $nombre_link;
	$proyecto->img = IMG.$img;
	array_push($array, $proyecto);
}
function get_proyecto($id){
	global $array;
	$row = Null;
	foreach ($array as $key => $row_py) {
		if ($row_py->id == $id) {
			$row = $row_py;
		}
	}
	return $row;
}
// 
insertar_proyecto('py1','PROYECTO GESTION DEL RIESGO ARBOLEDA','Plataforma web desarrollada para el municipio de Arboleda, tiene funcionalidades de administración de usuarios, manejo de varios roles de usuarios, creación y administración de riesgos y familias, Manejo y creación de actas, desarrollo de una aplicación para android.','Plataforma Web y aplicación android','https://www.instituto.com/','grapparboleda.com','portafolio/grapp.png');
insertar_proyecto('py2','PLATAFORMA DEL MUSEO ARQUEOLOGICO BERRUECOS','Plataforma web desarrollada para el museo arqueológico de berruecos, tiene funcionalidades de creación y administración de usuarios, manejo de varios roles de usuarios, creación y administración de piezas arqueológicas, creación y administración de artículos culturales, administración de juegos.','Plataforma Web','https://www.instituto.com/','museoarqueologico.com','portafolio/museo.png');
insertar_proyecto('py3','PAGINA WEB MARKETING','Página web informativa acerca del marketing digital y sus características.','Página web informativa','https://www.google.com/','marketing.com','portafolio/marketing.png');
insertar_proyecto('py4','PAGINA WEB PC SHOP','Página web informativa de computadores para la venta y sus características.','Página web informativa','https://www.google.com/','pcshop.com','portafolio/pcshop.png');
insertar_proyecto('py5','PLATAFORMA WEB DEL PLAN DE INTERVENCIONES COLECTIVAS','Plataforma web desarrollada para el plan de intervenciones colectiva, tiene funcionalidades de creación y administración de usuarios, manejo de varios roles de usuarios, creación y administración de cursos, Manejo y carga archivos en los servidores.','Plataforma Web','https://www.instituto.com/','plandeintervenciones.com','portafolio/pic.png');
insertar_proyecto('py6','SISTEMA WEB DEL INSTITUTO DEPARTAMENTAL DE SALUD','Aplicación web desarrollada para el instituto departamental de salud (Nariño, Colombia), tiene funcionalidades administración de usuarios, creación y administración de registros de familias, visualización de gráficas de las familiar.','Plataforma web','https://www.institutodepartamental.com/','institutodepartamental.com','portafolio/instituto.png');
insertar_proyecto('py7','PAGINA WEB MARKETING DIGITAL','Página web informativa acerca de el marketing digital y sus características.','Página web informativa','https://www.google.com/','marketing_production.com','portafolio/marketing_p.png');
insertar_proyecto('py8','PAGINA WEB TIMBER','Página web informativa sobre madera y sus características.','Página web informativa','https://www.google.com/','timber.com','portafolio/timber.png');
insertar_proyecto('py9','PAGINA WEB WAVE','Página web informativa sobre surfing y sus características.','Página web informativa','https://www.google.com/','wave.com','portafolio/wave.png');
insertar_proyecto('py10','PAGINA WEB MARKETING ONLINE','Página web informativa acerca de el marketing digital y sus características.','Página web informativa','https://www.google.com/','marketing_starter.com','portafolio/marketing_starter.png');

$row = get_proyecto($id);

$portafolio = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="detalles_proyecto">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_titulo"></div>
				<h2 class="head_titulo_h2">Detalles del proyecto</h2>
				<!-- <h2 class="head_titulo_h2"><?php echo $proyecto->tipo ?></h2> -->
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
			<?php if ($row !== False && $row !== Null){ ?>
			<div class="wrap_detalles_proyecto">
				<div class="proyecto">
					<div class="img_proyecto">
						<img class="fondo" src="<?php echo IMG?>portafolio/pc_detalles.png" alt="" />
						<img class="img" src="<?php echo $row->img ?>" alt="" />
					</div>
					<div class="linea_proyecto_a"></div>
					<div class="props">
						<h3><?php echo $row->nombre ?></h3>
						<span class="desc"><?php echo $row->desc ?></span>
						<!-- <p>Link:<span onclick="window.open('<?php echo $proyecto->link ?>','_blank')" class="link"><?php echo $proyecto->nombre_link ?></span></p> -->
						<p>Link:<span class="link"><?php echo $row->nombre_link ?></span></p>
					</div>
					<div class="linea_proyecto_a"></div>
				</div>
			</div>
			<?php }else{ ?>
			<div class="not_productos">
				No se encuentra el proyecto.
			</div>
			<?php } ?>
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php 
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>