<?php

function show_table($value) {
  $link = mysqli_connect("localhost", "root", "Laura1%", "hr");

  $sql = "SELECT first_name, last_name, gender, email, date_of_birth
            FROM $value";

  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);
  print '<table><tr>';
    foreach($row as $name => $value) {
    print "<th>$name</th>";
}
print '</tr>';
while($row) {
    print '<tr>';
    foreach($row as $value) {
        print "<td>$value</td>";  
    }
    print '</tr>';
    $row = mysqli_fetch_assoc($result);
}
print '</table>';
return $value;
}

show_table( 'Employee');
?>