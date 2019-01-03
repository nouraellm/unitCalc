<?php
namespace Math;

/**
 * Calculator class
 */
 class Calculator 
{
	/**
     * @param number $a
     * @param number $b
     * @return $a + $b
     */
	public function addition($a,$b)
	{
		return $a + $b;
	}

	/**
     * @param number $a
     * @param number $b
     * @return $a - $b
     */
	public function substraction($a,$b)
	{
		return $a - $b;
	}

	/**
     * @param number $a
     * @param number $b
     * @return $a * $b
     */
	public function multiplication($a,$b)
	{
		return $a * $b;
	}

	/**
     * @param number $a
     * @param number $b
     * @return $a / $b
     */
	public function division($a,$b)
	{
		return $a / $b;
	}
}