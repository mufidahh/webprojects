<?php
	session_start();
	if (isset($_SESSION['login'])){ //jikan login sudah berhasil maka menampilkan isi session
		echo "<h1> Selamat datang,  ". $_SESSION ['login']."</h1>";
		echo "<h2> Halaman ini bisa tampil jika behasil login. Ini adalah HOME (beranda) kamu.<h2>";
		echo "<h2>Klik <a href='session3.php'>disini (session3.php)</a> untuk logout (keluar) </h2>";
	}
	else{
		//session tidak muncul karena belum login atau belum berhasil login
		die "<h2> Anda belum login! Login dulu <a href='session.php'> disini </a> </h2>");
	}
?>