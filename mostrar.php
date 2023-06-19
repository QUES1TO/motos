<?php 
  function connect()
  { $serverName="localhost";
    $userName="root";
    $password="";
    $dbName="formularioPhp";
    try
    {
     $conn=new mysql1($serverName,$userName,$password,$dbName)
    }
    catch(mysql_sql_exeption $e)
    {
       echo "error" .$e->getMessage();
    }
    return $conn;
  }
   $nombre=$_POST[´Nombre´]
   $apelllido=$_POST[´Apellido´]
   $genero=$_POST[´Genero´]
 $sql = "INSERT INTO usuario(nombre,apellido,genero) VALUES (´".$nombre."´,´".$apellido."´,´".$genero."´)"
$conn =connect();
$sentence=$conn->prepare($sql);
$sentence->execute();

if($sentence->affected_rows>0)
{
  echo "guardado";
}
else{
    echo "error al insertar". $conn->error;
}
    ?>