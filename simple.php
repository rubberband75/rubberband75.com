<html>
<head>
<meta charset="UTF-8" />

</head>

<?php
if (isset($_POST['turnOn']))
{
exec("sudo python /home/pi/homeauto1/on.py");
}
if (isset($_POST['turnOff']))
{
exec("sudo python /home/pi/homeauto1/off.py");
}
?>

<form method="post">
<button name="turnOn">On</button>&nbsp;
<button name="turnOff">Off</button><br>

</form>
</html>
