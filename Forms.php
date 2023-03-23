<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MyProject</title>
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>

<div id="container">
<div id="sidebar">
  <h3>Menu</h3>
  <ul>
    <li><a href="Index.html">Home</a></li>
    <br>
    <li>Reports</li>
    <br>
    <li><a href="Tables.php">Tables</a></li>
    <br>
    <li><a href="Forms.php">Forms</a></li>
  </ul>
 </div>

 <div id="content">

<form action="insert.php" method="post">
  <p>
  	<div class="field">
    <label for="first_name">first_name:</label>
     <input type="text" name="first_name" id="first_name">
 </div>
  </p>
  <p>
  	<div class="field">
    <label for="last_name">last_name:</label>
     <input type="text" name="last_name" id="last_name">
 </div>
  </p>
  <p>
  	<div class="field">
    <label for="gender">gender:</label>
     <input type="text" name="gender" id="gender">
 </div>
  </p>
   <p>
   	<div class="field">
    <label for="email">email:</label>
     <input type="text" name="email" id="email">
 </div>
   </p>
   <p>
   	<div class="field">
    <label for="date_of_birth">date_of_birth:</label>
     <input type="text" name="date_of_birth" id="date_of_birth">
 </div>
    </p>
<input id="insbutton" type="submit" value="Submit">
</form>

<div id="clear">
</div>

</div>
</div>
</body>
</html>