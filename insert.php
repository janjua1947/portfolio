<?php

require("connection.php");

$name= $_POST['name'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$query= "insert into corn (cn_name, cn_email, cn_subject , cn_message) VALUE ('$name', '$email', 
'$subject' ,  '$message')" ;

$row=mysqli_query($con, $query);

if ($row>0) {

echo "Registered Successfully";
}
else{

echo "Not Resgistered";

}

?>