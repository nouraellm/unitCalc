<?php
namespace Math;

use WebService\registerInterface;

/**
 * Calculator class
 */
 class Calculator 
{
    /**
     * @var registerInterface
     */
    private $register;

    public function __construct(registerInterface $register){
        $this->register = $register;
    }

	/**
     * @param number $a
     * @param number $b
     * @return $a + $b
     */
	public function addition($a,$b)
	{
		$result = $a + $b;
		$this->register->send($result);
		return $result;
	}

	/**
     * @param number $a
     * @param number $b
     * @return $a - $b
     */
	public function substraction($a,$b)
	{
		$result = $a - $b;
		$this->register->send($result);
		return $result;
	}

	/**
     * @param number $a
     * @param number $b
     * @return $a * $b
     */
	public function multiplication($a,$b)
	{
		$result = $a * $b;
		$this->register->send($result);
		return $result;
	}

	/**
     * @param number $a
     * @param number $b
     * @return $a / $b
     */
	public function division($a,$b)
	{
		// Throw an exception if $b == 0
		if ($b == 0){
			throw new \InvalidArgumentException("The number cannot be divided by 0");
			}
		$result = $a / $b;
		$this->register->send($result);
		return $result;
	}
}