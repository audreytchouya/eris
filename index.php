<?php
include 'db-config.php';

$stmt = $pdo->query('SELECT name FROM users');
$users = [];
while ($row = $stmt->fetch()) {
    $users[] = $row['name'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>List of Users</h1>
    <ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo htmlspecialchars($user, ENT_QUOTES, 'UTF-8'); ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
