<?php

namespace TAhlin\DataFixtures\Tests\Generator;

use TAhlin\DataFixtures\Generator\Data;
use TAhlin\DataFixtures\Generator\Generator;

/**
 * Class GeneratorTest tests that data is returned by the generator
 */
class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    const SEED = 1;

    /**
     * Tests that some first names are returned
     * @group generator
     * @dataProvider getNumberOfData
     * @param $data
     */
    public function testFirstNameData($data)
    {
        $generator = new Generator(new Data());
        $firstNames = $generator->generateFirstNames($data['number']);
        $this->assertEquals($data['number'], count($firstNames));
    }
    /**
     * Tests that some last names are returned
     * @group generator
     * @dataProvider getNumberOfData
     * @param $data
     */
    public function testLastNameData($data)
    {
        $generator = new Generator(new Data());
        $lastNames = $generator->generateLastNames($data['number']);
        $this->assertEquals($data['number'], count($lastNames));
    }
    /**
     * Tests that some short texts are returned
     * @group generator
     * @dataProvider getNumberOfData
     * @param $data
     */
    public function testShortTextData($data)
    {
        $generator = new Generator(new Data());
        $shortTexts = $generator->generateShortTexts($data['number']);
        $this->assertEquals($data['number'], count($shortTexts));
    }

    // Data providers

    static function getNumberOfData()
    {
        return array(
            array('data' => array('number' => 1)),
            array('data' => array('number' => 5)),
            array('data' => array('number' => 20))
        );
    }
}