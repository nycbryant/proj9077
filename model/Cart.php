<?php

class Cart extends Database
{
        public function displayUserCart($userid)
        {
            $list = $this->conn->query("SELECT * FROM cart where userid='$userid'")->fetchAll();
            foreach($list as $citem)
            {
                echo $citem[1]." ".$citem[2]." ".$citem[3]." ".$citem[4]." ".$citem[5]."<br>";
            }
        }
        
        public function getUserCart($userid)
        {
            $list = $this->conn->query("SELECT * FROM cart where userid='$userid'")->fetchAll(PDO::FETCH_ASSOC);
            return $list;
        }
        public function insertCartItem($userid,$itemid,$qty)
        {
            $result = $this->conn->query("SELECT itemquantity FROM cart where userid='$userid' and itemid='$itemid'")->fetch();
            if($result==true)//IF TRUE ITEM ALREADY IN USER's CART SO JUST UPDATE QTY 
            { 
                $newqty=(int)$result[0]+$qty;//UPDATED QTY
                $result = $this->conn->query("update cart set itemquantity=$newqty where userid='$userid' and itemid='$itemid'");
            }
            else 
            {   //INSERT NEW CART ITEM WITH GIVE QUANTITY
                $catalog=new Catalog();
                $item = $catalog->getItem($itemid);
                $name=$item["NAME"];
                $price=$item["PRICE"];
                $image=$item["IMAGE"];

                echo "";

                //echo "XXXXXXXXXXNAME=".$name;
                //exit(0);
    $result = $this->conn->query("insert into cart values('$userid','$itemid','$name',$qty,$price,'$image')");
            }
        }
        public function delCartItem($userid,$itemid)
        {
            //delete from cart where userid='111' and itemid='3';

            $result = $this->conn->query("delete from cart where userid='$userid' and itemid='$itemid'");
        }
        public function delCart($userid)
        {
            //delete from cart where userid='111' and itemid='3';

            $result = $this->conn->query("delete from cart where userid='$userid'");
        }
        public function updateCartItemQty($userid,$itemid,$itemqty)
        {

            $result = $this->conn->query("update cart set ITEMQUANTITY=$itemqty WHERE ITEMID='$itemid' AND USERID='$userid'");
              //update cart set ORDERQUANTITY=$itemqty WHERE ITEMID='$itemid' AND USERID='$userid';
        }
}
?>
