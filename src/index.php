<?php
require 'db.php';

$recipes = $pdo->query("SELECT * FROM recipes ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мои рецепты</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 40px auto; }
        .recipe { border: 1px solid #ddd; padding: 12px; margin: 8px 0; border-radius: 6px; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>🍲 Мои рецепты</h1>
    <?php foreach ($recipes as $r): ?>
        <div class="recipe">
            <strong><?= htmlspecialchars($r['title']) ?></strong>
            <p><?= htmlspecialchars($r['ingredients']) ?></p>
            <small>⏱ <?= (int)$r['time_minutes'] ?> мин</small>
        </div>
    <?php endforeach; ?>
</body>
</html>