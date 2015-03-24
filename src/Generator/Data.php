<?php

namespace TAhlin\DataFixtures\Generator;

/**
 * Class Data contains different sets of data which can be used for generation
 */
class Data implements DataInterface
{
    /**
     * A set of first names
     * @var array
     */
    protected $firstNames = array(
        'Aaron', 'Baron', 'Hank', 'Neil', 'Olaf', 'Sam', 'Victor', 'Zack',
        'Aaliyah', 'Earnestine', 'Ebba', 'Madaline', 'Vanessa', 'Yolanda', 'Zoey'
    );

    /**
     * A set of last names
     * @var array
     */
    protected $lastNames = array(
        'Altenwerth', 'Anderson', 'Bailey', 'Cassin', 'Daugherty', 'Erdman', 'Kertzmann', 'Kessler', 'Olson', 'Reynolds', 'Schneider', 'Weimann', 'Ziemann'
    );

    /**
     * A set of short text strings
     * @var array
     */
    protected $shortTexts = array(
        'Consulting', 'Repair & maintenance', 'Construction', 'Education', 'Entertainment', 'Gardening', 'Personal grooming', 'Health care', 'Data processing', 'Interpreting'
    );

    /**
     * Get array of first names
     * @return array
     */
    public function getFirstNames()
    {
        return $this->firstNames;
    }

    /**
     * Get array of first names
     * @return array
     */
    public function getLastNames()
    {
        return $this->lastNames;
    }

    /**
     * Get array of short text strings
     * @return array
     */
    public function getShortTexts()
    {
        return $this->shortTexts;
    }
}
