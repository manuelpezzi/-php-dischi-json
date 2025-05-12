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
    <link rel="stylesheet" href="index.css">
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
         <!-- Form per aggiungere un nuovo disco -->
         <form action="index.php" method="post">
            <h2>Aggiungi un nuovo disco</h2>
            <div>
                <label for="titolo">Titolo:</label>
                <input type="text" id="titolo" name="titolo" required>
            </div>
            <div>
                <label for="artista">Artista:</label>
                <input type="text" id="artista" name="artista" required>
            </div>
            <div>
                <label for="cover">URL Cover:</label>
                <input type="url" id="cover" name="cover" required>
            </div>
            <div>
                <label for="anno">Anno:</label>
                <input type="number" id="anno" name="anno" required>
            </div>
            <div>
                <label for="genere">Genere:</label>
                <input type="text" id="genere" name="genere" required>
            </div>
            <button type="submit">Aggiungi Disco</button>
        </form>
    </div>
</body>
</html>