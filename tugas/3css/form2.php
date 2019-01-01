<!DOCTYPE html>
<html>
	<head>
		<title>Fahmi website</title>
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>
	<body class="latar">
		<center>
		<table>
			<!--header-->
			<tr class="logo">
				<td colspan="2" height="120px">
					<font face="Old English Text MT"; size="5">
					<a href="index.html" style="text-decoration: none; object-position: left;">
						<h1 align="left" style="color: red;">
							Fahmi <br>Website
						</h1>
					
					</a>
				</font>
				</td>
			</tr>
			<!--navigation-->
			<tr class="navigasi">
				<td colspan="2" height="30px">
					<nav>
 						<a href="index.html">Halaman Utama</a> |
 						<a href="artikel.html">Artikel</a> |
 						<a href="profil.html">Profil</a> |
 						<a href="krs.html">KRS</a> |
 						<a href="form.html">Form</a> |
 						<a href="multimedia.html">Multimedia</a> |
					</nav>
				</td>
			</tr>
			<!--content-->
			<tr class="konten">
				<td height="400px" width="920px">
					<h1 align="center">Data pendaftar</h1>
					<?php
						{
							echo"Nama: ".$_GET['nama']. "</br>";
							echo"Password: ".$_GET['password']."</br>";
							echo"Jenis kelamin: ".$_GET['jenis_kelamin']."</br>";
							echo"Keahlian: ".$_GET['keahlian']."</br>";
							echo"Tempat lahir: ".$_GET['tempat_lahir']."</br>";
							echo"Deskripsi Diri: ".$_GET['deskripsi']."</br>";
						}
					?>
				</td>
			</tr>
			<!--footer-->
			<tr class="footer">
				<td colspan="2">
					<br><br><br>
					<small>&copy; Copyright - fahmiwebsite.com 2017 | Alright reserved.</small>
				</td>
			</tr>
		</table>
		</center>
	</body>
</html>