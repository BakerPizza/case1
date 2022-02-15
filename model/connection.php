<?php


//database connection
class Database
{

    private $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect(){

        $config = require_once 'config/config.php';

        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'] . ';charset=' . $config['charset'];


        $this->link = new PDO($dsn,$config['username'],$config['password']);

        return $this;

    }

    public function execute($sql,$param){

        $sth = $this->link->prepare($sql);

        return $sth->execute($param);
    }


    public function query($sql,$param = null){
        $sth = $this->link->prepare($sql);

        $sth->execute($param);

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false){
            return [];
        }

        return $result;
    }



}
