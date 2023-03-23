<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MyProject</title>
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

$n = $_GET['tabname'];

show_table($n); 

function show_table($value) {

  $link = mysqli_connect("localhost", "root", "Laura1%", "hr");

  $sql = "SELECT *
            FROM $value";

  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);

  ?>

 <table>
 <thead>
<?php
    foreach($row as $name => $value) { ?>
   <th><?php echo $name ?></th>
<?php
}?>
<th>&#9998;</th>   <!--имя столбца-->
</thead>

<tbody>
 <?php      
$i=1;

while($row) {

   ?>
    <tr id="b">
<?php
    foreach($row as $value) { ?>

    <td id=<?php echo "$value" ?>>   
     <?php echo "$value"?>
    </td>

   <?php }?>

    <p><button id="btn" type="submit" formaction="update.php">Обновить</button> </p>
<?php //echo "<td ><a id=knopka href=update.php?first_name=$row[first_name] >Обновить</a></td>"?>
  
   </tr>

    <tr id=fff>

   <?php

  $row = mysqli_fetch_assoc($result);
}  ?>
</tbody>

<!--Формирования нижней части таблицы-->
<tfoot>
</tfoot>

</table>



<?php
return $value;

}

?>

<?php



?>  

<div id="clear">
</div>

<script> 

var tds = document.querySelectorAll('td');

for (var i = 0; i < tds.length; i++) {
  tds[i].addEventListener('click', function func() {
    var input = document.createElement('input');
    input.value = this.innerHTML;

   $column_name = $(this).parents('table').find('tr:first-child').children('th:nth-child(' + (this.cellIndex + 1) + ')').html();
   

  

//      $i = jquery('td').textContent;
// alert( $i);

  
// .previousSibling

    this.innerHTML = '';
    this.appendChild(input);
    
    var td = this;
    input.addEventListener('blur', function() {
      td.innerHTML = this.value;
      $a = this.value;
    
      td.addEventListener('click', func);
    });
     
    this.removeEventListener('click', func);
  });
}


  $(document).on('click', '#btn', function(){

  let column = $column_name;
  let val = $a;

  $.ajax ({
    url: 'update.php',
    type: 'POST',
    data_type: 'json',
    data: {
      column: column,
      val: val,
    },success: function(){
     console.log('Данные отправлены');

      

      console.log($column_name);
        console.log($a);
     }
  })
})

</script>
 </div>
</body>
</html>






