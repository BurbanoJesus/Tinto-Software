<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css','estilos_form.css','comp_slider.css','comp_modal.css'];
require_once VIEWS.'templates/head.php';

$inicio = "active";
include VIEWS.'templates/header.php';
?>
<main>
	<div class="main" id="inicio">
		<div class="contenido">
			<div class="wrap_main_multimedia">
				<!-- <img src="<?php echo IMG?>default/home.jpg" class="fondo_main_multimedia" /> -->
				<video muted autoplay loop playsinline type="video/*" src="<?php echo IMG?>default/home.mp4" class="fondo_main_multimedia"></video>
				<div class="capa_background_main"></div>
				<div class="wrap_mult">
					<div class="mult_frente responsive_movil_on">
						<img src="<?php echo IMG?>default/devices_1.png" alt="">
					</div>
					<div class="titulo">
						<h2>Desarrollo web Profesional</h2>
						<span>Diseñamos y desarrollamos tus aplicaciones web con la mejor experiencia para el usuario, adaptando las funcionalidades de tu sitio web al mercado actual.</span>
						<div class="wrap_button">
							<button id="btn_start" type="button" class="button btn_l rendonded naranja">
								Empecemos
								<svg class="a" viewBox="0 0 233.000000 414.000000"
								 preserveAspectRatio="xMidYMid meet">
								<g transform="translate(0.000000,414.000000) scale(0.100000,-0.100000)"
								stroke="none">
								<path d="M145 4116 c-60 -28 -97 -66 -124 -126 -27 -59 -28 -160 -2 -215 13
								-27 280 -301 845 -865 454 -454 826 -829 826 -835 0 -5 -371 -381 -825 -835
								-637 -638 -829 -835 -844 -870 -43 -95 -18 -234 55 -302 68 -64 197 -88 282
								-53 26 11 316 294 981 958 758 757 948 952 967 992 30 64 33 161 5 220 -13 28
								-312 333 -957 977 -728 727 -949 942 -984 957 -65 29 -160 28 -225 -3z"/>
								</g>
								</svg>
								<svg viewBox="0 0 233.000000 414.000000"
								 preserveAspectRatio="xMidYMid meet">
								<g transform="translate(0.000000,414.000000) scale(0.100000,-0.100000)"
								stroke="none">
								<path d="M145 4116 c-60 -28 -97 -66 -124 -126 -27 -59 -28 -160 -2 -215 13
								-27 280 -301 845 -865 454 -454 826 -829 826 -835 0 -5 -371 -381 -825 -835
								-637 -638 -829 -835 -844 -870 -43 -95 -18 -234 55 -302 68 -64 197 -88 282
								-53 26 11 316 294 981 958 758 757 948 952 967 992 30 64 33 161 5 220 -13 28
								-312 333 -957 977 -728 727 -949 942 -984 957 -65 29 -160 28 -225 -3z"/>
								</g>
								</svg>
							</button>
						</div>
					</div>
					<div class="mult_frente responsive_movil_off">
						<img src="<?php echo IMG?>default/devices_1.png" alt="" />
					</div>
				</div>
				<svg class="svg_main" width="100%" viewBox="0 0 1920.000000 77.000000"
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
			<div class="wrap_servicios_main">
				<h2 id="scroll_servicio" class="titulo_main animacion anim_arriba_s">Planes que ofrecemos</h2>
				<div class="wrap_servicios">
					<div class="servicio animacion anim_arriba_s">
						<span class="titulo_span">Plan Básico</span>
						<h2 class="titulo_servicio">Diseño web informativo personal o empresarial</h2>
						<div class="content_servicio">
							<img class="img_servicio" src="<?php echo IMG?>svg/2.svg" alt="">
							<span class="desde">Desde</span>
							<div class="precio_ant">
								<span class="moneda">CO</span>
								<s class="valor">$ 599.000</s>
								<div class="button_servicio">Ahorra 50%</div>
							</div>
							<div class="precio">
								<span class="moneda">CO</span>
								<span class="valor">$ 299.000</span>
							</div>
							<div class="props">
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Dominio por un año
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Hosting por un año
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Certificado SSL
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Diseño web personalizado
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Soporte y asesoría
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Enlaces a redes sociales
								</span>
							</div>
							<div class="content_button">
								<button onclick="window.location = '<?php echo HOST?>detalles_planes'" class="button btn_outline_dark">
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
								<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaría un sitio web con las siguientes caracteristicas:','_blank')" class="button btn_servicio verde_claro">
									<svg viewBox="0 0 224.000000 128.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M668 1269 c-104 -15 -182 -40 -283 -89 -173 -84 -292 -205 -352 -356
									-23 -59 -27 -84 -27 -174 0 -125 19 -189 89 -291 25 -36 45 -71 45 -76 0 -6
									-11 -35 -24 -64 -13 -30 -37 -87 -54 -126 l-31 -73 32 14 c18 7 83 35 146 61
									98 41 118 47 140 37 14 -5 54 -22 89 -37 250 -105 582 -96 817 23 182 91 321
									248 365 411 14 53 14 172 0 234 -31 142 -167 308 -320 394 -179 100 -421 143
									-632 112z m-135 -533 c33 -31 43 -68 27 -107 -17 -40 -47 -59 -93 -59 -52 0
									-97 43 -97 93 0 82 103 128 163 73z m351 -3 c34 -33 42 -65 26 -104 -17 -41
									-47 -59 -96 -59 -85 0 -125 100 -65 161 40 39 97 41 135 2z m345 6 c33 -31 44
									-66 31 -105 -15 -44 -45 -64 -96 -64 -85 0 -125 100 -65 161 37 36 95 40 130
									8z"/>
									<path d="M1541 1077 c141 -138 207 -296 195 -462 -9 -123 -40 -208 -116 -310
									-71 -96 -203 -201 -309 -247 -57 -24 -46 -32 68 -49 164 -23 355 4 502 72 l68
									32 128 -55 c70 -31 129 -55 131 -53 1 1 -20 55 -48 120 l-50 117 29 36 c88
									113 121 262 86 397 -24 90 -62 153 -146 236 -124 124 -298 198 -506 215 l-88
									7 56 -56z"/>
									</g>
									</svg>
									Cotizar
								</button>
							</div>
						</div>
					</div>
					<div class="servicio b animacion anim_arriba_s">
						<span class="titulo_span">Plan Estándar</span>
						<h2 class="titulo_servicio">Aplicación web con administrador y bases de datos</h2>
						<div class="content_servicio">
							<img class="img_servicio" src="<?php echo IMG?>svg/3.svg" alt="">
							<span class="desde">Desde</span>
							<div class="precio_ant">
								<span class="moneda">CO</span>
								<s class="valor">$2'249.000</s>
								<div class="button_servicio">Ahorra 60%</div>
							</div>
							<div class="precio">
								<span class="moneda">CO</span>
								<span class="valor">$ 899.000</span>
							</div>
							<div class="props">
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Dominio por un año
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Hosting por un año
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Certificado SSL
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Diseño web personalizado
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Base de datos
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Administrador de datos
								</span>
							</div>
							<div class="content_button">
								<button onclick="window.location = '<?php echo HOST?>detalles_planes'" class="button btn_outline_dark">
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
								<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaría un sitio web con las siguientes caracteristicas:','_blank')" class="button btn_servicio verde_azul">
									<svg viewBox="0 0 224.000000 128.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M668 1269 c-104 -15 -182 -40 -283 -89 -173 -84 -292 -205 -352 -356
									-23 -59 -27 -84 -27 -174 0 -125 19 -189 89 -291 25 -36 45 -71 45 -76 0 -6
									-11 -35 -24 -64 -13 -30 -37 -87 -54 -126 l-31 -73 32 14 c18 7 83 35 146 61
									98 41 118 47 140 37 14 -5 54 -22 89 -37 250 -105 582 -96 817 23 182 91 321
									248 365 411 14 53 14 172 0 234 -31 142 -167 308 -320 394 -179 100 -421 143
									-632 112z m-135 -533 c33 -31 43 -68 27 -107 -17 -40 -47 -59 -93 -59 -52 0
									-97 43 -97 93 0 82 103 128 163 73z m351 -3 c34 -33 42 -65 26 -104 -17 -41
									-47 -59 -96 -59 -85 0 -125 100 -65 161 40 39 97 41 135 2z m345 6 c33 -31 44
									-66 31 -105 -15 -44 -45 -64 -96 -64 -85 0 -125 100 -65 161 37 36 95 40 130
									8z"/>
									<path d="M1541 1077 c141 -138 207 -296 195 -462 -9 -123 -40 -208 -116 -310
									-71 -96 -203 -201 -309 -247 -57 -24 -46 -32 68 -49 164 -23 355 4 502 72 l68
									32 128 -55 c70 -31 129 -55 131 -53 1 1 -20 55 -48 120 l-50 117 29 36 c88
									113 121 262 86 397 -24 90 -62 153 -146 236 -124 124 -298 198 -506 215 l-88
									7 56 -56z"/>
									</g>
									</svg>
									Cotizar
								</button>
							</div>
						</div>
					</div>
					<div class="servicio c animacion anim_arriba_s">
						<span class="titulo_span">Plan Premium</span>
						<h2 class="titulo_servicio">Plataformas web y desarrollo de apps para móviles</h2>
						<div class="content_servicio">
							<img class="img_servicio" src="<?php echo IMG?>svg/5.svg" alt="">
							<span class="desde">Desde</span>
							<div class="precio_ant">
								<span class="moneda">CO</span>
								<s class="valor">$ 3'199.000</s>
								<div class="button_servicio">Ahorra 50%</div>
							</div>
							<div class="precio">
								<span class="moneda">CO</span>
								<span class="valor">$ 1'599.000</span>
							</div>
							<!-- <div class="consulta_precio">
								<span>Consulta las funcionalidades y herraminetas que se necesiten en tu proyecto</span>
							</div> -->
							<div class="props">
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Dominio por un año
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Hosting por un año
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Certificado SSL
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Diseño web personalizado
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Bases de datos
								</span>
								<span>
									<svg viewBox="0 0 568.000000 566.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,566.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M5125 5646 c-206 -65 -522 -339 -945 -821 -896 -1021 -2102 -2800
									-2397 -3536 l-39 -96 -474 655 c-261 360 -496 678 -522 707 -26 29 -75 67
									-110 85 -56 31 -73 35 -158 38 -114 5 -177 -14 -269 -78 -107 -75 -180 -193
									-202 -326 -14 -89 -2 -170 40 -260 29 -62 1230 -1663 1315 -1753 102 -108 274
									-212 406 -246 85 -22 225 -16 290 13 121 54 166 111 270 347 94 212 333 692
									466 935 878 1606 1938 3068 2644 3643 156 128 187 160 213 216 30 69 28 170
									-5 243 -49 105 -151 192 -269 229 -70 22 -193 24 -254 5z"/>
									</g>
									</svg>
									Diseño de aplicaciones android
								</span>
							</div>
							<div class="content_button">
								<button onclick="window.location = '<?php echo HOST?>detalles_planes'" class="button btn_outline_dark">
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
								<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaría un sitio web con las siguientes características:','_blank')" class="button btn_servicio morado">
									<svg viewBox="0 0 224.000000 128.000000"
									 preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)"
									stroke="none">
									<path d="M668 1269 c-104 -15 -182 -40 -283 -89 -173 -84 -292 -205 -352 -356
									-23 -59 -27 -84 -27 -174 0 -125 19 -189 89 -291 25 -36 45 -71 45 -76 0 -6
									-11 -35 -24 -64 -13 -30 -37 -87 -54 -126 l-31 -73 32 14 c18 7 83 35 146 61
									98 41 118 47 140 37 14 -5 54 -22 89 -37 250 -105 582 -96 817 23 182 91 321
									248 365 411 14 53 14 172 0 234 -31 142 -167 308 -320 394 -179 100 -421 143
									-632 112z m-135 -533 c33 -31 43 -68 27 -107 -17 -40 -47 -59 -93 -59 -52 0
									-97 43 -97 93 0 82 103 128 163 73z m351 -3 c34 -33 42 -65 26 -104 -17 -41
									-47 -59 -96 -59 -85 0 -125 100 -65 161 40 39 97 41 135 2z m345 6 c33 -31 44
									-66 31 -105 -15 -44 -45 -64 -96 -64 -85 0 -125 100 -65 161 37 36 95 40 130
									8z"/>
									<path d="M1541 1077 c141 -138 207 -296 195 -462 -9 -123 -40 -208 -116 -310
									-71 -96 -203 -201 -309 -247 -57 -24 -46 -32 68 -49 164 -23 355 4 502 72 l68
									32 128 -55 c70 -31 129 -55 131 -53 1 1 -20 55 -48 120 l-50 117 29 36 c88
									113 121 262 86 397 -24 90 -62 153 -146 236 -124 124 -298 198 -506 215 l-88
									7 56 -56z"/>
									</g>
									</svg>
									Cotizar
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap_ventajas">
				<h2 class="titulo_ventajas">¿Qué estas buscando?</h2>
				<div class="ventaja b">
					<div class="img_ventaja animacion anim_der responsive_movil_on">
						<img src="<?php echo IMG?>svg/12.svg" alt="" />
					</div>
					<div class="info_ventaja animacion anim_izq">
						<h2>DESARROLLO DE PLATAFORMAS WEB Y DISEÑO PERSONALIZADO</h2>
						<span>Diseño y desarrollo de plataformas web personalizadas, que se ajusten a los requerimientos y objetivos de su negocio como herramienta para sus procesos.</span>
						<a href="<?php echo HOST?>contactanos" class="link">Contáctanos</a>
					</div>
					<div class="img_ventaja animacion anim_der responsive_movil_off"><img src="<?php echo IMG?>svg/12.svg" alt="" /></div>
				</div>
				<div class="ventaja">
					<div class="img_ventaja animacion anim_izq responsive_movil_on"><img src="<?php echo IMG?>svg/4.svg" alt=""></div>
					<div class="img_ventaja animacion anim_izq responsive_movil_off"><img src="<?php echo IMG?>svg/4.svg" alt=""></div>
					<div class="info_ventaja animacion anim_der">
						<h2>DESARROLLO DE SOFTWARE A LA MEDIDA</h2>
						<span>Para cada organización existe un software a la medida que responda a sus necesidades y expectativas particulares, Creamos soluciones seguras, intuitivas y de alto rendimiento.</span>
						<a href="<?php echo HOST?>contactanos" class="link">Contáctanos</a>
					</div>
				</div>
				<div class="ventaja b">
					<div class="img_ventaja animacion anim_der responsive_movil_on"><img id="ventaja_moviles" src="<?php echo IMG?>svg/8.svg" alt=""></div>
					<div class="info_ventaja animacion anim_izq">
						<h2>APLICACIONES PARA DISPOSITIVOS MÓVILES</h2>
						<span>La gran tendencia actual del mercado en el uso de dispositivos móviles por su gran ventaja de portabilidad, implementamos las mejores soluciones en este campo para ponerlas a disposición de nuestros clientes.</span>
						<a href="<?php echo HOST?>contactanos" class="link">Contáctanos</a>
					</div>
					<div class="img_ventaja animacion anim_der responsive_movil_off"><img id="ventaja_moviles" src="<?php echo IMG?>svg/8.svg" alt=""></div>
				</div>
				<div class="ventaja">
					<div class="img_ventaja animacion anim_izq responsive_movil_on"><img src="<?php echo IMG?>svg/10.svg" alt=""></div>
					<div class="img_ventaja animacion anim_izq responsive_movil_off"><img src="<?php echo IMG?>svg/10.svg" alt=""></div>
					<div class="info_ventaja animacion anim_der">
						<h2>El computador optimo para ti</h2>
						<span>Actualmente existe gran variedad de productos con distintas capacidades y funcionalidades por lo que es importante contar con asesoría que te permita elegir el mejor producto que cumpla tus necesidades personales o de tu empresa.</span>
						<a href="https://www.tintosoft.com.co/pcshop" target="_blank" class="link">Ver productos</a>
					</div>
				</div>
				<div class="ventaja b">
					<div class="img_ventaja animacion anim_izq responsive_movil_on"><img src="<?php echo IMG?>svg/14.svg" alt=""></div>
					<div class="img_ventaja animacion anim_izq responsive_movil_off"><img src="<?php echo IMG?>svg/14.svg" alt=""></div>
					<div class="info_ventaja animacion anim_der">
						<h2>SOPORTE Y MANTENIMIENTO DE SOFTWARE</h2>
						<span>Las aplicaciones de software son cambiantes a las necesidades y a las nuevas tecnologías. Ofrecemos para nuestros clientes el mantenimiento de software de manera eficiente ajustándose a las funcionalidades de sus aplicaciones.</span>
						<a href="<?php echo HOST?>contactanos" class="link">Contáctanos</a>
					</div>
				</div>
			</div>
			<div class="wrap_tecnologias">
				<h2 class="titulo_tecnologias animacion anim_arriba">Tecnologías utilizadas</h2>
				<div class="content_tecnologias animacion anim_arriba">
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/html.png" alt="" /></div>
						<h3>Html</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/css.png" alt="" /></div>
						<h3>Css</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/javascript.png" alt="" /></div>
						<h3>Javascript</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/angular.png" alt="" /></div>
						<h3>Angular</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/jquery.png" alt="" /></div>
						<h3>Jquery</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/php.png" alt="" /></div>
						<h3>Php</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/laravel.png" alt="" /></div>
						<h3>Laravel</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/codeigniter.png" alt="" /></div>
						<h3>Codeigniter</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/django.png" alt="" /></div>
						<h3>Django</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/nodejs.png" alt="" /></div>
						<h3>Nodejs</h3>
					</div>
