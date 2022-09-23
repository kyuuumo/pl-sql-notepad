<?php
$serevername="localhost:3309";
$username="root";
$password="";
$dbase="td";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect($serevername,$username,$password,$dbase);
    if(!$conn){
        die("connection failed!" . mysqli_connect_error());
    }


?>