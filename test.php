 <?php


// function fibonacci($n) {
//    if ($n == 0 ) {
//        return 0;
//    }
//    if ($n == 1 || $n == 2) {
//        return 1;
//    } else {
//        return fibonacci($n - 1) + fibonacci($n -2);
//    }
  
// }
// echo fibonacci(4);

?>
 
<?php


    // function countProg($numb) {
    //     $ten = $numb%10;
    //     $hund =$numb%100;

    // if ($hund>10 && $hund<21){
    //     $slovo = "Программистов";
    // }
    // elseif ($ten>1 && $ten<5) {
    //     $slovo = "Программиста";
    // }
    // elseif ($ten == 1) {
    //     $slovo = "Программист";
    // }
    // else{
    //     $slovo = "Программистов";
    // }
    // return $numb.$slovo;
    // }
    // echo countProg(5);


// $a = '1';
// $b = &$a;
// $b = "3$b";


// echo $a. ",".$b;


// function showME($hello) {

//     if ($hello == "Hello") 
//     {
//     echo ("Hello");
//     }

//     elseif ($hello == "hello") 
//     {
//     echo ("hello");
//     }

//     else 
//     {
//         echo ("bye");
//     }
//     // return $a;
// }

// echo showME('Hello');



if (empty($_GET['email'])) {

    echo "Введите email";
}

?>