<?php
include('model/Database.php');
include('model/Login.php');
$db=new Login();

if($db->register("john","doe")) echo "john doe added to Database";
else{
    echo "ERROR: john doe Already In Use";
}

if($db->register("mary","jane")) echo "mary jane added to Database";
else{
    echo "ERROR: mary jane Already In Use";
}
?>