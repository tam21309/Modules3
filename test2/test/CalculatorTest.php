<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use App\Calculator;
class CalculatorTest extends TestCase {
    public function testCong1(){
        $Calculator = new Calculator();
        $output = $Calculator->cong(2,3);
        $expected   = 5;
        $this->assertEquals($output,$expected);
    }
    public function testCong2(){
        $Calculator = new Calculator();
        $output = $Calculator->cong(100,1000);
        $expected   = 1100;
        $this->assertEquals($output,$expected);
    }
}