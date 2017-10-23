<html>
<body>
<?php
$host= "localhost";
$user= "root";
$password= "";
$email=$_POST['Email'];
$fullname=$_POST['Nama'];
$username=$_POST['Username'];
$pw=$_POST['Password'];
$pw=str_repeat("*",strlen("Password"));

if($username)
{
$conn=mysqli_connect ($host,$user,$password);
mysqli_select_db ($conn,'biodata');
$sql="insert into tbbiodata values ('$Email', '$Nama', '$Username', '$Password')";
$hasil=mysqli_query ($conn,$sql);
}

else{
	echo "Data Gagal Disimpan";
}
?>

<p align="center"><font size="5px"><b>INFO LOGIN ANDA</b></font></p>
<p align="center"><table>
<tr><td>Email</td><td>:</td><td><?php echo $_POST["Email"];?></td></tr>
<tr><td>Fullname</td><td>:</td><td><?php echo $_POST["Nama"];?></td></tr>
<tr><td>Username</td><td>:</td><td><?php echo $_POST["Username"];?></td></tr>
<tr><td>Password</td><td>:</td><td><?php echo $_POST["Password"];?></td></tr>
</table></p>
</body>
</html>