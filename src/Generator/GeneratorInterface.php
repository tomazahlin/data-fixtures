<?php

namespace TAhlin\DataFixtures\Generator;

/**
 * Interface GeneratorInterface specifies the methods that generators of the data should implement
 */
interface GeneratorInterface
{
    /**
     * Generate an array of first names
     * @param $limit
     * @return array
     */
    public function generateFirstNames($limit);

    /**
     * Generate an array of last names
     * @param $limit
     * @return array
     */
    public function generateLastNames($limit);

    /**
     * Generate an array of short texts
     * @param $limit
     * @return array
     */
    public function generateShortTexts($limit);
}
