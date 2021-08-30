<?php 
// Reads the Variables send with POST
$sessionId=$_POST['sessionId'];
$serviceCode=$_POST['serviceCode'];
$phoneNumber =$_POST['phoneNumber'];
$text=$_POST['text'];

if($text==""){
    // this is the First Request
    $response="CON What Would You want To Check \n";
    $response.="1. My Account No \n";
    $response.="2. My Phone Number";

}
else if($text=="1"){
    // The First Level Response Option
    $response="CON Choose Account Information To View \n";
    $response.="1. Account Number \n";
    $response.="2. Account Balance";

}
else if($text=="2"){
    // The Second Level Response Option
    $response="END Your Phone Number is:".$phoneNumber;
    
}
else if($text=="1*1"){
    // The First Level Response Option
    $accountNumber="BK100120";
    $response="END Your Account Is Number is:".$accountNumber;
    
}
else if($text=="1*2"){
    // The First Level Response Option
    $balance="10,000RWF";
    $response="END Your Balance is:".$balance;
    
}
header('Content-type;text/plain');
echo $response;  





?>