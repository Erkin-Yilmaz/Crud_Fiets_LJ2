<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Demon\CrudFiets\FietsController;
use Demon\CrudFiets\Database;

$controller = new FietsController(new Database());

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    $merk = trim($_POST['merk'] ?? '');
    $type = trim($_POST['type'] ?? '');
    $prijs = trim($_POST['prijs'] ?? '');

    if (!empty($merk) && !empty($type) && !empty($prijs)) {
        if ($controller->createFiets($merk, $type, $prijs)) {
            $successMessage = 'Fiets succesvol toegevoegd!';
        } else {
            $errorMessage = 'Er is een fout opgetreden bij het toevoegen van de fiets.';
        }
    } else {
        $errorMessage = 'Alle velden moeten worden ingevuld.';
    }
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voeg een fiets toe</title>
</head>
<body>
    <h1>Voeg een nieuwe fiets toe</h1>

    <?php if ($successMessage): ?>
        <script>alert('<?= $successMessage ?>'); window.location.href = 'index.php';</script>
    <?php elseif ($errorMessage): ?>
        <script>alert('<?= $errorMessage ?>');</script>
    <?php endif; ?>

    <form method="post">
        <label for="merk">Merk:</label>
        <input type="text" id="merk" name="merk" required><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br>

        <label for="prijs">Prijs:</label>
        <input type="number" id="prijs" name="prijs" required><br>

        <button type="submit">Toevoegen</button>
    </form>
    <br>
    <a href="index.php">Terug naar overzicht</a>
</body>
</html>