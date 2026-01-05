<?php

namespace Demon\CrudFiets;

use Demon\CrudFiets\Database;
use PDO;

class FietsController
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function getAllFietsen(): array
    {
        $stmt = $this->db->query("SELECT * FROM fietsen");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFietsById($id): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM fietsen WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function createFiets($merk, $type, $prijs): bool
    {
        $stmt = $this->db->prepare("INSERT INTO fietsen (merk, type, prijs) VALUES (:merk, :type, :prijs)");
        return $stmt->execute(['merk' => $merk, 'type' => $type, 'prijs' => $prijs]);
    }

    public function updateFiets($id, $merk, $type, $prijs): bool
    {
        $stmt = $this->db->prepare("UPDATE fietsen SET merk = :merk, type = :type, prijs = :prijs WHERE id = :id");
        return $stmt->execute(['id' => $id, 'merk' => $merk, 'type' => $type, 'prijs' => $prijs]);
    }

    public function deleteFiets($id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM fietsen WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function getData(string $table): array
    {
        $stmt = $this->db->query("SELECT * FROM $table");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRecord(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM fietsen WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }
}