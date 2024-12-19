<?php include("start.php"); ?>

<!-- Content begins -->
<?php
// Include necessary files
include('Database.php');
include('Catalog.php');
include('Cart.php');

// Debugging output
//echo "999";
//exit(9);

// Initialize cart
$x = new Cart();
$userCart = $x->GetUserCart($_SESSION["userid"]);

// Checkout functionality
if (isset($_POST['checkout'])) {
    // Clear the user's cart
    $x->ClearUserCart($_SESSION["userid"]);
?>
    <h2 style="color: white;">THANK YOU FOR SHOPPING WITH US</h2><br>
    <a style="color: white;" href="index.php?choice=products">GO BACK SHOPPING</a>
    <div style="clear: both;"></div>
<?php
}
?>

<!-- Content ends -->

<?php include("finish.php"); ?>
