<?php

$f-$_POST['firstname'];

$l-$_POST['lastname'];

$g-$_POST['gender'];

$e-$_POST['email'];

$n-$_POST['phone'];

$u-$_POST['username'];

$p-$_POST['password'];

$a-$_POST['address'];

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

$sql = "INSERT INTO 'admin/employee info' ('firstname', 'lastname', 'gender', 'email', 'phone', 'username', 'password', 'address') VALUES ('$f', '$l', '$g', '$e', '$n', '$u', '$p', '$a')";

if ($conn->query ($sql) === TRUE) {

echo "New record created successfully";

} 
else {

echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>