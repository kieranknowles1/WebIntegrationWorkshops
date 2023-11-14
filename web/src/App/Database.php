<?php

namespace App;

/**
 * Interface to the database
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in writing this code
 */
class Database
{
    private string $file;
    private \PDO $connection;

    public function __construct(string $file)
    {
        $this->file = $file;
        $this->connect();
    }

    private function connect()
    {
        $this->connection = new \PDO("sqlite:" . $this->file);
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * I don't like it, but PHP doesn't support typed arrays
     * @param string[] $params
     */
    public function executeSql(string $query, $params = []): array
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}
