<?php

namespace Tests\Unit;

use Pavel\Tasks\Task1\Connection;
use Pavel\Tasks\Task1\MySqlOptions;
use Pavel\Tasks\Task1\PgSqlOptions;
use Pavel\Tasks\Task1\SqlLiteOptions;
use Tests\TestCase;

class Task1Test extends TestCase
{
    /** @test */
    public function test_mysql()
    {
        // http://php.net/manual/ru/ref.pdo-mysql.connection.php
        $connection = new Connection(new MySqlOptions('mysql:host=localhost;port=3306;dbname=test'));
        $this->assertEquals('mysql:host=localhost;port=3306;dbname=test', $connection);
    }

    /** @test */
    public function test_sqlite()
    {
        // http://php.net/manual/ru/ref.pdo-sqlite.connection.php
        $connection = new Connection(new SqlLiteOptions('sqlite::memory:'));
        $this->assertEquals('sqlite::memory:', $connection);
    }

    /** @test */
    public function test_pgsql()
    {
        // http://php.net/manual/ru/ref.pdo-pgsql.connection.php
        $connection = new Connection(new PgSqlOptions('pgsql:host=localhost;post=5432;dbname=test;user=postgres'));
        $this->assertEquals('pgsql:host=localhost;post=5432;dbname=test;user=postgres', $connection);
    }
}