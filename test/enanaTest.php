<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {

    public function testHeridaLeveVive() {
        $enana = new Enana("Gimli", 20, "viva");
        $enana->heridaLeve();
        $this->assertGreaterThan(0, $enana->puntosVida);
        $this->assertEquals("viva", $enana->situacion);
    }

    public function testHeridaLeveMuere() {
        $enana = new Enana("Gimli", 5, "viva");
        $enana->heridaLeve();
        $this->assertLessThan(0, $enana->puntosVida);
        $this->assertEquals("muerta", $enana->situacion);
    }
    

    public function testHeridaGrave() {
        $enana = new Enana("Bifur", 40, "viva");
        $enana->heridaGrave();
        $this->assertEquals(0, $enana->puntosVida);
        $this->assertEquals("limbo", $enana->situacion);
    }
    
    public function testPocimaRevive() {
        $enana = new Enana("Dwalin", -5, "muerta");
        $enana->pocima();
        $this->assertGreaterThan(0, $enana->puntosVida);
        $this->assertEquals("viva", $enana->situacion);
    }

    public function testPocimaExtraLimbo() {
        $enana = new Enana("Bombur", 0, "limbo");
        $enana->pocimaExtra();
        $this->assertEquals(50, $enana->puntosVida);
        $this->assertEquals("viva", $enana->situacion);
    }
}
