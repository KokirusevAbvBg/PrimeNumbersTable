<?php

class PrimeNumbersMultiplicationTableTest extends \PHPUnit_Framework_TestCase
{

	public function testCheckPrimeWithPrime()
	{

		$primeNumbersTable = new \App\PrimeNumbersTable(10);

		$this->assertTrue($primeNumbersTable->checkPrime(7));
	}


	public function testCheckPrimeWithNonPrime()
	{

		$primeNumbersTable = new \App\PrimeNumbersTable(10);

		$this->assertFalse($primeNumbersTable->checkPrime(6));
	}


	public function testGetPrimeNumbersArraySize()
	{

		$primeNumbersTable = new \App\PrimeNumbersTable(10);
		$testArray = $primeNumbersTable->getPrimeNumbersArray();
		$this->assertEquals(count($testArray), 10);
	}


	public function testGetPrimeNumbersArrayCompareArrays()
	{

		$primeNumbersTable = new \App\PrimeNumbersTable(5);
		$testArray = $primeNumbersTable->getPrimeNumbersArray();
		$checkArray = array(2, 3, 5, 7, 11);

		$this->assertEquals($testArray, $checkArray);
	}


	public function testPrintTableWithOnePrimeNumber()
	{

		$primeNumbersTable = new \App\PrimeNumbersTable(1);
		$checkString = "      2 \n  2   4 \n";
		$this->expectOutputString($checkString);
		echo $primeNumbersTable->printTable();
	}	


	public function testPrintTableWithFivePrimeNumbers()
	{

		$primeNumbersTable = new \App\PrimeNumbersTable(5);
		$checkString = "      2   3   5   7  11 \n  2   4   6  10  14  22 \n  3   6   9  15  21  33 \n  5  10  15  25  35  55 \n  7  14  21  35  49  77 \n 11  22  33  55  77 121 \n";
		$this->expectOutputString($checkString);
		echo $primeNumbersTable->printTable();
	}	
}
