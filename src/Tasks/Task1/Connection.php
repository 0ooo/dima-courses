<?php

namespace Pavel\Tasks\Task1;

/**
 * Class Connection
 * @package Pavel\Tasks\Task1
 */
class Connection
{
    /**
     * @var
     */
    protected $options;

    /**
     * Connection constructor.
     * @param ConnectionOptionsInterface $options
     */
    public function __construct(ConnectionOptionsInterface $options)
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->options->getDsn();
    }
}