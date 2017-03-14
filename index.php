<html>
 <head>
 <meta charset="UTF-8" />
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 </head>

<?php
if (isset($_POST['turnOn']))
 {
exec("sudo python /home/pi/homeauto1/on.py; sudo streamer -f jpeg -o /var/www/html/webcam.jpeg");
}
if (isset($_POST['turnOff']))
{
exec("sudo python /home/pi/homeauto1/off.py; sudo streamer -f jpeg -o /var/www/html/webcam.jpeg");
}
if (isset($_POST['captureImage']))
{
exec("sudo streamer -f jpeg -o /var/www/html/webcam.jpeg");
}
?>


<div class="container">

<div class="jumbotron">
<h1>Chandler's Lamp</h1> 
</div>


<form method="post">
<button class="btn btn-primary btn-lg btn-block" name="turnOn">On</button>&nbsp;
<button class="btn btn-primary btn-lg btn-block" name="turnOff">Off</button><br>

<br>

<div class="row">
 <div class="col-sm-6 col-md-4">
  <div class="thumbnail">

   <img src="webcam.jpeg" alt="Creeper...">
   <br>
   <form method="post">
   <button class="btn btn-wrn btn-block" name="captureImage">Refresh Image</btn>
   </form>

  </div>
 </div>
</div>



</div>



</form>
</html>
