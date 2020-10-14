<?php

namespace myLib;

//'mysql:host=localhost;dbname=gb;charset=utf8', 'root', ''
class DB
{
    private $connection;
    private $fetchMode;

    public function __construct($fetchMode)
    {
        $this->fetchMode = $fetchMode;

        include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
        $this->connection = new \PDO('mysql:host=' . Config::get('db_host') . ';dbname=' . Config::get('db_name') . ';charset=' . Config::get('db_charset'), Config::get('db_user'), Config::get('db_pass'));

    }

    public function execute($sql, &$stm = '', $params = [])
    {
        $stm = $this->connection->prepare($sql);
        return $stm->execute($params);
    }

    public function fetch($query, $params = [])
    {
        $this->execute($query, $stm, $params);
        return $stm->fetch($this->fetchMode);
    }

    public function fetchAll($query, $params = [])
    {
        $this->execute($query, $stm, $params);
        return $stm->fetchAll($this->fetchMode);
    }
}
