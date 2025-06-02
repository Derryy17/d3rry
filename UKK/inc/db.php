<?php
  $host = "localhost";
  $user = "root";
  $pass = ""; // default XAMPP MySQL password is empty
  $db   = "cafetaria";
  
  $conn = mysqli_connect($host, $user, $pass, $db);
  if (!$conn) {
      die("Koneksi gagal: " . mysqli_connect_error());
  }
  ?>