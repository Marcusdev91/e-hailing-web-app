<?php

$servername="localhost";
$dBUsername="root";
$dbpassword="";
$dbname="mai_cab";
    
    $mycon = mysqli_connect($servername,$dBUsername,$dbpassword,$dbname);


if(!$mycon){
    die("Connection failed:" . mysqli_connect_error());
}