<?php session_start();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title> Calendar</title>
  <script type="text/javascript" src="jquery-3.0.0.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" media="screen" href="calendar.css">
</head>
<body>
<?php
include("../controllers/calendar_show.php");

?>

<form method="POST" action="../controllers/dbcrud.php">
<input type="submit" name="logout" value="logout"/>
</form>
<form method="POST" action="newaction.php">
<input type="submit" name="action" value="action"/>
</form>

</body>

</html>