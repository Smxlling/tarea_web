<?php
include 'conexion.php';

$oConnection=new CDConexion('localhost',5432,'usuario1','usuario1','registros');
//$strConnection="host=localhost port=5432 dbname=registros user=usuario1 password=usuario1";
$oConnection->openConnection();


//$conn=pg_connect($strConnection);

$strQuery="INSERT INTO public.alumnos VALUES('342334d64','second','Tofirts');";
//$oConnection->runQuery($strQuery);
echo $oConnection->getHost();
//$host,$port,$user,$pass,$dbname,$connection
//$query=pg_query($strQuery);



?>