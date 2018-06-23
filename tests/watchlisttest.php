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
echo 'New User Registered Successfully';

$output = "<table>";
foreach($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) as $key => $var) {
    //$output .= '<tr>';
    if($key===0) {
        $output .= '<tr>';
        foreach($var as $col => $val) {
            $output .= "<td>" . $col . '</td>';
        }
        $output .= '</tr>';
        foreach($var as $col => $val) {
            $output .= '<td>' . $val . '</td>';
        }
        $output .= '</tr>';
    }
    else {
        $output .= '<tr>';
        foreach($var as $col => $val) {
            $output .= '<td>' . $val . '</td>';
        }
        $output .= '</tr>';
    }
}
$output .= '</table>';
echo $output;

?>
<html>
<table>
    <?php
    while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){ ?>
    <tr>
        <td><? echo $row['username']; ?> </td>
        <td><? echo $row['watchlist']; ?> </td>
        <td><? echo $row['email']; ?> </td>
        <td><? echo $row['pass']; ?> </td>
    </tr>   <?    }
        ?>
</table>
</html>
