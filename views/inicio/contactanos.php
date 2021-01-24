<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css'];
require_once VIEWS.'templates/head.php';

$contactanos = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="contactanos">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_titulo"></div>
				<h2 class="head_titulo_h2">Contáctanos</h2>
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
			<div class="wrap_contacto">
				<div class="content_contacto animacion anim_arriba_s">
					<form class="form_contacto" action="<?php echo CONTROLLERS?>inicio/c_contacto.php" method="POST">
						<div class="input s50">
							<input type="text" name="nombre"  placeholder="Nombre" />
						</div>
						<div class="input s50">
							<input type="text" name="telefono"  placeholder="Telefono" />
						</div>
						<div class="input">
							<input type="text" name="correo"  placeholder="Correo" />
						</div>
						<div class="input">
							<textarea name="mensaje" cols="30" rows="5" placeholder="Mensaje"></textarea>
						</div>
						<div class="content_button">
							<button class="button" type="submit">
							Enviar
							<svg viewBox="0 0 299.000000 257.000000"
							 preserveAspectRatio="xMidYMid meet">
							<g transform="translate(0.000000,257.000000) scale(0.100000,-0.100000)"
							stroke="none">
							<path d="M0 2065 l0 -494 33 -6 c17 -3 491 -66 1052 -140 561 -75 1025 -137
							1030 -140 6 -2 4 -4 -3 -4 -21 -2 -2045 -271 -2079 -277 l-33 -6 0 -494 c0
							-272 3 -494 8 -494 17 0 2963 1268 2963 1275 0 7 -2946 1275 -2963 1275 -5 0
							-8 -223 -8 -495z"/>
							</g>
							</svg>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php
$scripts = ['comp_slider.js','comp_modal.js','funciones_animacion.js'];
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>