
<?php
include("start.php");
?>
<!-- content begins -->
<?php
// Include required files
// include('Database.php');
// include('Catalog.php');
// include('Cart.php');

$x = new Cart;
$Sucart = $x->getUserCart($_SESSION['username']);

// Check if the cart is empty
if ($Sucart == false) {
    echo "<div style='color:white; text-align:center; margin-top:20px; font-size:20px;'>
        CART EMPTY<br>
        <a href='index.php?choice=products' style='color:yellow; text-decoration:none; font-weight:bold;'>GO BACK TO SHOPPING</a>
    </div>";
} else {
    echo "<table class='cart'>
        <tr>
            <th colspan='2'>NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>SUBTOTAL</th>
        </tr>";
    $total = 0; // Initialize total amount
    foreach ($Sucart as $item) {
        $subtotal = (float)$item["ITEMPRICE"] * (float)$item["ITEMQUANTITY"];
        $total += $subtotal; // Update total amount
        echo "<tr>
            <td style='text-align:left'><img src='images/" . $item["ITEMIMAGE"] . "' style='width:50px'/></td>
            <td style='text-align:left'>" . $item['ITEMNAME'] . "</td>
            <td style='text-align:right'>
                <form action='index.php' method='GET' style='float:left'>
                    <input type='text' name='quantity' value='" . $item["ITEMQUANTITY"] . "' style='width:25px'/>
                    <input type='hidden' name='itemid' value='" . $item["ITEMID"] . "'/>
                    
                    <input type='hidden' name='choice' value='UPDATE'/>
                    <input type='submit' value='UPDATE'/>
                </form>
                <a style='float:left' href='index.php?choice=DELITEM&itemid=" . $item["ITEMID"] . "'>
                    <img src='images/x.png' style='width:20px'/>
                </a>
            </td>
            <td style='text-align:right'>$" . $item["ITEMPRICE"] . "</td>
            <td style='text-align:right'>$" . $subtotal . "</td>
        </tr>";
    }
    echo "<tr>
        <td colspan='5' style='text-align:center;'>
            <a href='index.php?choice=checkout' style='color:yellow; text-decoration:none; font-weight:bold;'>CHECKOUT</a>
        </td>
    </tr>";
    echo "</table>";

   
}
?>
<!-- content ends -->
<?php include("finish.php"); ?>