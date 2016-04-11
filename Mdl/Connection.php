<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/freetech_ccenter/qPerformance/config.php';

class Connection {

     private $link = "";
     private $user = "";
     private $pass = "";
     private $socket = "";
     private $dbname = "";

    function __construct($db) {
        
    $this->link= "";
    $this->user = DBUSER;
    $this->pass = DBPASS;
    $this->socket = DBHOST;
    $this->dbname = $db;
    }

    public function SetLink($value) {

        $this->link = $value;
    }

    public function GetLink() {

        return $this->link;
    }

    public function SetUser($value) {

        $this->user = $value;
    }

    public function GetUser() {

        return $this->user;
    }

    public function SetPass($value) {

        $this->pass = $value;
    }

    public function GetPass() {

        return $this->pass;
    }

    public function SetSocket($value) {

        $this->Socket = $value;
    }

    public function GetSocket() {

        return $this->Socket;
    }

    public function SetDbName($value) {

        $this->dbname = $value;
    }

    public function GetDbName() {

        return $this->dbname;
    }

    public function Connect_close($enlace) {

        mysql_close($enlace);
    }

    public function Connect() {

        $this->link = mysql_connect($this->socket, $this->user, $this->pass);
        mysql_select_db($this->dbname);
        return $this->link;
    }

}
?>
