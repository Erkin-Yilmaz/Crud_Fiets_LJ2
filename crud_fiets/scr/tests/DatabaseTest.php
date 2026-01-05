<?php

namespace Demon\CrudFiets\Tests;

use Demon\CrudFiets\Database;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testConnection(): void
    {
        $database = new Database();
        $connection = $database->getConnection();

        $this->assertNotNull($connection, 'Database connection should not be null.');
        $this->assertInstanceOf(\PDO::class, $connection, 'Connection should be an instance of PDO.');
    }
}