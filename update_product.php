<?php
include("connect.php"); 


$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "UPDATE products SET name='$name', 
description='$description', price=$price WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product updated successfully!";
} else {
    echo "Error updating product: " . $conn->error;
}

$conn->close();
?>
