<?php

namespace Pavel\Tasks\Task1;

/**
 * Class SqlLiteOptions
 * @package Pavel\Tasks\Task1
 */
class SqlLiteOptions implements ConnectionOptionsInterface
{
    /**
     * @var
     */
    protected $connectionString;

    /**
     * SqlLiteOptions constructor.
     * @param string $connectionString
     */
    public function __construct(string $connectionString)
    {
        $this->connectionString = $connectionString;
    }

    /**
     * @return string
     */
    public function getDsn(): string
    {
        return $this->connectionString;
    }
}