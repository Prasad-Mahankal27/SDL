<?php
$conn = new mysqli("localhost", "root", "", "employee_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $address = $_POST['address'];

    $sql = "INSERT INTO employees (name, email, phone, gender, department, address) 
            VALUES ('$name', '$email', '$phone', '$gender', '$department', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
