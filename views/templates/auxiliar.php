<div class="contenido_fecha">
	<div class="select dia" id="dia" data="">
	<div class="head_select">
		<span class="nombre_select">Dia</span>
		<i class="icon-arrow"></i>
	</div>
	<div class="opciones">
			<?php for ($i=0; $i <= 31; $i++) { ?>
			<div class="opcion"><span><?php echo $i?></span></div>
			<?php } ?>
	</div>
	</div>
	<div class="select mes" id="genero" data="">
		<div class="head_select">
			<span class="nombre_select">Mes</span>
			<i class="icon-arrow"></i>
		</div>
		<div class="opciones">
			<?php for ($i=0; $i <= 11; $i++) { ?>
			<div class="opcion"><i class="icon-filled-check"></i><span><?php echo $months[$i]?></span></div>
			<?php } ?>
		</div>
	</div>
	<div class="select year" id="genero" data="">
		<div class="head_select">
			<span class="nombre_select">Año</span>
			<i class="icon-arrow"></i>
		</div>
		<div class="opciones">
			<?php for ($i=1920; $i <= $year_actual; $i++) { ?>
			<div class="opcion"><span><?php echo $i?></span></div>
			<?php } ?>
		</div>
	</div>
	<!-- <input id="fecha_nac" type="date" placeholder="Ingresar Edad..." required="true" /> -->
</div>


<?php 
				// $id_old = $array[0]->id_lugar;
				$id_old = '';
				foreach ($array as $key => $row) {
					$id_new = $row->id_lugar;
					$type = type_multimedia($row->url);
					if ($id_new != $id_old) {
				?>
					<div id="multimedia_museo" class="img" style="display: none;">
				<?php }else{ 
						if ($type == 'imagen') { 
						?>
							<img index="0" src="<?php echo $row_principal->foto_principal?>" target="theater" class="call_theater multimedia" />
						<?php } else { ?>
							<video index="0" target="theater" class="call_theater multimedia" controls>
								<source src="<?php echo $row_principal->foto_principal?>" type="video/mp4">Your browser does not support HTML5 video
							</video>
					</div>
					<?php }
						$id_old= $row->id_lugar;
					}
				}
				?>



$codigo = $this->createRandomCode();

        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";
        
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        
        $mail->Username = 'plataformapic.soporte@gmail.com';
        
        $mail->Password = '5aHdrCGVwgh2cdV';
        
        $mail->setFrom('plataformapic.soporte@gmail.com', 'Plataforma Salud');
        
        $mail->addAddress($correoElectronico, $nombre);
        
        $mail->Subject = $subject;
        
        $mail->Body = $template;
        
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }