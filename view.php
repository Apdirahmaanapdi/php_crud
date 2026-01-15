<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Liiska Dadka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Liiska Dadka La Diiwaangeliyay</h2>

<a href="index.php" class="btn-add">&larr; Ku noqo Diiwaangelinta</a>

<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Magaca</th>
        <th>Email</th>
        <th>Phone</th> <th>Action</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['phone']; ?></td> <td class="action-links">
            <a href="edit.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
            <a href="delete.php?id=<?= $row['id']; ?>" class="btn-delete" onclick="return confirm('Ma hubtaa?');">Delete</a>
        </td>
    </tr>
    <?php } ?>
    </table>
</div>

</body>
</html>