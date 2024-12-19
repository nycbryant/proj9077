
<?php
include('model/Database.php');
include('model/Catalog.php');
$x=new Catalog();
$catlist=$x->getCatalog();
foreach($catlist as $item)
{   
    echo "id=".$item["ID"]."<br>";
}
?>