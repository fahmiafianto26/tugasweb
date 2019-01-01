<!DOCTYPE html>
<html>
    <head>
        <title>Web grid</title>
        <link rel="stylesheet" href="basic.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="kontainer">
            <!--logo-->
            <div class="logo">
                <a href="index.html">
                    Fahmi <br>Website
                </a>
            </div>
            <!--Navigasi-->
            <div class="navigasi">
                <a href="index.html">Home </a>
                <a href="artikel.html">Artikel</a>
                <a href="profil.html">Profil</a>
                <a href="index.html">KRS</a>
                <a href="index.html">Form</a>
                <a href="index.html">Multimedia</a>
                <a href="index.html">Galeri</a>
            </div>
            <!--Konten-->
            <div class="konten">
                <h1>Data pendaftar</h1>
            </div>
            <div class="konten">
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
            </div>
            <!--Footer-->
            <div class="footer">
                <small>&copy; Copyright - fahmiwebsite.com 2017 | Alright reserved.</small>
            </div>
        </div>
    </body>
</html>