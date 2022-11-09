<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/diseño.css">
	<title> Super Tienda</title>
</head>
<header>
    <nav>
        <a href="admi.php">Inicio</a>
        <a href="registrar.php">Registrar</a>
        <a href="nominaver.php">Ver nomina</a>
        <a href="../index.php">Salir</a>
        <div class="animation start-home"></div>
    </nav>
</header>
<body>
	<?php
	
	include("../conexion/conexion.php");
    session_start();

	
	//--------------paginación-------------
	$registros=3;//indica que se van a ver 3 registro por página
	if(isset($_GET["pagina"])){
		if($_GET["pagina"]==1){
			header("Location:index.php");
		}else{
			$pagina=$_GET["pagina"];
		}
	}else{
		$pagina=1;//muestra página en la que estamos cuando se carga por primera vez
	}
	
	$empieza=($pagina-1)*$registros;//registro desde el cual va a empezar a mostrar
	$sql_total="SELECT * FROM nomina";//muestra los 3 primeros, primer parametro indica en que posición impieza en este caso posición 0, el segundo parametro cuantos registros quiere mostrar en este caso 3 registros

	$resultado=$bd->prepare($sql_total);

	$resultado->execute(array());
	$numfilas=$resultado->rowCount();//cuantos registros hay en total
	$totalpagina=ceil($numfilas/$registros);

	$registros=$bd->query("SELECT * from nomina LIMIT $empieza, $registros")->fetchALL(PDO::FETCH_OBJ);
	
	
	?>
	
<h3 align="center" class="centro" >TODAS LAS NOMINAS </h3>
<form action=" " method="post" autocomplete="off">
		<table align="center" border="2" class="titulo"  bordercolor="orange">
			<tr>
				<th class="pri"> Id Domina </th>
                <th class="pri"> Docuemento Usuario </th>
                <th class="pri"> Docuemento Empleado </th>
                <th class="pri">Sueldo devengado </th>
                <th class="pri"> Dias de trabajo </th>
                <th class="pri">Fecha </th>
                <th class="pri">Pension</th>
                <th class="pri">Salud</th>
                <th class="pri">Auxilio Transporte</th>
                <th class="pri"> Total </th>
                <th class="pri">Neto a Pagar</th>
			</tr>
			<?php
			foreach ($registros as $nomina) :?> 
            <tr>

            <?php echo '<td class="secu">'.$nomina->id_nomina.'</td>';
            echo '<td class="secu">'.$nomina->id_usu.'</td>';
            echo '<td class="secu">'.$nomina->id_empleado.'</td>';
            echo '<td class="secu">'.$nomina->sueldo_devengado.'</td>';
            echo '<td class="secu">'.$nomina->dias_trabajo.'</td>';
            echo '<td class="secu">'.$nomina->fecha.'</td>';
            echo '<td class="secu">'.$nomina->pension.'</td>';
            echo '<td class="secu">'.$nomina->salud.'</td>';
            echo '<td class="secu">'.$nomina->auxilio_transporte.'</td>';
            echo '<td class="secu">'.$nomina->total.'</td>';
            echo '<td class="secu">'.$nomina->neto_pagar.'</td>';
            
           
            ?>
            
                
			
					

			

			
			<?php
			endforeach;
		
			?>
			
		

				<a href="admi/admi.php"><input type="button" name="admin" class="boton3" value="Cerrar"onmouseup="window.close()"></a></td>
			</tr>
		
			
	</tr>
				
				
	
		</table>
</form>

<table border="0" align="center">
	<tr>	
<?php
for($i=1; $i<=$totalpagina; $i++){
	?>
	 <td><?php echo " <a href='?pagina=" . $i . "'>" . $i . "  </a>  ";?></td>
		
<?php
	
$base=null;//vaciar los datos de conexión 
}
?>

