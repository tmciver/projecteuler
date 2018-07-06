<?php

use PHPUnit\Framework\TestCase;
use TMciver\Functional\LinkedList\LinkedListFactory;

final class Euler1Test extends TestCase {

  public function testProblemOne() {

    $multipleOfThreeOrFive = function (int $i) {
      return ($i % 3 == 0) || ($i % 5 == 0);
    };

    $add = function (int $x, int $y) {
      return $x + $y;
    };
    
    $factory = new LinkedListFactory();
    $result = $factory->range(1, 999)
            ->filter($multipleOfThreeOrFive)
            ->foldLeft(0, $add);

    $expected = 233168;

    $this->assertEquals($expected, $result);
  }
}
