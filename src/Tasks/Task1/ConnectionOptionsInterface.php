<?php

namespace Pavel\Tasks\Task1;

/**
 * Interface ConnectionOptionsInterface
 * @package Pavel\Tasks\Task1
 */
interface ConnectionOptionsInterface
{
    /**
     * @return string
     */
    public function getDsn(): string;
}