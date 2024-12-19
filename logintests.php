<?php
include('model/Database.php');
include('model/Login.php');
$db=new Login();
if($db->login("john","doe")) echo "john doe Login successful";
else{
    echo "ERROR: john doe login is incorrect";
}
if($db->login("jack","smith")) echo "jack smith Login successful";
else{
    echo "ERROR: jack smith login is incorrect";
}

if($db->login("jose","jose")) echo "jose jose Login successful";
else{
    echo "ERROR: jose jose login is incorrect";
}
?>