<?php

namespace Tests\Integration\Bootstrap\Database;


class DefaultTester extends AbstractTester
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    /**
     * Returns the test database connection.
     *
     * @return Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }
}