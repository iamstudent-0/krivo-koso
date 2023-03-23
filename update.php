<?php

$i = $_POST['column'];
$b = $_POST['val'];

$id =$_POST['id'];

$json = file_get_contents('showtable.php');
$data = json_decode($json);

$link = mysqli_connect("localhost", "root", "Laura1%", "hr");

 $sql = "UPDATE employee SET $i = ('$b')
 WHERE id = '1' ";//?! проработать айдишник
          

$result = mysqli_query($link, $sql);

header("Refresh: 0"); //обновить страницу

?>