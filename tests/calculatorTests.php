<?php

use Math\Calculator;
use WebService\registerMock;

/**
 * Registering composer
 */
require_once __DIR__ . "/../vendor/autoload.php";

/**
 * Tests Class
 */
class CalculatorTests extends \PHPUnit\Framework\TestCase
{
	
	/**
	 * @var \Math\Calculator
	 */
	private $calculator;

	/**
	 * Instanciation on each test
	 */
	public function setUp()
	{
		$this->calculator = new Calculator(new registerMock());
	}

	/**
	 * @test
	 */
	public function addition_test()
	{
		$anticipate = 25;
		$geniune = $this->calculator->addition(18,7);
		$this->assertEquals($anticipate, $geniune);
	}

	/**
	 * @test
	 */
	public function substraction_test()
	{
		$anticipate = 11;
		$geniune = $this->calculator->substraction(18,7);
		$this->assertEquals($anticipate, $geniune);
	}

	/**
	 * @test
	 */
	public function multiplication_test()
	{
		$anticipate = 50;
		$geniune = $this->calculator->multiplication(10,5);
		$this->assertEquals($anticipate, $geniune);
	}

	/**
	 * @test
	 */
	public function division_test()
	{
		$anticipate = 2;
		$geniune = $this->calculator->division(10,5);
		$this->assertEquals($anticipate, $geniune);
	}

	/**
	 * @test
	 * @expectedException \InvalidArgumentException
	 */
	public function dividedByZero_test_exception()
	{
        $this->calculator->division(13, 0);
    }

}