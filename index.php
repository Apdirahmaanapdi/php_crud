<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; // Lagu daray

    if(!empty($name) && !empty($email) && !empty($phone)){
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $phone);
        $stmt->execute();
        $stmt->close();
        
        header("Location: view.php"); 
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Diiwaangeli User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <form method="POST">
        <h2>Diiwaangeli User Cusub</h2>
        
        <label>Magaca:</label>
        <input type="text" name="name" placeholder="Geli magaca oo buuxa" required>
        
        <label>Email:</label>
        <input type="email" name="email" placeholder="Geli email-ka" required>

        <label>Phone Number:</label>
        <input type="tel" name="phone" placeholder="Geli lambarka taleefanka" required 
               style="width: 100%; padding: 12px; margin: 8px 0 20px 0; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box;">
        
        <button name="submit" class="btn-save">Keydi (Save)</button>
        
        <br><br>
        <div style="text-align: center;">
            <a href="view.php" style="color: #007bff; text-decoration: none;">Fiiri Liiska Hore &rarr;</a>
        </div>
    </form>
</div>

</body>
</html>