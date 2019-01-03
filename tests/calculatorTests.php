<?php

use Math\Calculator;

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
		$this->calculator = new Calculator();
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

}