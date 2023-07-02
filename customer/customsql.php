<?php

$e-$_POST['employee id'];

$n-$_POST['item name'];

$i-$_POST['item id'];

$q-$_POST['quantity'];

$p-$_POST['price'];

$d-$_POST['description'];

$servername "localhost";

$username = "root";

$password = "";

$dbname = "pizzeria";

// Create connection

$conn = new mysqli ($servername, $username, $password, $dbname);

// Check connection

if($conn->connect_error) {

die("Connection failed:" = . $conn->connect_error);
}

echo "Connected successfully";

$sql = "INSERT INTO 'non-pizza products' ('employee id', 'item name', 'item id', 'quantity', 'price', 'description') VALUES ('$e', '$n', '$i', '$q', '$p', '$d')";

if ($conn->query ($sql) === TRUE) {

echo "New record created successfully";

} 
else {

echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>