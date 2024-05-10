<!DOCTYPE html>
<head>
    <title>Series</title>
</head>
<body>
        <h1>Séries</h1>
        <ul>
            <?php foreach ($series as $series): ?>
                <li><?= $series; ?></li>
                <?php endforeach; ?>
        </ul>
</body>