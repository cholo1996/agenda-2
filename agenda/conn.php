<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=agenda;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}

 $titulo=$_POST["titulo"];
 $Descripción=$_POST["Descripción"];
 $Color=$_POST["Color"];
 $listado=$_POST["listado"];
 $fechainicial=$_POST["fecha inicial"];
 $fechafinal=$_POST["fecha final"];

 $sql="INSERT INTO CITA (TITULOS,Descripción,Color,listado,fecha final,fecha final) VALUES ('$titulo','$Descripción',
 'Color','listado','fecha inicial',fecha final')";

 $query=mysqli_query($bdd, $sql);
 if($query){
        echo "insercion exitosa" ;
 }else{
        echo "error al insertar los datos";
 }

 ?>


 