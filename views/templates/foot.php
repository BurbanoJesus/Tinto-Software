	<script src="<?php echo JS?>jquery-3.3.1.min.js"></script>
	<?php
	$i = '';
	if (isset($scripts)){
	  	foreach ($scripts as $key => $value) {
	  		if (strpos($value, 'http') === False) {
	 			$name_arr = explode('.', $value);
	 			$name = $name_arr[0];
	 			$ext = '.'.$name_arr[1];
		  		$file_js = JS.$name.$i.$ext;
	  		}else{
	  			$file_js = $value;
	  		}
	  	?>
		<script src="<?php echo $file_js?>"></script>
	<?php } 
	} ?>
	<script src="<?php echo JS?>funciones_generales<?php echo $i?>.js"></script>
	<script src="<?php echo JS?>funciones_vistas<?php echo $i?>.js"></script>
	<script src="<?php echo JS?>comp_menu_elementos<?php echo $i?>.js"></script>
</body>
</html>