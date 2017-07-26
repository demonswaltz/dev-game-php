<?php
  session_start();

  if (isset($_SESSION['username']))
  {
    
  
   $query = "SELECT * FROM `dev-main` ORDER BY color, number";
    $results = $connect->query($query);
    if (!$results) die($connect->error);
    
    $rows = $results->num_rows;
    for ($j = 0 ; $j < $rows ; ++$j)
       {
          $results->data_seek($j);
          $row = $results->fetch_array(MYSQLI_ASSOC);
          $color = $row['color'];
          $number = $row['number'];
          $title = $row['game_name'];
          $description = $row['description'];
          echo '<div class="row"><div class="col-4"><img width="100%" src="images/'.$color.$number.'.png"></div>';
          echo '<div class="col-1"></div>';
          echo '<div class="col-5"><h1>'.$title.'</h1><br>';
          echo '<p>'.$description.'</p></div>';
          echo '<div class="col-3"><button class="'.$color.'-button">'.$number.'</button></div></div>';
       }
  }
  
  else echo "Please <a href='authtest.php'>click here</a> to log in.";

  function destroy_session_and_data()
  {
    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
  }
?>
