<?php
include 'azure_connection.php';

//checks if username password match with whats in database
function is_valid_user($connections, $email, $passW){    

    $echeck="SELECT count(*) as 'Count' FROM users WHERE email = '$email' AND pass = '$passW'";
    $echk=sqlsrv_query($connections, $echeck);
    while($row = sqlsrv_fetch_array($echk, SQLSRV_FETCH_ASSOC)){
        $count = $row['Count'];
    }
    if($count > 0)   {
        return true;
    }
    return false;
}

//only if username and password are set then it checks if they are valid and takes them to home page
//else alerts invalid log in and takes them to index page
//if they are not set then takes them index;
if(isset($_POST['username']) && isset($_POST['password'])){
$email = $_POST['username'];
$passW = $_POST['password'];

    $connections = OpenCon();

    if(is_valid_user($connections, $email, $passW)){
        header("Location: testindex.php");
    }
    else{
        
        header("Location: index.php?Message=" . urlencode($message));
        
    }
}
else{
    header("Location: index.php");
}

?>