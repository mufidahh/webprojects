<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
<title>Form Administrator</title>
</head>
<body>
<?php
if(($_POST['user']=='mufida') AND ($_POST['pass']=='1234')) {
echo 'Selamat, Anda Telah Berhasil Masuk Halaman Administrator Dengan User Name :'.$_POST['user'];
echo '<br><br>Selamat menikmati.... ' . $_POST['user'];
}
else {
echo "<br><br><br><body text='red'><strong><center>Terdapat Kesalahan Pada saat Anda Login...!<br><br><a href='form.html'><h4>Kembali Ke Login</h4></a></center></strong></body>";
}
?>
</body>

</html>