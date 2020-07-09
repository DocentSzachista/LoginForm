<?php
//łączenie się z bażą (ile to już można xD)
$servername="localhost";
$dBUsername="root";
$dBPassword ="";
$dBName="bazauczęszczających";

$conn= mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
?>

