<?php
if(!isset($_SESSION['flag'])) 
//if ($_SESSION['flag'] ==false || $_SESSION['flag']==null)
{
session_unset();
session_destroy();
setcookie(session_name(),"",time()-1,"/");
setcookie(session_name(),"",time()-1);
//header( 'Location: ./index.php?message=Invalid-Login' );;
$message="Invalid Login";
$choice="login";
}
?>