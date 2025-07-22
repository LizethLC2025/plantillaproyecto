<?php
$password_plana = "123456"; // La contraseña que quieres encriptar
$hash = password_hash($password_plana, PASSWORD_DEFAULT);
echo "El NUEVO hash para la base de datos es: " . $hash;
?>