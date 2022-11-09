<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nomina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../CSS/diseño.css">
</head>
<header>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="cerrar.php">Salir</a>
        <div class="animation start-home"></div>
    </nav>
</header>
<body>

<div class="container">
  <h2>Buscar para Cotizar</h2>
  <form action="" method="GET">
    <div class="form-group">
      <label for="email">Buscar:</label>
      <input type="text" class="form-control" name="documento" placeholder="Busca tu Indentificacion" required>
    </div>
    <button type="submit" class="btn btn-default">Consultar</button><br><br><br>
  </form>
</div>

<?php
    

    if($_GET){
        require("../conexion/conexion.php");
        $id = $_GET['documento'];

        $sql= "SELECT nombre_empleado, apellido_empleado, correo, telefono FROM empleado WHERE id_empleado = :doc " ;
        $stmt = $bd->prepare($sql);
        $resul = $stmt->execute(array(':doc'=>$id));
        $rows= $stmt->fetchAll(\PDO::FETCH_OBJ);

        if(count($rows)){
            
            foreach($rows AS $row){
?>
            <div class="panel panel-primary">
                <div class="panel-heading">Informacion del empleado con numero de documento: <?php print($id) ?></div>
                    <div class="panel-body">Documento:  <?php print($id) ?><br><br> Nombre: <?php print($row->nombre_empleado) ?> <br><br>
                    Apellido: <?php print($row->apellido_empleado) ?> <br><br> Correo Electronico: <?php print ($row->correo) ?> <br><br>
                    Telefono: <?php print($row->telefono)?>
            
                </div>
                <a href="cotizar.php?id=<?php echo $id ?> &nomb= <?php echo $row->nombre_empleado ?> &apel= <?php echo $row->apellido_empleado ?>">Cotizar</a>
            </div>
<?php
            }

        }else{
            echo "El usuario no exixte en la base de datos";
        }
    }
?>


</body>
</html>

