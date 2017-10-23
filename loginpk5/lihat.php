<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Biodata Anda</title>
</head>

<body>
<?php
$koneksi=mysql_connect("localhost","root","") or die ("Gagal connect ke server");
mysql_select_db("biodata") or die ("Gagal membuka database");
?>
<center> BIODATA AKUN INSTAGRAM ANDA<br> INSTAGRAM.COM COPYRIGHT2017 <hr>
<table border=1>
<tr><td><center>Email</center></td><td><center>
Name</center></td><td><center>Username</center></center></td><td><center>Password</center></center></td><tr>
<?php
$sql="select * from tbbiodata";
$hasil=mysql_query($sql,$koneksi) or die ("Gagal melakukan Query");;
while ($row=mysql_fetch_array($hasil)) {
?>
<tr><td><?php echo $row ['Email']; ?></td>
<td><?php echo $row ['Nama']; ?></td>
<td><?php echo $row ['Username']; ?></td>
<td><?php echo $row ['Password']; ?></td>
</tr>
<?php
}
mysql_close($koneksi);
?></table>
</body>
</html>
