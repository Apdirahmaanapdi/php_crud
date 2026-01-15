<?php
include 'db.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">
    <h2>Edit User</h2>
    <label>Name:</label>
    <input type="text" name="name" value="<?= $row['name']; ?>" required>
    
    <label>Email:</label>
    <input type="email" name="email" value="<?= $row['email']; ?>" required>
    
    <button name="update">Update User</button>
    <br><br>
    <a href="index.php" style="display:block; text-align:center; font-weight:normal;">Cancel</a>
</form>

</body>
</html>