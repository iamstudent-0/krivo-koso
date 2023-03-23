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
<?php

$link = mysqli_connect("localhost", "root", "Laura1%", "hr");
$sql = "SHOW TABLES;";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

//Формирование таблицы	
print '<table>';


print '<thead>';	
foreach($row as $name => $value) {
 
  print "<th>$name</th>";
}
print '</thead>';

//Формирование тела таблицы
print '<tbody>';

$i=1; 
while ($row) {
 
 if ($i % 2==1):
   print '<tr id=fff>';

   foreach($row as $value) {
   
     echo "<td><a href=http://localhost/showtable.php?tabname=$value>$value</td>";
   }
   print '</tr>';    
$i++;

 else:
   print '<tr>';

   foreach($row as $value) {

     echo "<td><a href=http://localhost/showtable.php?tabname=$value>$value</td>";
  }
  $i++;
  print '</tr>';
endif;	

     
$row = mysqli_fetch_assoc($result);
}
print '</tbody>';

// Формирования нижней части таблицы \\
print '<tfoot>';
print '</tfoot>';

//Завершение формирования таблицы
print '</table>';

?>

<!--Подключение JavaScrip-->
<script src="main.js"></script>

<div id="clear">
</div>

</div>

 </div>

 
</body>
</html>