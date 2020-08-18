<?php
    ini_set("include_path", '/home/photoboo/php:' . ini_get("include_path") );

    $servername = "174.138.190.58"; 
    $port = "3306";
    $dbuser = "photoboo_Eric"; 
    $userpw = "Yta5hVyj"; 
    $dbName = "photoboo_DNR_DB"; 

    $GAMEDATA = $_POST["score"]; 

    $conn = new mysqli($servername, $dbuser, $userpw, $dbName); 

    if(!conn)
    {
        die("Connection Failed: ".mysqli_connect_error()); 
    }

    $sql = "INSERT INTO `logo_catch` (`attempt`, `result`, `timeAttempt`) VALUES (NULL, '".$GAMEDATA."', CURRENT_TIMESTAMP)"; 

    if (mysqli_query($conn, $sql)) {
        echo "New Record Created Successfully"; 
    }
    else {
        echo "RECORD ERROR"; 
    }

    mysqli_close($conn); 

    header('Content-Type:application/json'); 
    $arr = ["path" => '123']; 
    echo json_encode($arr); 
?>