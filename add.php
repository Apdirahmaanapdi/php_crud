<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">
    <h2>Add New User</h2>
    <label>Name:</label>
    <input type="text" name="name" placeholder="Enter full name" required>
    
    <label>Email:</label>
    <input type="email" name="email" placeholder="Enter email address" required>
    
    <button name="submit">Save User</button>
    <br><br>
    <a href="index.php" style="display:block; text-align:center; font-weight:normal;">Cancel</a>
</form>

</body>
</html>