<?php

use PHPUnit\Framework\TestCase;

    class BasicOperationsTest extends TestCase{
        private $calc;
        
        public function setUp():void{
            $this->calc=new Calculadora();
        }

        public function testSumWithTwoNumbers(){
            $this->assertEquals(63,$this->calc->sum(50,13));
        }

        public function testDivWithTwoPositiveNumbers(){
            $numerator=30;
            $denominator=2;
            $expectedResult=15;
            $this->assertEquals($expectedResult,$this->calc->divide($numerator,$denominator));
        }

        public function testDivWithTwoNegativeNumbers(){
            $numerator=-50;
            $denominator=-5;
            $expectedResult=10;
            $this->assertEquals($expectedResult,$this->calc->divide($numerator,$denominator));
        }

        public function testDivPosNumeratorAndNegDenominator(){
            $numerator=64;
            $denominator=-8;
            $expectedResult=-8;
            $this->assertEquals($expectedResult,$this->calc->divide($numerator,$denominator));
        }

        public function testDivNegNumeratorAndPosDenominator(){
            $numerator=-54;
            $denominator=6;
            $expectedResult=-9;
            $this->assertEquals($expectedResult,$this->calc->divide($numerator,$denominator));
        }

        public function testDivWithNumeratorEqualsZero(){
            $numerator=0;
            $denominator=6;
            $expectedResult=0;
            $this->assertEquals($expectedResult,$this->calc->divide($numerator,$denominator));
        }

        public function testDivWithSameValueNumbers(){
            $numerator=500;
            $denominator=500;
            $expectedResult=1;
            $this->assertTrue($this->calc->divide($numerator,$denominator)==1);
        }

        public function testDivWithGreaterNumerator(){
            $numerator=70;
            $denominator=7;
            $this->assertGreaterThanOrEqual(1,$this->calc->divide($numerator,$denominator));
        }

        public function testDivWithGreaterDenominator(){
            $numerator=5;
            $denominator=65;
            $this->assertLessThan(1,$this->calc->divide($numerator,$denominator));
        }


        public function testDivWithNullValues(){
            $this->expectException(InvalidArgumentException::class);
            $this->calc->divide(NULL, NULL);
        }

        public function testDivWithCharacters(){
            $numerator="a";
            $denominator="b";
            $this->expectException(InvalidArgumentException::class);
            $this->calc->divide($numerator, $denominator);

        }

        public function testDivWithDenominatorEqualsZero(){
            $numerator=874;
            $denominator=0;
            $this->expectException(DivisionByZeroError::class);
            $this->calc->divide($numerator,$denominator);
        }

    }


?>