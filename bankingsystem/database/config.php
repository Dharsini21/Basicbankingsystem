<?php

$host = "localhost";
$db_name = "tsf";
$username = "root";
$password = "";

//mysqli_connect(host_name,username,password,database_name)
$con = mysqli_connect("localhost","root","","tsf");

if($con->connect_error)
{
    die('connection failed'.$con->connect_error);
}else{

}

?>