<?php

namespace Pavel\Tasks\Task1;

/**
 * Class MySqlOptions
 * @package Pavel\Tasks\Task1
 */
class MySqlOptions implements ConnectionOptionsInterface
{
    /**
     * @var
     */
    protected $connectionString;

    /**
     * MySqlOptions constructor.
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