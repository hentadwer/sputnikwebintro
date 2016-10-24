<?php

$host = 'localhost';
$usuario = 'root';
$pass = 'root';

$conn = mysql_connect($host, $usuario, $pass) or die ('Error conectando a la base de datos');

$bdnombre = 'cf';
mysql_select_db($bdnombre);