<!-- 					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/android.png" alt="" /></div>
						<h3>Android</h3>
					</div> -->
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/java.png" alt="" /></div>
						<h3>Java</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/kotlin.png" alt="" /></div>
						<h3>Kotlin</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/postgresql.png" alt="" /></div>
						<h3>Postgresql</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/mysql.png" alt="" /></div>
						<h3>Mysql</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/sqlite.png" alt="" /></div>
						<h3>Sqlite</h3>
					</div>
					<div class="tecnologia">
						<div class="img_tecnologia"><img src="<?php echo IMG?>tecnologias/mongodb.png" alt="" /></div>
						<h3>Mongodb</h3>
					</div>
				</div>
			</div>
			<div class="wrap_contacto">
				<div class="capa_background_contacto"></div>
				<h2 class="titulo_contacto animacion anim_izq">Contacto</h2>
				<div class="content_contacto animacion anim_der">
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
		<div id="theater" class="theater" data="">
			<div index="" class="indicador"></div>
			<div class="close"><i class="icon-cancelar"></i></div>
			<div index="" class="btn_left"><i class="icon-arrow-c"></i></div>
			<div index="" class="btn_right"><i class="icon-arrow-c"></i></div>
			<div class="theater_main">
				<div class="theater_content">
					<img index="0" src="" id="img_theater">
				</div>
			</div>
		</div>
		<div id="div_mod_eliminar"></div>
	</div>	
</main>
<?php
$scripts = ['comp_slider.js','comp_modal.js','funciones_animacion.js'];
include VIEWS.'templates/footer.php'; 
include VIEWS.'templates/foot.php';
?>