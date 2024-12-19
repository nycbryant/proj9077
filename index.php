<?php
include('model/Database.php');
include('model/Login.php');
include('model/Catalog.php');
include('model/Cart.php');
session_start();
//include('library.php');
//$choice=readValue('choice');

if(isset($_GET["choice"])) $choice=$_GET["choice"];
else $choice=null;

echo "CHOICE=".$choice;

if($choice=="registerx")
{
    $userid=$_GET['userid'];
    $password=$_GET['password'];
    echo "userid=$userid password=$password";

    $db=new Login();
    if($db->register($userid,$password)) header("Location: index.php");
    else
    {
        $message="ERROR: Userid Already In Use";
        $choice="register";
    }
}
else if($choice=="loginx")
{
    $userid=$_GET['userid'];
    $password=$_GET['password'];
    echo "userid=$userid password=$password";

    $db=new Login();
    if($db->login($userid,$password)) 
    {
        $_SESSION['username']=$userid;
        $_SESSION['password']=$password;
        $_SESSION['flag']="1";
        header("Location: index.php?choice=products");
    }
    else
    {
        $message="ERROR: Userid Already In Use";
        $choice="register";
    }
}
else if($choice=="logoff")
{
    if($_SESSION["flag"] =="1")
    {
        session_destroy();
        session_unset();
        setcookie(session_name(),"",time()-1,"/");
        //$choice="login";
        header("Location:index.php?choice=login");
    }
}
else if($choice=="ADD2CART")
{
    $cart=new Cart();
    $userid=$_SESSION['username'];
    $code=$_GET["itemid"];
    $cart->insertCartItem("$userid","$code",1);
    $choice="products";
}
else if($choice=='UPDATE')
{
	$userid=$_SESSION["username"];
	$code=$_GET["itemid"];
	$qty=$_GET["quantity"];
	//$name=$_GET["name"];
	//$price=$_GET["price"];
	$cart=new Cart();
	//echo "USERId=".$userid." CODE=".$code;
    $cart->updateCartItemQty("$userid","$code",$qty);
	//$cart->modifyCartItemQuantity("$userid","$code",$qty);
	$choice='cart';
}
else if($choice=='DELITEM')
{
	$userid=$_SESSION['username'];
	$code=$_GET['itemid'];
	$cart=new Cart();
	//echo "USERID=".$userid." "."ITEMID=".$code;
	$cart->delCartItem("$userid","$code");
	$choice='cart';
}
else if($choice=='checkout')
{
	$userid=$_SESSION['username'];
	$cart=new Cart();
	//echo "USERID=".$userid." "."ITEMID=".$code;
	$cart->delCart("$userid");
	$choice='checkout';
}






if($choice=="/")
{
    include("view/login.php");
}
else
if($choice==null)
{
    include("view/login.php");
}
else if($choice=="login")
{
    include("view/login.php");
}
else if($choice=="HP Omen 15")
{
    include_once('checker.php');

    include("view/omen.php");
}
else if($choice=="MACBOOK AIR M2")
{
    include_once('checker.php');

    include("view/macbookair.php");
}

else if($choice=="DELL XPS 13")
{
    include_once('checker.php');

    include("view/dellxps.php");
}
else if($choice=="register")
{
    include("view/register.php");
}

else if($choice=="products")
{
    include_once('checker.php');

    include("view/products.php");
}
else if($choice=="cart")
{
    include_once('checker.php');

    include("view/cart.php");
}

else if($choice=="checkout")
{
    // Include the "Thank You" page after checkout
    include("view/thanku.php");
}

?>