<?php

$i = $_POST['ingredientid'];

$n = $_POST['ingredientname'];

$m = $_POST['customcuts'];

$p  =$_POST['price'];

$c = $_POST['category'];

// Create connection

$conn = new mysqli ("localhost", "root", "", "pizzeria");

// Check connection

if($conn->connect_error) {

die("Connection failed:" . $conn->connect_error);
}

echo "Connected successfully";

$sql = "INSERT INTO ingredient_details(ingredientid, ingredientname, customcuts, price, category) VALUES ('$i', '$n', '$m', '$p', '$c')";

if ($conn->query($sql) === TRUE) {

echo "New record created successfully";

} 
else {

echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>