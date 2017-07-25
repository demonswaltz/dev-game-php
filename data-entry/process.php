<?php 
	include 'database.php'; 
	$connect=mysqli_connect($hn,$un,$pw,$db);
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>
 
<?php
 
// create a variable
$game_color=$_POST['game_color'];
$game_num=$_POST['game_num'];
$game_name=$_POST['game_name'];
$description=$_POST['description'];
$user=$_POST['user'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO `demonswa_dev-games`.`dev-main` (`id`, `color`, `number`, `game_name`, `description`, `user_id`) VALUES (NULL, '$game_color', '$game_num', '$game_name', '$description', '$user')");
header('Location: http://www.demonswaltz.com/data-entry/');    

