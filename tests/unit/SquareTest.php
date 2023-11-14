<?php

namespace AndreusTimm\PHPUnit;

use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
	public function testArea()
	{
		$square = new Square();
		$test01 = $square->area(2);
		$test02 = $square->area(6);

		$this->assertEquals(4, $test01);
		$this->assertEquals(36, $test02);
	}

	public function testPerimeter()
	{
		$square = new Square();
		$test01 = $square->perimeter(2);
		$test02 = $square->perimeter(6);

		$this->assertEquals(8, $test01);
		$this->assertEquals(24, $test02);
	}

	public function testDiagonal()
	{
		$square = new Square();
		$test01 = $square->diagonal(3);
		$test02 = $square->diagonal(6);

		$this->assertEquals(4.24, round($test01, 2));
		$this->assertEquals(8.49, round($test02, 2));
	}
}
