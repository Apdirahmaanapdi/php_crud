<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(!empty($name) && !empty($email)){
        $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        $stmt->close();
        
        // Halkan ayuu kaga duwan yahay: Marka la save-gareeyo wuxuu aadayaa view.php
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
        <p style="text-align:center; color:#666;">Fadlan buuxi xogta hoose si aad u diiwaangeliso.</p>
        
        <label>Magaca:</label>
        <input type="text" name="name" placeholder="Geli magaca oo buuxa" required>
        
        <label>Email:</label>
        <input type="email" name="email" placeholder="Geli email-ka" required>
        
        <button name="submit" class="btn-save">Keydi (Save)</button>
        
        <br><br>
        <div style="text-align: center;">
            <a href="view.php" class="link-secondary">Fiiri Liiska Hore &rarr;</a>
        </div>
    </form>
</div>

</body>
</html>