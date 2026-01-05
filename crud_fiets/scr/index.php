<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    // functie: Programma CRUD fietsen
    // auteur: Vul hier je naam in   

    // Initialisatie
    
    require_once __DIR__ . '/../vendor/autoload.php';

    use Demon\CrudFiets\FietsController;
    use Demon\CrudFiets\Database;
    use Demon\CrudFiets\TableRenderer;

    $controller = new FietsController(new Database());

    // Main
    $result = $controller->getAllFietsen();
    TableRenderer::printCrudTabel($result);
    ?>

    <br>
    <form method="post" action="add_fiets.php">
        <button type="submit">Voeg een fiets toe</button>
    </form>

</body>
</html>



