<?php


$nuevo=array("elemento1", "elemento2", "elemento3");

foreach($nuevo as $ele){
echo $ele. "<br/>";
}

$xml= simplexml_load_file ("https://byrontosh.github.io/SOAFactura/ejemplo1.xml");

//MAPEAR DATOS HIJOS

foreach($xml->nodo_hijo as $nodo){
      echo $nodo->valor."<br>";

      //CADENA DE CONEXION

$db_host="mysql-wendy19.alwaysdata.net";
$db_nombrebdd="wendy19_registrosoa";
$db_usuario="wendy19";
$db_contra="arquitectura";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

if(mysqli_connect_errno())
{
    echo "CONEXION FALLIDA \n";
    exit();
}

mysqli_set_charset ($conexion,"utf8");
mysqli_select_db ($conexion,$db_nombrebdd) or die ("LA BASE DD NO SE ENCUENTRA");
$consulta = "INSERT INTO valores (valores) VALUES ('$nodo->valor');";
$resultado= mysqli_query($conexion,$consulta);

}
if(resultado==true){
echo "<br>";
echo "REGISTRO GUARDADO EXITOSAMENTE";
}
else{
echo "REGISTRO NO INGRESADO";
}





?>