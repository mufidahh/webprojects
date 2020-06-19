<!DOCTYPE html >
<html lang="en">
<head>
<title>Form Login</title>

<script language="javascript" type="text/javascript">
function check(){
var user= doc.getElementById('username').value;
var pass= doc.getElementById('password').value;
if(user.replace(/^[A-Za-z]{1,}$/, '')==''){
alert('Masukkan username minimal 1 huruf!');
return false;
}
if(pass.replace(/^[A-Za-z]{4,}$/, '')==''){
alert('Masukkan password 4 huruf!');
return false;
}
return true;
}
</script>
</head>
<body background="orange.jpg">
<form name="login" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
<p align="center"><? echo $status;?></p>

<table width="500" border="6" align="center" bgcolor="#f2ae83"

rules="groups" cellpadding="8" cellspacing="5">
<tr><td width="50">&nbsp;</td>
<td align="left"><font size="10" face="Verdana"

color="#000000">Login</font></td>
</tr>
<tbody >
<tr><td width="100">&nbsp;</td><td><font size="4"

face="verdana">Username :</font></td></tr>
<tr><td width="100">&nbsp;</td><td><input type="text" name="username"

size="50" id="username" /></td></tr>
<tr><td width="100">&nbsp;</td><td><font size="4"

face="verdana">Password :</font></td></tr>
<tr><td width="100">&nbsp;</td><td><input type="password"

name="password" size="50" id="password" /></td></tr>
<tr><td width="100">&nbsp;</td><td><input name="submit" type="submit"

onClick="return check()" value="LOGIN" /></td></tr>
<tr><td colspan="2"align="center"><font size="2" face="verdana"></font></td></tr>
</table>
</form>
<?php
if (isset ($_POST['username'])){
if ($_POST['username']=='mufida'){echo 'Welcome to ' .$_POST

['username']; }
else{echo 'Username tidak sesuai, silahkan masukan username!!!';}
}
if (isset ($_POST['username'])){
if ($_POST['password']=='1234'){echo '<br/>Your Password is '

.$_POST['password']; }
else{echo '<br/>Password tidak sesuai, silahkan masukan password!!!';}
}
?>
</body>
</html> 