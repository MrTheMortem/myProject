<?php namespace myLib;


class DB
{
    private $connect;

    public function __construct()
    {
        include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
        $this->connect = new \PDO('mysql:host=' . Config::get('db_host') . ';dbname=' . Config::get('db_name') . ';charset='. Config::get('charset'), Config::get('db_user'), Config::get('db_pass') );
        return $this;
    }

    public function execute($sql)
    {
        $stm = $this->connect->prepare($sql);
        return $stm->execute();
    }

    public function query($sql)
    {
        $stm = $this->connect->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
        if($result===false)
        {
            return [];
        }
        return $result;
    }
}
