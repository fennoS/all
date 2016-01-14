<?php

	$hour = date("H");
	$time = date("H:i");
	if ($hour <= 6) {
		//nacht
		$message = "goedenacht";
	} elseif ($hour <= 12) {
		$message = "goedemorgen";
		//ochtend
	} elseif ($hour <= 18) {
		$message = "goedemiddag";
		//middag
	} else {
		$message = "goedeavond";
		//avond
	}

?>


<html>
	<head>
		<title><?php echo $message; ?></title>
		<link rel = "stylesheet" type = "text/css" href = "hooi.css">
	</head>
	
	<body class="<?php echo $message; ?>">
	
		<div>
			<p><?php echo $message; ?>
			<?php echo "het is nu: ";
			echo $time; ?></p>
		</div>
	</body>

</html>