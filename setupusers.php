<?php 
	include 'userdb_login.php'; 
	$connect=mysqli_connect($hn,$un,$pw,$db);
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>
<?php
    $query = "CREATE TABLE users (
    username VARCHAR(32) NOT NULL UNIQUE,
    password VARCHAR(32) NOT NULL
   )";
   $results = $connect->query($query);
   if (!$results) die($connect->error);
   
   $salt1  ="a#mb!";
   $salt2  ="d@.a*";
   
   $username = 'kz';
   $password = 'child1';
   $token    = hash('ripemd128', "$salt1$password$salt2");
   
   add_user($connect, $username, $token);
   
   $username = 'triston';
   $password = 'summer1';
   $token    = hash('ripemd128', "$salt1$password$salt2");
   echo '$token';
   
   add_user($connect, $username, $token);
   
   $username = 'emily';
   $password = 'summer2';
   $token    = hash('ripemd128', "$salt1$password$salt2");
   
   add_user($connect, $username, $token);
   
   function add_user($connect, $un, $pw)
      {
      $query = "INSERT INTO users VALUES('$un', '$pw')";
      $result = $connect->query($query);
      if (!$result) die($connect->error);
      }
?>
   
   