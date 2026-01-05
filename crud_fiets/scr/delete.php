<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Demon\CrudFiets\FietsController;
use Demon\CrudFiets\Database;

$controller = new FietsController(new Database());

$id = $_GET['id'] ?? null;
if (!$id) {
    echo "<script>alert('Geen fiets ID opgegeven.'); window.location.href = 'scr/index.php';</script>";
    exit;
}

if ($controller->deleteFiets($id)) {
    echo "<script>alert('Fiets succesvol verwijderd!'); window.location.href = 'scr/index.php';</script>";
} else {
    echo "<script>alert('Er is een fout opgetreden bij het verwijderen van de fiets.'); window.location.href = 'scr/index.php';</script>";
}

?>