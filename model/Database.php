<?php
class Database
{
    private $port;
    protected $conn;
    private $user;
    private $password;
    private $oracledb;
    public function __construct()
    {
        $this->port='7890';
        $this->user='bryant';
        $this->password='bryant';
        $this->oracledb='bryant1';
        $pdo=
        [
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_NUM
        ];
        $db = "(DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = 10.0.2.15)(PORT =$this->port))
        (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = $this->oracledb)
        )
        )" ;
        $this->conn = new PDO("oci:dbname=".$db,"$this->user", "$this->password",$pdo);
    }
    public function displaytest()
    {
        $result=$this->conn->query("select * from myinfo");
        $row=$result->fetch(PDO::FETCH_ASSOC);
        echo $row["FIRST"]." ".$row["LAST"];
    }
}
?>