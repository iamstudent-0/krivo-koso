<?php

$first_name =  $_REQUEST['first_name'];
$last_name =  $_REQUEST['last_name'];
$gender =  $_REQUEST['gender'];
$email =  $_REQUEST['email'];
$date_of_birth =  $_REQUEST['date_of_birth'];

$link = mysqli_connect("localhost", "root", "Laura1%", "hr");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
    
    header("Location: http://localhost/Forms.php");

}


$sql = "INSERT INTO employee (first_name, last_name, gender, email, date_of_birth
	    )
	    VALUES ('$first_name', '$last_name', '$gender', '$email', 
	    '$date_of_birth')";
$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}

?>
