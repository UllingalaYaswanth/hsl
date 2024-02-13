<?php
$servername = "localhost";
$role = "root";
$password = "";
try {
$con = new PDO("mysql:host=$servername;dbname=hsl_portal", $role, $password);
// set the PDO error mode to exception
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>