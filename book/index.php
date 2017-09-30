<?php
  session_start();

  if (isset($_SESSION['username']))
	{
?>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>The Little Book that Could</title>
</head>
<body>
 
<form method="post" action="test.php">
<label>First Color</label>
<input type="text" name="firstColor" />
<label>First Number</label>
<input type="text" name="firstNumber" />
<br>
<br>
<label>Last Color</label>
<input type="text" name="lastColor" />
<label>Last Number</label>
<input type="text" name="lastNumber" />
<br>

<input type="submit" value="Add Game">
</form>

<?php 		
       }
  else echo "Please <a href='../home/index.php'>click here</a> to log in.";
?>
 
 
 
</body>
</html>
