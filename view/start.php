<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MyFreeCssTemplates.com free CSS template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="view/css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="view/nivo-slider.css" type="text/css" media="screen" />
<style>
    .title
    {
        color:white;
        margin-left:10px;
        background-color:darkred;
        font-family: Arial,Helvetica,sans-serif;
        font-size: small;
        /*margin-left: .5em;*/
        /*margin-bottom: .1em;*/
        float: right;
       width: 30%;
       font-weight:bolder;
       font-size: 1.5em;
       font-variant: small-caps;
       text-align:right;
       /*background:url(images/h1.jpg);*/
       padding:20px;
    }
    .left
    {
        float: left;
        width: auto;
        margin-right: 10px;
    }
    /*
    #content
    { 
      text-align: left;
      width: 550px;
      padding: 0;
    }
    */
    .size
    {
        text-align: justify;
        font: 1.7em sans-serif;
        /*color: darkred;*/
        margin: 0px;
        padding: 5px
    }
    </style>
    <style type="text/css">
	.form_settings
{ margin: 15px 0 0 0;}

.form_settings p
{ padding: 0 0 0px 0;}

.form_settings span
{ float: left; 
  width: 200px; 
  text-align: left;}
  
.form_settings input, .form_settings textarea
{ padding: 5px; 
  width: 299px; 
  font: 100% arial; 
  border: 1px solid #E5E5DB; 
  background: #FFF; 
  color: #47433F;}
  
.form_settings .submit
{ font: 100% arial; 
  border: 2px; 
  width: 99px; 
  margin: 1 1 1 1;  
  height: 33px;
  padding: 2px 0 3px 0;
  cursor: pointer; 
  background: #3B3B3B; 
  color: #FFF;}

.form_settings textarea, .form_settings select
{ font: 100% arial; 
  width: 299px;}

.form_settings select
{ width: 310px;}

.form_settings .checkbox
{ margin: 4px 0; 
  padding: 0; 
  width: 14px;
  border: 0;
  background: none;}

  .form_settings input[type="text"],input[type="password"]{border:solid darkred 1px;margin-bottom:2px}

  .form_settings span{font-weight: bolder;color:darkred}
</style>
<style>
table.cart{float:left;border:solid 2px red;color:white;}
.cart img{width:100px}
.cart td{border:solid .5px white}
.cart input[type="text"]{width:20;}
.cart input[type="submit"]{border:solid black 2px}
</style>
</head>
<body>

<div id="main">
<!-- header begins -->
<div id="header">
	<div id="buttons">
<?php
    $linktext="Login";
    $linkurl="/";
    if(isset($_SESSION["flag"])) 
    {
      //echo "222222222222FLAG=".$_SESSION["flag"];
      //exit(0);
      if($_SESSION["flag"]=="1") 
      {
      $linktext="Logoff";
      $linkurl="logoff";
      }
    }
?>
      <?php
         echo "<a href='index.php?choice=$linkurl' class='but' title=''>$linktext</a>";
      ?>
      <div class="but_razd"></div>
      <a href="index.php?choice=products" class="but" title="">Products</a><div class="but_razd"></div>
      <a href="index.php?choice=about"  class="but" title="">About us</a><div class="but_razd"></div>
      <a href="index.php?choice=contact" class="but" title="">Contact us</a>
    </div>
	<div id="logo">
    	<b><a href="#">BMCC ELECTRONICS</a></b>
      	<h2><a href="#"><small>Small Company Slogan Goes Here</small></a></h2>
    </div>
   
</div>
<!-- header ends -->
    <div class="top">
    	
		<div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="images/top.jpg" alt="" />
                <img src="images/top2.jpg" alt=""/>
                <img src="images/top3.jpg" alt="" />
            </div>
			        
        </div>

<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
		
    </div>
    <div style="height:10px"></div>
        <!-- content begins -->