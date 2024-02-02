<?php

include 'db_config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['phone'];


$sql = "INSERT INTO users (name, email, password, address, phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
