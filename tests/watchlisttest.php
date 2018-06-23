<?php
/**
 * Created by PhpStorm.
 * User: nitin
 * Date: 6/23/18
 * Time: 2:29 PM
 */

include '../azure_connection.php';
$connections = OpenCon();
$sql = "
            SELECT * FROM Watchlist
             ";
$stmt = sqlsrv_query($connections, $sql);

$insertSQL = "INSERT INTO Watchlist (email, stock, watchlist)
                      VALUES (?,?,?,?)";
$params = array('nitintest@gmail.com', 'FB', 'testWatchlist');
$stmt = sqlsrv_query($connections, $insertSQL, $params);
echo 'New Watchlist Registered Successfully';
echo "<br>";

?>
<html>
<table>
    <?php
    while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){ ?>
    <tr>
        <td><? echo $row['email']; ?> </td>
        <td><? echo $row['stock']; ?> </td>
        <td><? echo $row['watchlist']; ?> </td>
    </tr>   <?    }
        ?>
</table>
</html>
