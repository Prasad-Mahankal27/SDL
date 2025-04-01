<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
</head>
<body>
    <h2>Employee Registration</h2>
    <form action="insert.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Phone:</label>
        <input type="text" name="phone" required><br>

        <label>Gender:</label>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>

        <label>Department:</label>
        <input type="text" name="department" required><br>

        <label>Address:</label>
        <textarea name="address"></textarea><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
