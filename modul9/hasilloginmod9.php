<?php 
    session_start(); 
    echo "Anda Berhasil Login Sebagai ".$_SESSION['username']." Dan Anda Terdaftar Sebagai ".$_SESSION['status']; 
?> 
<br>
Silakan Logout dengan klik link <a href='logoutmod9.php'> Disini </a>