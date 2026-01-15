<?php
include 'db.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; // Lagu daray

    mysqli_query($conn, "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id");
    header("Location: view.php");
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
    <label>Magaca:</label>
    <input type="text" name="name" value="<?= $row['name']; ?>" required>
    
    <label>Email:</label>
    <input type="email" name="email" value="<?= $row['email']; ?>" required>

    <label>Phone:</label>
    <input type="text" name="phone" value="<?= $row['phone']; ?>" required>
    
    <button name="update" class="btn-save">Update User</button>
    <br><br>
    <a href="view.php" style="display:block; text-align:center;">Cancel</a>
</form>

</body>
</html>