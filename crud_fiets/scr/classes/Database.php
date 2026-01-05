<?php

namespace Demon\CrudFiets;

use PDO;
use PDOException;

class Database
{
    private $host = 'localhost';
    private $dbName = 'fietsenmaker';
    private $username = 'root';
    private $password = '';
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }

    public static function sqlError(PDOException $e, string $sql, array $values): void
    {
        $err = "
        <h2>Foutmelding</h2>
        Fout op bestand: " . $e->getFile() . " op regel " . $e->getLine() . "<br>" .
        "SQL-fout: " . $e->getMessage() . "<br>" .
        "Foute SQL: " . $sql . "<br>" .
        "Opgegeven waarden: " . print_r($values, true) . "<br><br>";
        echo $err;
    }
}