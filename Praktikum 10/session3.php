<?php
	session_start();
	if (isset($_SESSION ['login'])){
		unset ($_SESSION);
		session_destroy();
		echo "<h1> Kamu berhasil logout/keluar<h1>";
		echo "<h1> Klik <a href= 'session.php'>disini</a> untuk ligin lagi.<br> Kamu tidak bisa masuk ke <a href='session2.php'> HOME (beranda) </a> lagi.</h2>";
	
	} 
?>