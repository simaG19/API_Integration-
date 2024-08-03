
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); 
header('Access-Control-Allow-Methods: POST'); 
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include('fuction.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod=='POST'){
    $inputData = json_decode(file_get_contents("php://input"),true);
    echo $inputData;


}else{
    $data =[
        'satus'=> 405,
        'message' => $requestMethod. 'Method not allowed',
    ];
    header("HTTP/1.0 405 METHOD NOT allowed");
    echo json_encode($data);
}


?>