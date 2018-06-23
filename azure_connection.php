<?php

function OpenCon(){

    //connect to SQL Azure
    $server_name = "hedgetech.database.windows.net";
    $user = "database_admin";
    $password = "624qYfofj1P!";
    $database = "hedgetechdb";


    $connectionoptions = array("Database" => $database,
                            "UiD" => $user,
                            "PWD" => $password);

    //establishes connection
    $conn = sqlsrv_connect($server_name, $connectionoptions);
    if($conn == false){
        die(print_r(sqlsrv_errors(), true));
    }

    return $conn;
}


?>