<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=agendaa;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}

 $titulo=$_POST["Titulo"];
 $descripcion=$_POST["Descripcion"];
 $color=$_POST["Color"];
 $listado=$_POST["Listado"];
 $fecha_inicio=$_POST["Fecha_Inicio"];
 $fecha_fin=$_POST["Fecha_Fin"];
 
 echo nl2br("Datos: \n$titulo\n $descripcion\n "
                . "$color\n $listado\n $fecha_inicio\n $fecha_fin\n\n");
 
 $sql = "INSERT INTO cita (titulo, descripcion, color, listado, fecha_inicio, fecha_fin) VALUES ('$titulo','$descripcion','$color','$listado','$fecha_inicio','$fecha_fin')";

 $query=mysqli_query($bdd, $sql);
 if($query){
        echo "insercion exitosa" ;
 }else{
        //echo "error al insertar los datos";
		echo "error al insertar los datos $sql. "
                . mysqli_error($conn);
 }

 ?>


 