<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css'];
require_once VIEWS.'templates/head.php';

$nosotros = "active";
include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="quienes_somos">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_titulo"></div>
				<h2 class="head_titulo_h2">Nuestra compañía</h2>
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
			<div class="info_about">
				<div class="icon_about">
					<svg class="file" viewBox="0 0 224.000000 224.000000"
					 preserveAspectRatio="xMidYMid meet">
					<g transform="translate(0.000000,224.000000) scale(0.100000,-0.100000)"
					stroke="none">
					<path d="M839 2221 l-24 -19 0 -314 0 -313 -153 -279 c-84 -153 -152 -279
					-150 -281 87 -80 215 -175 235 -175 16 0 44 18 81 54 l57 55 57 -55 c38 -36
					65 -54 82 -54 23 0 90 49 209 152 l38 33 -156 275 -155 275 0 98 0 97 239 0
					c226 0 240 1 265 21 41 33 35 72 -22 138 -27 31 -52 62 -56 68 -4 8 15 38 49
					78 61 72 70 110 35 145 -19 19 -33 20 -314 20 -275 0 -295 -1 -317 -19z"/>
					<path d="M1652 1017 c-13 -7 -44 -50 -69 -97 l-45 -86 192 -342 c106 -189 196
					-360 199 -380 4 -20 4 -54 1 -74 l-7 -38 137 0 c130 0 138 1 158 23 12 13 22
					33 22 45 0 21 -489 916 -513 938 -20 20 -51 24 -75 11z"/>
					<path d="M1233 811 c-137 -117 -201 -136 -298 -86 l-49 24 -33 -20 c-18 -11
					-57 -23 -86 -26 -73 -7 -119 15 -232 110 -51 44 -93 73 -98 68 -23 -23 -437
					-798 -437 -817 0 -13 12 -32 26 -43 27 -21 32 -21 874 -21 809 0 849 1 871 18
					14 12 22 30 22 48 0 19 -74 161 -218 419 -120 215 -223 395 -229 401 -8 9 -38
					-11 -113 -75z"/>
					</g>
					</svg>
				</div>
				<div class="info_desc">
					<h2>Misión</h2>
					<p>Nuestra misión como compañía de desarrollo de software es ofrecer soluciones de negocio que impulsen a las empresas en el mundo del Internet a través de servicios de alta calidad como el desarrollo de aplicaciones con las ultimas tecnologías y diseños vanguardistas. somos un equipo de profesionales que trabajamos en base a la responsabilidad y respeto.</p>
				</div>
			</div>
			<div class="info_about b">
				<div class="icon_about">
					<svg class="file" viewBox="0 0 224.000000 224.000000"
					 preserveAspectRatio="xMidYMid meet">
					<g transform="translate(0.000000,224.000000) scale(0.100000,-0.100000)"
					stroke="none">
					<path d="M1265 2233 c-207 -29 -435 -143 -613 -308 -72 -67 -72 -67 -148 -76
					-154 -17 -297 -71 -382 -145 -36 -31 -43 -42 -40 -68 3 -31 4 -31 114 -59 108
					-28 110 -29 107 -55 -4 -23 20 -51 174 -204 139 -138 185 -177 208 -180 28 -3
					30 -6 51 -93 25 -108 31 -122 50 -129 36 -14 101 55 150 158 39 83 60 159 74
					269 10 79 10 79 76 150 161 174 263 370 300 575 29 166 16 184 -121 165z"/>
					<path d="M1700 1468 c-20 -21 -20 -31 -20 -720 l0 -699 25 -24 24 -25 231 0
					231 0 24 25 25 24 0 699 c0 689 0 699 -20 720 -20 21 -27 22 -260 22 -233 0
					-240 -1 -260 -22z"/>
					<path d="M212 1309 c-65 -33 -105 -100 -172 -295 -58 -169 -45 -193 78 -154
					101 32 243 90 283 116 46 29 80 84 86 139 17 149 -140 261 -275 194z"/>
					<path d="M978 1019 c-47 -18 -49 -46 -46 -532 l3 -449 24 -19 c21 -17 42 -19
					257 -19 221 0 235 1 254 20 19 19 20 33 20 493 0 469 0 474 -21 493 -19 17
					-40 19 -243 21 -132 1 -232 -2 -248 -8z"/>
					<path d="M212 540 c-21 -20 -22 -27 -22 -260 0 -233 1 -240 22 -260 21 -19 34
					-20 254 -20 213 0 234 2 255 19 l24 19 0 242 0 242 -24 19 c-21 17 -42 19
					-255 19 -220 0 -233 -1 -254 -20z"/>
					</g>
					</svg>
				</div>
				<div class="info_desc">
					<h2>Visión</h2>
					<p>Tenemos proyectado ser una compañía reconocida en el campo de desarrollo de software por tener una alta calidad en nuestros productos y servicios, impulsando a las diferentes empresas y negocios con optimas soluciones ofrecidas por nuestros profesionales experimentados.</p>
				</div>
			</div>
			<div class="info_about">
				<div class="icon_about">
					<svg class="file" viewBox="0 0 224.000000 224.000000"
					 preserveAspectRatio="xMidYMid meet">
					<g transform="translate(0.000000,224.000000) scale(0.100000,-0.100000)"
					stroke="none">
					<path d="M159 2226 c-86 -31 -145 -104 -156 -194 -15 -133 93 -255 227 -255
					135 0 233 97 233 233 0 155 -159 268 -304 216z"/>
					<path d="M1931 2227 c-193 -74 -207 -346 -21 -430 208 -94 413 138 292 332
					-53 87 -179 133 -271 98z"/>
					<path d="M982 1949 c-335 -59 -612 -323 -683 -649 -18 -84 -18 -276 0 -360 65
					-300 300 -545 606 -632 113 -32 316 -32 427 0 262 75 461 249 565 495 193 458
					-70 988 -560 1128 -83 23 -272 33 -355 18z m-121 -296 c-22 -43 -51 -112 -65
					-153 l-25 -75 -117 -3 -116 -3 20 33 c44 70 102 136 155 176 59 46 155 102
					174 102 8 0 -3 -31 -26 -77z m547 53 c107 -54 204 -144 274 -254 l20 -33 -117
					3 -117 3 -22 70 c-12 39 -41 107 -64 153 -22 45 -36 82 -31 82 5 0 31 -11 57
					-24z m-247 -43 c36 -57 95 -179 105 -217 l6 -26 -152 0 -152 0 6 26 c18 69
					126 264 147 264 5 0 23 -21 40 -47z m-423 -543 l0 -111 -131 3 -132 3 -3 94
					c-1 52 -1 100 2 108 4 10 37 13 135 13 l129 0 0 -110z m577 0 l0 -105 -195 0
					-195 0 -3 94 c-1 52 0 101 2 108 5 11 44 13 198 11 l193 -3 0 -105z m450 0 l0
					-105 -131 -3 -131 -3 0 111 0 111 131 -3 131 -3 0 -105z m-969 -380 c14 -41
					43 -110 64 -152 21 -43 34 -78 29 -78 -20 0 -106 49 -167 95 -59 44 -117 109
					-164 183 l-20 33 116 -3 117 -3 25 -75z m469 53 c-10 -43 -92 -205 -120 -238
					l-25 -30 -25 30 c-28 33 -110 196 -120 238 l-7 27 152 0 152 0 -7 -27z m418
					-4 c-39 -66 -107 -142 -166 -185 -61 -46 -147 -94 -166 -94 -5 0 10 39 33 88
					24 48 51 112 61 142 9 30 18 61 20 68 3 9 36 12 120 12 l116 0 -18 -31z"/>
					<path d="M177 456 c-198 -53 -238 -318 -64 -420 156 -92 350 16 350 194 0 156
					-138 265 -286 226z"/>
					<path d="M1957 459 c-112 -26 -180 -113 -179 -230 0 -136 125 -244 260 -225
					99 13 185 99 198 198 21 156 -127 292 -279 257z"/>
					</g>
					</svg>
				</div>
				<div class="info_desc">
					<h2>Indicadores</h2>
					<div class="lista_numeros">
						<p><b>1.</b> Ofrecer un servicio de calidad, siempre comprometidos con nuestros clientes.</p>
						<p><b>2.</b> Ofrecer valores institucionales que generan en nuestros profesionales y clientes productos de alto valor.</p>
					</div>
				</div>
			</div>
			<!-- <div class="info_about b">
				<div class="icon_about">
					<svg class="file" viewBox="0 0 224.000000 206.000000"
					 preserveAspectRatio="xMidYMid meet">
					<g transform="translate(0.000000,206.000000) scale(0.100000,-0.100000)"
					stroke="none">
					<path d="M990 2054 c-143 -22 -286 -67 -480 -151 -293 -127 -510 -264 -510
					-321 0 -32 33 -80 71 -101 92 -52 186 -37 445 69 252 104 334 130 417 130 40
					0 100 -7 132 -15 66 -18 251 -102 242 -111 -3 -3 -56 2 -119 12 -156 24 -342
					25 -385 1 -40 -21 -53 -45 -53 -94 0 -101 100 -161 327 -197 76 -12 106 -23
					170 -60 92 -53 204 -92 290 -102 49 -5 64 -4 67 7 2 8 38 136 80 284 42 149
					85 300 95 337 l19 66 -146 62 c-189 80 -417 156 -528 175 -47 8 -92 14 -98 14
					-6 -1 -22 -3 -36 -5z"/>
					<path d="M1968 1858 c-24 -19 -231 -761 -223 -799 9 -40 50 -66 142 -90 105
					-28 323 -38 341 -17 9 12 12 118 10 464 l-3 449 -125 3 c-90 2 -130 -1 -142
					-10z"/>
					<path d="M12 1108 c-9 -12 -12 -119 -10 -464 l3 -449 131 -3 c97 -2 134 1 142
					10 5 7 58 183 117 391 115 407 117 420 65 457 -44 31 -182 61 -315 67 -99 5
					-123 3 -133 -9z"/>
					<path d="M636 938 c-79 -268 -187 -680 -180 -687 17 -17 317 -138 444 -179 69
					-22 166 -48 216 -57 82 -15 97 -15 180 -1 316 54 944 363 944 464 0 33 -34 80
					-73 103 -34 20 -55 24 -117 24 -85 -1 -141 -18 -371 -114 -284 -118 -363 -133
					-504 -96 -65 17 -251 102 -242 111 3 3 54 -2 114 -12 149 -24 347 -25 390 -1
					40 21 53 45 53 95 0 88 -82 146 -258 182 -55 11 -110 20 -122 20 -12 0 -57 19
					-99 43 -105 59 -168 85 -251 102 -87 18 -119 19 -124 3z"/>
					</g>
					</svg>
				</div>
				<div class="info_desc">
					<h2>Objetivos</h2>
					<div class="lista_ul">
						<p>Brindar un servicio de calidad, siempre comprometidos con nuestros clientes y con nosotros mismos.</p>
						<p>Enseñar, inspirar y formar Ingenieros en la Universidad capaces de aplicar los conceptos vistos en clase para identificar y resolver problemas que involucren sistemas de cómputo.</p>
					</div>
				</div>
			</div> -->
		</div>
		<?php  include VIEWS.'templates/chat.php'; ?>
	</div>
</main>
	
<?php 
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>