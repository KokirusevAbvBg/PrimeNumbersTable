<?php

/**
 * A class that outputs a multiplication table for N prime numbers.
 *
 * The class has several methods that allow for a number to be checked if its primed, constructs an array of N prime numbers and outputs a multiplication table for that array. Every method has been tested using the PHPUnit framework.
 *
 * PHP version 5
 *
 * @author     Nikola Rusev <kokirusev@gmail.com>
 */
 
namespace App;

class PrimeNumbersTable
{

	private $numberOfPrimes;

	function __construct($numberOfPrimes) 
	{		
		$this->numberOfPrimes = $numberOfPrimes;		
	}

	public function formatNumber($number)
	{
		return str_pad($number, 3, ' ', STR_PAD_LEFT);
	}

    public function checkPrime($number)
    {
    	if($number == 0 || $number == 1)
    	{
    		return false;
    	}

        for ($i = 2; $i < $number; $i++) 
        {
            if ($number % $i == 0) 
            {
                return false;
            }
        }
        
        return true;
    } 

    public function getPrimeNumbersArray()
    {
    	$counter = 0;
    	$number = 0;
    	$primeNumbers = array();

		while ($counter < $this->numberOfPrimes) 
		{
			if($this->checkPrime($number))
			{
				$primeNumbers[] = $number;
				$counter++;

			}    

			$number++;
		}

		return $primeNumbers;
    }
    
    public function printTable()
    {
    	
    	$primeNumbers = $this->getPrimeNumbersArray();
    	
    	echo "    ";

    	foreach ($primeNumbers as $value ) 
    	{
    		echo $this->formatNumber($value) . " ";
    	}

    	echo "\n";

    	foreach ($primeNumbers as $col ) 
    	{
    		echo $this->formatNumber($col);
    		echo " ";

    		foreach ($primeNumbers as $row ) 
    		{
    			echo $this->formatNumber($col * $row);
    			echo " ";
    		}

    		echo "\n";
    	}
    }

}

?>
