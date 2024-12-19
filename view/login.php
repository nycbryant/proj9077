
<?php include("start.php"); ?>       			

<div id="content" style="border:solid darkred 15px;">
      
        <div class="hh1">LOGIN</div>
        <p>&nbsp;</p>
        <!-- -------------------------------------------------  -->
    <form action="index.php" method="get" style="font-size: 1.5em;">
    <div class="form_settings">
    <input type="hidden" name="choice" value="loginx">
    <p><span>Username:</span><input class="contact" type="text" name="userid" /></p>
    <p><span>Password:</span><input class="contact" type="password" name="password" /></p>
    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" />
      <br><span>&nbsp;</span><a style="margin-left:20px" href="index.php?choice=register">Register</a>
    </p>
    </div>
    </form>
        
        <!-- -------------------------------------------------  -->
        <div style="clear:both"></div>  
</div>

<?php include("finish.php"); ?> 
   