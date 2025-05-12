<?php
// Include server.php per ottenere i dati
$dischi = include_once 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dischi JSON</title>
</head>
<body>
<div id="app">
        <h1>Lista Dischi</h1>
        <div id="dischi-container">
            <?php if (!empty($dischi)): ?>
                <?php foreach ($dischi as $disco): ?>
                    <div class="disco">
                        <img src="<?php echo htmlspecialchars($disco['cover']); ?>" alt="<?php echo htmlspecialchars($disco['titolo']); ?>">
                        <h2><?php echo htmlspecialchars($disco['titolo']); ?></h2>
                        <p>Artista: <?php echo htmlspecialchars($disco['artista']); ?></p>
                        <p>Anno: <?php echo htmlspecialchars($disco['anno']); ?></p>
                        <p>Genere: <?php echo htmlspecialchars($disco['genere']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nessun disco disponibile.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>