<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>USER</h1>
    <?php foreach ($users as $user): ?>
        <div>
            <h2><?= htmlspecialchars($user->name) ?></h2>
            <p><?= htmlspecialchars($user->email) ?></p>
            <!-- <p>Status: <?= $user->completed ? 'Completed' : 'Pending' ?></p> -->
        </div>
    <?php endforeach; ?>
</body>
</html>