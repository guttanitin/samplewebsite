<?php
/**
 * Created by PhpStorm.
 * User: nitin
 * Date: 6/23/18
 * Time: 11:41 AM
 */

include '../azure_connection.php';
$connections = OpenCon();
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
