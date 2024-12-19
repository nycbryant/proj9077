<?php
include('model/Database.php');
include('model/Catalog.php');
$x=new Catalog();
$x->displayCatalog();
exit(0);
?>