<?php
$conn = new mysqli("localhost", "root", "", "employee_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM employees");

echo "<h2>Employee List</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Gender</th><th>Department</th><th>Address</th><th>Created At</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['department']}</td>
            <td>{$row['address']}</td>
            <td>{$row['created_at']}</td>
        </tr>";
}

echo "</table>";
$conn->close();
?>
