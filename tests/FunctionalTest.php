<?php
use PHPUnit\Framework\TestCase;

class FunctionalTest extends TestCase
{
    private static $pid;

    public static function setUpBeforeClass(): void
    {
        exec('php -S localhost:8000 -t src > /dev/null 2>&1 & echo $!', $output);
        self::$pid = (int)$output[0];
        sleep(1);
    }

    public static function tearDownAfterClass(): void
    {
        exec('kill ' . self::$pid);
    }

    public function testHomePageLoads()
    {
        $html = file_get_contents('http://localhost:8000/index.php');
        $this->assertStringContainsString('Calculadora simple', $html);
    }

    
    public function testSumWorks()
    {
        $html = file_get_contents('http://localhost:8000/index.php?a=2&b=3');
        $this->assertStringContainsString('Suma:', $html);
        $this->assertStringContainsString('5', $html);
    }
}
