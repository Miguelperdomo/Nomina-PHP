<?php
       session_start();
       require("../conexion/conexion.php");

    $id = $_GET['id'];
    $nomb= $_GET['nomb'];
    $apel = $_GET['apel'];







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/diseño.css">
    <title>Cotizar</title>
</head>
<header>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="cerrar.php">Salir</a>
        <div class="animation start-home"></div>
    </nav>
</header>
<body>
    <form method="GET" action="detalle.php" id="formulario">
    <div>
        <h1>Generar Cotizacion</h1>
        <input type="text"  name="id" value="<?php echo $id ?>" readonly>
        <input type="text" name="nombre" value="<?php echo $nomb ?>" readonly>
        <input type="text" name="apellido" value="<?php echo $apel ?>" readonly>
        <input type="text" id="sueldo" name="sueldo" placeholder="Sueldo (1 Millon Max)" required>
        <input type="text" id="dias" name="dias" placeholder="Ingresa dias trabajados" required>
        <a href="detalle.php?id= <?php $id ?> &nomb=  <?php $nomb ?> &apel= <?php $apel ?>"><input type="submit"  name="verificar" value="verificar"></a>
    </div>


    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("formulario").addEventListener('submit', validarFormulario);});

function validarFormulario(evento) {
  evento.preventDefault();
  var sueldo = document.getElementById('sueldo').value;
  if(sueldo < 1000000) {
    alert('Es sueldo es menor, tiene que ser Max 1 millon');
    return;
  }
  var dias = document.getElementById('dias').value;
  if (dias > 31) {
    alert('Uju, No trabjaste todo eso, vuleve a intentar');
    return;
  }
  this.submit();
  
}

   
    </script>

</body>
</html>