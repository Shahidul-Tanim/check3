<?php

// $test = "testing12";
// if($test == "testing"){
//   echo "all are ook!";
// }else{
//     echo "all are not ok!";
// }


// EX-1 
// function getGretterNummer($a1, $b1 ,$c1){
//     $a = $a1;
//     $b = $b1;
//     $c = $c1;

//     if ($a > $b && $a > $c
//     ) {
//         echo "$a is gretter then $b and $c";
//     } elseif ($b > $a && $b > $c) {
//         echo "$b is gretter then $a and $c";
//     } else {
//         echo "$c is gretter then $a and $b";
//     }
// }
// getGretterNummer(1025,110,120);
// EX-2


function checkUser($user, $pass){
    $userName = $user;
    $userPass = $pass;

    if ($userName == 'testUser') {
        if ($userPass == "123456") {
            echo "<h1>login success!</h1>";
        } else {
            echo "login failed";
        }
    } else {
        echo "your name is not currect";
    }

}
// checkUser("testUser", "123456");


// EX-3
// function getResult($a){
//     $num = $a;
//     if ($num % 2 == 0) {
//         echo "$num is = a Even Number";
//     } else {
//         echo "$num is = a Odd Number";
//     }
// }
// getResult(500);

// <h1 style="color:#000;"></h1>

// Ex-4

// $num = 50;
//  condition ? "...." : "...."
// echo $num % 2 == 0 ? "Even"  : "odd";

// EX-5 
// SWITCH
// $num = 31;
// switch($num){
//   case 50 :
//     echo "the number is an even number";
//     break;
//   case 31 :
//     echo "the number is an odd number";
//     break;
// }




//ARRAY 
// $num = [20, "test"];
// $test = array(20,50);
// echo $num;
// echo "<pre>";
// // var_dump($num);
// print_r($num[1]);
// echo "</pre>";


// $num = [
// "name" => "rahim",
// "age" => 20,
// "institute" => "iiuc"
// ];


// echo "<pre>";
// print_r($num['name']. "    " . $num['age']);
// echo "</pre>";


$test = [
  "name" => "rahim",
   "age" => 50,
  "institute" => [
      'scc' => "2015",
      'hsc' => "2017",
      'B.sc' => "iiuc"
  ],
  "socialMedia" => [
    "facebook" => "https://www.facebook.com/RahimulHaque9846",
    "twitter" => "twitter.com",
  ],

];

echo "<pre>";



print_r("my name is ".$test["name"] ." " . " i am" . " " . $test['age'] . "  " . $test["institute"]["B.sc"]);



echo "</pre>";



?>