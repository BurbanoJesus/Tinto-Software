<?php 
include $_SERVER['DOCUMENT_ROOT']."/plataforma/application/settings.php";
include MODELS.'lugar.php';
session_start();

$estilos = ['estilos_inicio.css','comp_modal.css','comp_slider.css'];
include VIEWS.'templates/head.php';

$obj_lugar = new lugar();
$array = $obj_lugar->listar_detalles();

// var_dump($array);
// $id_old = '';
// $array_lugares = [];
// $cont = -1;
// if ($array != False){
// 	foreach ($array as $key => $row) {
// 		$id_new = $row->id_lugar;
// 		if ($id_new != $id_old) {
// 			$cont++;
// 			$array_lugares[$cont] = [];
// 			array_push($array_lugares[$cont], $row);
// 		}else{ 
// 			array_push($array_lugares[$cont], $row);
// 		}
// 		$id_old= $row->id_lugar;
// 	}
// }

$ubicaciones = "active";
include VIEWS.'templates/header.php';

?>

<main>
	<div class="main" id="ubicaciones">
		<div class="contenido" id="visita">
			<?php
			$object = $array;
			require_once LIBS.'error404.php';
			if ($flag_error404 !== True) {
			// foreach ($array_lugares as $key => $array) {
			// 	echo '<div id="multimedia_'.$key.'" style="display: none;" latitud="'.$array[0]->latitud.'" longitud="'.$array[0]->longitud.'" titulo="'.$array[0]->titulo.'" class="multimedia_data img">';
			// 	foreach ($array as $key => $row) {
			// 		$type = type_multimedia($row->url);
			// 		if ($type == 'imagen') { 
			// 			echo '<img index="'.$key.'" src="'.$row->url.'" target="theater" class="call_theater multimedia" />';
			// 		 } else { 
			// 			echo '<video index="'.$key.'" target="theater" class="call_theater multimedia" controls>
			// 				<source src="'.$row->url.'" type="video/mp4">Your browser does not support HTML5 video
			// 			</video>';
			// 		}
			// 	}
			// 	echo '</div>'.PHP_EOL;
			// }
			?>
			<div class="informacion">
				<h2 class="h2_informacion">Ubicaciones PIC</h2>
				<p class="p_info">Haz click en los nombres de los marcadores que aparecen en el mapa</p>
				<div class="maps">
					<div id="map" style="height: 800px;"></div>
				</div>
			</div>
			<div id="theater" class="theater" data="">
				<div index="" class="indicador"></div>
				<div class="close"><i class="icon-cancelar"></i></div>
				<div index="" class="btn_left"><i class="icon-arrow-c"></i></div>
				<div index="" class="btn_right"><i class="icon-arrow-c"></i></div>
				<div class="theater_main">
					<div class="theater_content">
						
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</main>
<?php 
$scripts = ['https://maps.googleapis.com/maps/api/js?key=AIzaSyChPpLC5zuF6bKJYUb7Br2-geN5UvbxBC4','mapas.js','comp_modal.js','comp_slider.js'];
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>