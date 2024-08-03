<?php

require '../inc/data.php';
function getCustomerList(){

global  $conn;

$query= "SELECT *FROM customers";
$query_run=mysqli_query($conn, $query);

if($query_run){

    if(mysqli_num_rows($query_run)>0){
        $res= mysqli_fetch_all($query_run, MYSQLI_ASSOC);

        $data =[
            'satus'=> 200,
            'message' => 'Fetched sucessfully',
            'data'=> $res
    
        ];
        header("HTTP/1.0 200 Found");
        echo json_encode($data);

    }else{
        $data =[
            'satus'=> 404,
            'message' => $requestMethod. 'No',
    
    
        ];
        header("HTTP/1.0 404 No");
        return json_encode($data);
    }

}else{

    // $data =[
    //     'satus'=> 500,
    //     'message' => $requestMethod. 'Method not allowed',


    // ];
    // header("HTTP/1.0 500 Mwed");
    // return json_encode($data);
    echo ('hi');

}
    
}

?>