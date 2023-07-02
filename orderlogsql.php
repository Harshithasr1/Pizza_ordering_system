<?php

$o-$_POST['order id'];

$s-$_POST['order status'];

$e-$_POST['employee id'];

$servername "localhost";

$username = "root";

$password = "";

$dbname = "pizza_corner";

// Create connection

$conn = new mysqli ($servername, $username, $password, $dbname);

// Check connection

if($conn->connect_error) {

die("Connection failed:" = . $conn->connect_error);
}

echo "Connected successfully";

$sql = "INSERT INTO 'order info' ('order id', 'order status', 'employee id') VALUES ('$o', '$s', '$e')";

if ($conn->query ($sql) === TRUE) {

echo "New record created successfully";

} 
else {

echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>