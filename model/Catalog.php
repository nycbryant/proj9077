<?php
class Catalog extends Database
{
    public function displayCatalog()
    {
        $list = $this->conn->query('SELECT * FROM catalog')->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($list as $item)
        {
            echo $item["ID"]." ".$item["NAME"]." ".$item["PRICE"]." ".$item["QUANTITY"]." ".$item["IMAGE"]."<br>";
        }
    }
    public function getCatalog()
    {   $cataloglist = $this->conn->query('SELECT * FROM catalog')->fetchAll(PDO::FETCH_ASSOC);
        return $cataloglist;
    }
    public function getItem($id)
    {
        $item=$this->conn->query("select * from catalog where id='$id'")->fetch(PDO::FETCH_ASSOC);
        return $item;
    } 
    public function findItem($name){} //returns id -1 if not found(optional)
}
?>