<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css'];
require_once VIEWS.'templates/head.php';

$servicios = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="servicios">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_titulo"></div>
				<h2 class="head_titulo_h2">Servicios</h2>
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
			<div class="wrap_servicios_alt">
				<div class="servicio">
					<div class="img_servicio_alt"><img src="<?php echo IMG?>svg/12.svg" alt=""></div>
					<div class="info_servicio_alt">
						<h2>Desarrollo de plataformas web y diseño personalizado</h2>
						<span>Diseño y desarrollo de plataformas web personalizadas, que se ajusten a los requerimientos y objetivos de su negocio como herramienta para sus procesos.</span>
						<a href="<?php echo HOST?>contactanos" class="button verde">Contáctanos</a>
					</div>
				</div>
				<div class="servicio">
					<div class="img_servicio_alt"><img src="<?php echo IMG?>svg/4.svg" alt=""></div>
					<div class="info_servicio_alt">
						<h2>Desarrollo de software a la medida</h2>
						<span>Para cada organización existe un software a la medida que responda a sus necesidades y expectativas particulares, Creamos soluciones seguras, intuitivas y de alto rendimiento.</span>
						<a href="<?php echo HOST?>contactanos" class="button verde">Contáctanos</a>
					</div>
				</div>
				<div class="servicio">
					<div class="img_servicio_alt"><img src="<?php echo IMG?>svg/8.svg" alt=""></div>
					<div class="info_servicio_alt">
						<h2>Aplicaciones para dispositivos móviles</h2>
						<span>La gran tendencia actual del mercado en el uso de dispositivos móviles por su gran ventaja de portabilidad y sobre todo por la infinidad de herramientas con que cuentan nos lleva a explorar las mejores soluciones en este campo para ponerlas a disposición de nuestros clientes.</span>
						<a href="<?php echo HOST?>contactanos" class="button verde">Contáctanos</a>
					</div>
				</div>
				<div class="servicio">
					<div class="img_servicio_alt"><img src="<?php echo IMG?>svg/10.svg" alt=""></div>
					<div class="info_servicio_alt">
						<h2>El computador optimo para ti</h2>
						<span>Actualmente existe gran variedad de productos con distintas capacidades y funcionalidades por lo que es importante contar con asesoría que te permita elegir el mejor producto que cumpla tus necesidades personales o de tu empresa.</span>
						<a href="https://www.tintosoft.com.co/pcshop" target="_blank" class="button verde">Contáctanos</a>
					</div>
				</div>
				<div class="servicio">
					<div class="img_servicio_alt"><img src="<?php echo IMG?>svg/14.svg" alt=""></div>
					<div class="info_servicio_alt">
						<h2>Soporte y mantenimiento de software</h2>
						<span>Las aplicaciones de software son cambiantes a las necesidades y nuevos requerimientos del entorno. Disponemos para nuestros clientes el mantenimiento de software ajustándose a los requerimientos de su empresa.</span>
						<a href="<?php echo HOST?>contactanos" class="button verde">Contáctanos</a>
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