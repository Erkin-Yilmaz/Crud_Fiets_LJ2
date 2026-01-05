<?php

namespace Demon\CrudFiets\Tests;

use Demon\CrudFiets\Database;
use Demon\CrudFiets\FietsController;
use PHPUnit\Framework\TestCase;

class FietsControllerTest extends TestCase
{
    private $controller;

    protected function setUp(): void
    {
        $database = new Database();
        $this->controller = new FietsController($database);
    }

    public function testGetAllFietsen(): void
    {
        $fietsen = $this->controller->getAllFietsen();
        $this->assertIsArray($fietsen, 'getAllFietsen should return an array.');
    }

    public function testCreateFiets(): void
    {
        $result = $this->controller->createFiets('Gazelle', 'Stadsfiets', 799.99);
        $this->assertTrue($result, 'createFiets should return true on success.');
    }

    public function testUpdateFiets(): void
    {
        $result = $this->controller->updateFiets(1, 'Batavus', 'Elektrische fiets', 1999.99);
        $this->assertTrue($result, 'updateFiets should return true on success.');
    }

    public function testDeleteFiets(): void
    {
        $result = $this->controller->deleteFiets(1);
        $this->assertTrue($result, 'deleteFiets should return true on success.');
    }
}