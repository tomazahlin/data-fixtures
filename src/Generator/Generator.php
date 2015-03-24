<?php

namespace TAhlin\DataFixtures\Generator;

/**
 * Class Generator should be used for generation of various properties for any data fixtures, when returned data must be deterministic
 */
class Generator implements GeneratorInterface
{
    const LOW_RAND_LIMIT  = 20;
    const HIGH_RAND_LIMIT = 50;

    /**
     * @var integer
     */
    private $seed;

    /**
     * @var DataInterface
     */
    private $data;

    /**
     * @param DataInterface $data
     */
    public function __construct(DataInterface $data)
    {
        $this->seed = 1000000;
        $this->data = $data;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function generateFirstNames($limit)
    {
        return $this->generateFrom($this->data->getFirstNames(), $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function generateLastNames($limit)
    {
        return $this->generateFrom($this->data->getLastNames(), $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function generateShortTexts($limit)
    {
        return $this->generateFrom($this->data->getShortTexts(), $limit);
    }

    /**
     * Generates an array of data, limited to the number of items. Source data is from given array of data, which can also be smaller in size.
     * @param array $data
     * @param int $limit
     * @return array
     */
    private function generateFrom(array $data, $limit)
    {
        // Every time the method is called, the seed gets incremented, so it doesn't stay the same
        $this->seed++;

        $numOfData = count($data);

        $n = $this->getRand($this->seed);
        $m = (int)(($numOfData/3)*2);

        $d = [];

        for ($i = 0; $i < $limit;) {
            if ($m < $numOfData) {
                $d[] = $data[$m];
                $m+=($m+$n+$i); // Data will be chosen across whole array
                $i++;
            }
            else {
                $m -= $numOfData;
            }
        }
        return $d;
    }

    /**
     * @param $seed
     * @return int
     */
    private function getRand($seed)
    {
        srand($seed);
        $rand = rand(self::LOW_RAND_LIMIT, self::HIGH_RAND_LIMIT);
        return $rand;
    }
}
