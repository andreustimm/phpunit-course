<?php

namespace AndreusTimm\PHPUnit;

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
	/**
     * @dataProvider collectionAreas
     */
	public function testArea(float $area, float $expected)
	{
		$circle = new Circle();
		$result = $circle->area($area);

		$this->assertEquals($expected, round($result, 4));
	}

	public function testPerimeter()
	{
		$circle = new Circle();
		$test01 = $circle->perimeter(2);
		$test02 = $circle->perimeter(6);

		$this->assertEquals(12.566370614359172, $test01);
		$this->assertEquals(37.69911184307752, $test02);
	}

	public static function collectionAreas()
    {
        return [
            [ 2, 12.5664 ],
            [ 6, 113.0973 ],
        ];
    }
}

