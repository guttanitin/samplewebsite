<?php
/**
 * Created by PhpStorm.
 * User: nitin
 * Date: 6/23/18
 * Time: 2:29 PM
 */

include '../azure_connection.php';
$connections = OpenCon();

$insertSQL = "INSERT INTO Watchlist (email, stock, watchlist)
                      VALUES (?,?,?,?)";
$params = array('nitintest@gmail.com', 'FB', 'testWatchlist');
$stmt = sqlsrv_query($connections, $insertSQL, $params);
echo 'New Watchlist Registered Successfully';
echo "<br>";

$sql = "
            SELECT * FROM Watchlist
             ";
$stmt2 = sqlsrv_query($connections, $sql);
?>
<html>
<table>
    <?php
    while($row = sqlsrv_fetch_array($stmt2, SQLSRV_FETCH_ASSOC)){ ?>
    <tr>
        <td><? echo $row['email']; ?> </td>
        <td><? echo $row['stock']; ?> </td>
        <td><? echo $row['watchlist']; ?> </td>
    </tr>   <?    }
        ?>
</table>
</html>
