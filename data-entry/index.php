<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Dev Game Data Entry Form... of Doom</title>
</head>
<body>
 <h1>To input a game please use the below form</h1>
 <p>The steps below need to be followed exactly :-)</p>
  <ul>
  <li><b>Game Color:</b><i> Enter the color:</i> 
 	<ul>
  	<li>Colors you can use are:</li>
  		<ul>
  		<li>blue</li>
  		<li>orange</li>
  		<li>pink</li>
  		<li>purple</li>
  		<li>yellow</li>
  		<li>use "unknown" if the game has not been sorted yet</li>
  		</ul>
  	<li>all letters are <b>lowercase</b></li>	
	</ul> 
  </li>
  <li><b>Game Number:</b><i> This is the card number</i></li>
  <li>Right click on the image in the publisher file and selected "save image as", you are then going to save it childrens common files under "K:\Developmental Game Cards\images" color and number.  No spaces.  (example: blue1.png)   <b>please make sure it is saving as a png</b></li>
  <li><b>Name:</b><i> Title is copied off the top of the card</i></li>
  <li><b>Description:</b><i> Description is copied from the text box on the card</i></li>
  <li><b>User ID:</b><i> Your user id is the 4 digit pin number that you've picked</i> </li>
</ul> 
<form method="post" action="process.php">
<label>Game Color</label>
<input type="text" name="game_color" />
<br>
<label>Number</label>
<input type="text" name="game_num"  />
<br>
<label>Name</label>
<input type="text" name="game_name"  />
<br>
<label>Description</label>
<textarea rows="4" cols="50" name="description" > </textarea>
<br>
<label>User ID</label>
<input type="text" name="user"  />
<br>
<input type="submit" value="Add Game">
</form>
 
 
 
</body>
</html>