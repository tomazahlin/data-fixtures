<?php

namespace TAhlin\DataFixtures\Generator;

/**
 * Interface DataInterface specifies the methods that data class should implement
 */
interface DataInterface
{
    /**
     * Get an array of first names
     * @return array
     */
    public function getFirstNames();

    /**
     * Get an array of last names
     * @return array
     */
    public function getLastNames();

    /**
     * Get an array of short texts
     * @return array
     */
    public function getShortTexts();
}
