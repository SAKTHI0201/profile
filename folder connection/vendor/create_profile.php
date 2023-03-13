<?php  
$email  =$request['email'];
$firstname  =$request['firstname'];
$lastname  =$request['lastname'];
$gender  =$request['gender'];
$img  =$request['img'];
require 'vendor/autoload.php';  
// Creating Connection  
$serverApi = new \MongoDB\Driver\ServerApi(\MongoDB\Driver\ServerApi::V1);
$client = new \MongoDB\Client(
    'mongodb+srv://sakthimurugeswari:sakthi2003@cluster0.qqzt3za.mongodb.net/test', [], ['serverApi' => $serverApi]);

$collection = $client->test->employee;
// Creating Document  
$insertOneResult = $collection->insertOne([
    'email'  => $email ,
'firstname'  => $firstname,
'lastname'  => $lastname,
'gender'  => $gender,
'img'  => $img,
]);
// Insering Record  
//$collection->insertOne( [ 'name' =>'Peter', 'email' =>'peter@abc.com' ] );  
// Fetching Record  
//$record = $collection->find( [ 'name' =>'Peter'] );  
//foreach ($record as $employe) {  
//echo $employe['name'], ': ', $employe['email']."<br>";  
//}  
?>