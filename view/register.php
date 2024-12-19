
<?php include("start.php"); ?>     
<!-- content begins -->
<div id="content" style="border:solid darkred 15px;">
    
      <div class="hh1">REGISTRATION</div>
      <p>&nbsp;</p>
      <!-- -------------------------------------------------  -->
  <form  method="get" action="index.php" style="font-size: 1.5em;">
  <div class="form_settings">
  <p><span>Username:</span><input class="contact" type="text" name="userid" /></p>
  <p><span>Password:</span><input class="contact" type="password" name="password"  /></p>
  <p><span>Password Again:</span><input class="contact" type="password" name="your_email" value="" /></p>
  <p style="padding-top: 15px"><span>&nbsp;</span>
  <input type="hidden" name="choice" value="registerx">
  <input class="submit" type="submit"  value="submit" />
    <br><span>&nbsp;</span><a style="margin-left:20px" href="index.php?choice=login">Login</a>
  </p>
  </div>
  </form>
      <!-- -------------------------------------------------  -->
      <div style="clear:both"></div>
</div>
<!-- content ends --> 
<?php include("finish.php"); ?> 