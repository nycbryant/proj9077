<?php include("start.php"); ?>             
        <!-- content begins -->
<?php
//$item=$x->getItem('1');
$x=new Catalog();
$catlist=$x->getCatalog();
foreach($catlist as $item)
{   
    echo "id=".$item["ID"]."<br>";
    echo 
    "
    <div style='border:solid green 1px;background:#FFFFFF;float:left;width:100%'>
    <span class='left'><a href='/sony.html'>
    <img src='images/".$item["IMAGE"]."' style='width:200px' alt='example graphic' /></a></span>
<div class='title'>".$item["NAME"]."</div>
<p class='size'>
    
    ".$item["DESCRIPTION"].";
    <a href='index.php?choice=".$item["NAME"]."'>More...</a><br />
    
    
    <a href='index.php?choice=cart' style='float:right' >Goto Cart</a>
    <div style='float:right'>&nbsp; &nbsp; &nbsp;</div>
    <form style='float:right' method='get' action='index.php' style='float:left'>
    <input type='hidden' name='itemid' value='".$item["ID"]."' />
    <input class='buttonlikelink' type='submit' name='choice' value='ADD2CART' />
    </form> 
</span>
</p>
</div>
<p style='clear:both' ></p>
    ";

}
?>                    
<!-- -------------------------------------------------  -->
<div style="clear:both"></div>
</div>
<!-- content ends --> 
<?php include("finish.php"); ?> 