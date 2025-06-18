<?php

use App\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase {
    public function testSuma() {
        $calc = new Calculadora();
        $this->assertEquals(5, $calc->suma(3, 2));
        $this->assertGreaterThan(5, $calc->suma(4, 2));
        $this->assertNotEquals(5, $calc->suma(8, 2));
        $this->assertNotNull($calc->suma(8, 2));
    }
    public function testResta() {
        $calc = new Calculadora();
        $this->assertEquals(1, $calc->resta(3, 2));
        $this->assertGreaterThan(1, $calc->resta(4, 2));
        $this->assertNotEquals(5, $calc->resta(25, 2));
        $this->assertNotNull($calc->resta(8, 2));

    }
    public function testMultiplicacion() {
        $calc = new Calculadora();
        $this->assertEquals(6, $calc->multiplicacion(3, 2));
        $this->assertGreaterThan(1, $calc->multiplicacion(4, 2));
        $this->assertNotEquals(5, $calc->multiplicacion(25, 2));
        $this->assertNotNull($calc->multiplicacion(8, 2));
        
    }
    public function testDivision() {
        $calc = new Calculadora();
        $this->assertEquals(2, $calc->division(4, 2));
        $this->assertGreaterThan(1, $calc->division(4, 2));
        $this->assertNotEquals(5, $calc->division(25, 2));
        $this->assertNotNull($calc->division(8, 2));
        
    }
}