
<?php
include("connect.php"); 


$id = $_POST['id'];

$sql = "DELETE FROM products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully!";
} else {
    echo "Error deleting product: " . $conn->error;
}

$conn->close();
?>