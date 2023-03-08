<?php


$db['server_name'] = "localhost";
$db['user_name'] = "root";
$db['user_password'] = "";
$db['database_name'] = "lums-supervisor";

foreach ($db as $key => $value){
    define(strtoupper("$key"), $value);
}
$connection = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DATABASE_NAME);
if(!$connection){
    die("CONNECT FAILED".mysqli_error($connection));
}










//define("SERVER_NAME","localhost");
//define("USER_NAME","root");
//define("USER_PASSWORD","");
//define("DATABASE_NAME","lums-supervisor");
//
//$connection = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DATABASE_NAME);
//if($connection){
//    echo "<script>alert('Connection is Success')</script>";
//}else{
//    die("CONNECT FAILED".mysqli_error($connection));
//}



?>