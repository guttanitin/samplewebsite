<?php

include 'azure_connection.php';

function is_valid_email($connections, $mail){    

    $echeck="SELECT count(*) as 'Count' FROM users WHERE email = '$mail'";
    $echk=sqlsrv_query($connections, $echeck);
    while($row = sqlsrv_fetch_array($echk, SQLSRV_FETCH_ASSOC)){
        $count = $row['Count'];
    }
    if($count > 0)   {
        echo "Email already exists";
        return false;
    }
    return true;
}

//function creating user
function create_user($fName, $lName, $email, $passW, $conn){
    $insertSQL = "INSERT INTO Users (first_name, last_name, email, pass)
                      VALUES (?,?,?,?)";
                      $params = array($fName, $lName, $email, $passW);
                      $stmt = sqlsrv_query($conn, $insertSQL, $params);
    
    if($stmt == false) {
        /*Handle the case of a duplicate e-mail address.*/
        $errors = sqlsrv_errors();  
        if ($errors[0]['code'] == 2601) {  
            echo "The e-mail address you entered has already been used.</br>"; 
            return false; 
        }
            /*Die if other errors occurred.*/  
        else {  
            die(print_r($errors, true));  
        }  
    } else {
        //$stmt->exec();

        echo "Registration complete.</br>";  
    }  

    return true;
}

//Code execution starts here when submit
if(isset($_POST['fName']) && isset($_POST['password'])){

    //Reading from values
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $passW = $_POST['password'];

    $connections = OpenCon();

    if(is_valid_email($connections, $email)){
        if(create_user($fName, $lName, $email, $passW, $connections)){
            $sql = "
            SELECT * FROM Users
             ";
            $stmt = sqlsrv_query($connections, $sql);
            echo 'New User Registered Successfully';
            ?> 
            <html>
                <table>
                    <?php
                        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){ ?>
                        <tr>
                        <td><? echo $row['first_name']; ?> </td>
                        <td><? echo $row['last_name']; ?> </td>
                        <td><? echo $row['email']; ?> </td>
                        <td><? echo $row['pass']; ?> </td>
                    <?    }
                    ?>
                </table>
            </html>
<?php
            sqlsrv_close($connections);
            header("Location: rssfeed.php");
        } else{
            echo 'Error Registering User!';
        }
    } else{
        header("Location: index.php");
    }
}

?>

