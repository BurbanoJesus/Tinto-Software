<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
session_start();

$estilos = ['estilos_inicio.css','estilos_tablas.css'];
require_once VIEWS.'templates/head.php';

include VIEWS.'templates/header.php';

?>
<main>
	<div class="main">
		<div class="contenido" id="detalles_planes">
			<div class="wrap_head_titulo">
				<div class="capa_background"></div>
				<div class="head_titulo"></div>
				<h2 class="head_titulo_h2">Planes ofrecidos</h2>
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
			<div class="wrap_detalles_planes">
				<div class="tabla tabla_detalles_planes">
					<table class="no_border">
						<thead class="transparent">
							<tr class="tr_transparent">
								<th class="left titulo_prop">Caracteristicas</th>
								<th width="190"><div class="titulo_main">Plan Basico</div></th>
								<th width="190"><div class="titulo_main b">Plan Intermedio</div></th>
								<th width="190"><div class="titulo_main c">Plan Avanzado</div></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="left prop"><span>Dominio por un año</span></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Hosting por un año</span></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Dominio por un año</span></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Certificado SSL</span></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Diseño web personalizado</span></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Diseño Adaptable a moviles</span></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Soporte y acesoria</span></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Enlaces a redes sociales</span></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								</tr>
							<tr>
								<td class="left prop"><span>Bases de datos</span></td>
								<td class="center str_clear">-</td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Registro y sesiones de usuario</span></td>
								<td class="center str_clear">-</td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Administrador de datos del sistema</span></td>
								<td class="center str_clear">-</td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Desarollo de APIS</span></td>
								<td class="center str_clear">-</td>
								<td class="center str_clear">-</td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Graficas de estadisticas avanzadas</span></td>
								<td class="center str_clear">-</td>
								<td class="center str_clear">-</td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Diseño de aplicaciones android</span></td>
								<td class="center str_clear">-</td>
								<td class="center str_clear">-</td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Diseño grafico personalizado</span></td>
								<td class="center str_clear">-</td>
								<td class="center str_clear">-</td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr>
								<td class="left prop"><span>Administrador de datos en android</span></td>
								<td class="center str_clear">-</td>
								<td class="center str_clear">-</td>
								<td class="center"><div class="icon"><img src="<?php echo IMG?>default/check-b.png" alt="" /></div></td>
							</tr>
							<tr class="last">
								<td class="left prop"><span></span></td>
								<td class="center">
									<div class="div_btn_cotizar">
										<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaría un sitio web con las siguientes caracteristicas:','_blank')" class="button verde_claro">
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
								</td>
								<td class="center">
									<div class="div_btn_cotizar">
										<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaría un sitio web con las siguientes caracteristicas:','_blank')" class="button verde_azul">
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
								</td>
								<td class="center">
									<div class="div_btn_cotizar">
										<button onclick="window.open('https://api.whatsapp.com/send?phone=+573226674241&text=Hola, me gustaría un sitio web con las siguientes caracteristicas:','_blank')" class="button morado">
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
								</td>
							</tr>
						</tbody>
					</table>
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