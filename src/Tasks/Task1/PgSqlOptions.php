<?php

namespace Pavel\Tasks\Task1;

/**
 * Class PgSqlOptions
 * @package Pavel\Tasks\Task1
 */
class PgSqlOptions implements ConnectionOptionsInterface
{
    /**
     * @var
     */
    protected $connectionString;

    /**
     * PgSqlOptions constructor.
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