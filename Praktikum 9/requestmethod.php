<!DOCTYPE html>
<html lang="en">

<head>
	<title> Identifikasi Method </title>
</head>

<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> Nama
		<input type="text" name="nama" /> <br/>
		
		<input type="submit" value ="OK" />
	</form>
	
	<?php
		if (isset ($_GET['nama'])) {
		echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
		}
	?>
	
	</body>
	</html>