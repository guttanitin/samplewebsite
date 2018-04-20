<?php
/*
Dashboard Page for User
*/

include("testQuand/php-quandl-master/Quandl.php");
//$api_key = $_SERVER['QUANDL_KEY'] ?: "bcw-wtRJ3ucCAZJQu4i8";
$api_key = "bcw-wtRJ3ucCAZJQu4i8";
$quandl = new Quandl($api_key, 'json');

//closing price
$data = $quandl->getSymbol("WIKI/AAPL", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/AAPL", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);

$closedates = array();
$closeprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $closedates[] = $key[0];
    $closeprices[] = $key[1];
}

$opendates = array();
$openprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $opendates[] = $key[0];
    $openprices[] = $key[1];
}

$changeprice = $closeprices[0] - $closeprices[1];
$percchange = (($openprices[0] - $closeprices[0]) / $openprices[0]);
?>
<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <style type = "text/css">
      @import "media/css/demo_table_jui.css";
      @import "media/themes/smoothness/jquery-ui-1.8.4custom.css"
    </style>
    
    <script type = "text/javascript" charset = "utf-8">
      $(document).ready(function(){
        $('#datatables').dataTable({
          "sPaginationType": "full_numbers",
          "fixedHeader": true,
          "iDisplayLength": 10
          //"bJQueryUI":true,
        });
      });
      });
    </script>
    </head>
    <body>
        <div class ="container-fluid">
        
            <div class ="row">
                <div class ="col col-sm-5">
                    <table id="datatables">
                        <thead>
                            <tr>
                            <th> Symbol</th>
                            <th> Company</th>
                            <th> Opening Price</th>
                            <th> Closing Price</th>
                            <th> Change</th>
                            <th> %-Change</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr>
                                <td> AAPL</td>
                                <td> Apple </td>
                                <td> <? echo $openprices[0] ?> </td>
                                <td> <? echo $closeprices[0] ?></td>
                                <td> <? echo $changeprice ?></td>
                                <td> <? echo $percchange ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class ="col col-sm-7">
                    <iframe src="https://nitintest.azurewebsites.net/test2.php" height="600" width="600"></iframe>
                </div>
            
            </div>
        
        </div>
    </body>
</html>