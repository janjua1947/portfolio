<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "owaisdb";

$con = mysqli_connect ($host, $username, $password, $db_name);

if(! $con){

        die("database connection error" .mysqli_error());

}

else{

echo "connection stablished seccessfully";


}

?>