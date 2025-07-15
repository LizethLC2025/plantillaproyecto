<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Cliente</title>
</head>
<body>
  <h2>Registrar Cliente</h2>
  <form method="POST" action="../../controladores/cliente.php?op=guardar">
    <input type="hidden" name="idcliente" value="">

    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Apellido:</label><br>
    <input type="text" name="apellido" required><br><br>

    <label>Tipo de Documento:</label><br>
    <input type="text" name="tipo_documento" required><br><br>

    <label>Número de Documento:</label><br>
    <input type="text" name="num_documento" required><br><br>

    <label>Dirección:</label><br>
    <input type="text" name="direccion"><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <input type="submit" value="Guardar Cliente">
  </form>
</body>
</html>
