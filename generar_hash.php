<?php
$password_plana = "123456"; // La contraseña que quieres usar
$hash = password_hash($password_plana, PASSWORD_DEFAULT);
echo "El hash para '$password_plana' es: " . $hash;
?>