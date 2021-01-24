<!DOCTYPE html>
<html lang="e">
<head>
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta charset="UTF-8">
	<title><?php echo NOMBRE_APP ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="<?php echo IMG?>tintosoft_favicon_2.png" type="image/x-icon">
	<!-- <link rel="icon" href="img/favicon.png" type="image/x-icon"> -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<?php
	$i = '';
	if (isset($estilos)){
	  	foreach ($estilos as $key => $value) {
	  		if (strpos($value, 'http') === False) {
	 			$name_arr = explode('.', $value);
	 			$name = $name_arr[0];
	 			$ext = '.'.$name_arr[1];
		  		$file_css = CSS.$name.$i.$ext;
	  		}else{
	  			$file_css = $value;
	  		}
	  	?>
		<link rel="stylesheet" href="<?php echo $file_css?>">
	<?php } 
	} ?>
	<link rel="stylesheet" href="<?php echo CSS?>comp_menu_elementos<?php echo $i?>.css">
	<link rel="stylesheet" href="<?php echo CSS?>estilos_botones<?php echo $i?>.css">
	<link rel="stylesheet" href="<?php echo CSS?>estilos_generales<?php echo $i?>.css">
	<link rel="stylesheet" href="<?php echo CSS?>estilos_principales<?php echo $i?>.css">
	<link rel="stylesheet" href="<?php echo CSS?>estilos_iconos<?php echo $i?>.css">
</head>
<body>