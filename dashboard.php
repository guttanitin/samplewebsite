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

//Apple closing prices
$closedates = array();
$closeprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $closedates[] = $key[0];
    $closeprices[] = $key[1];
}
//Apple opening prices
$opendates = array();
$openprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $opendates[] = $key[0];
    $openprices[] = $key[1];
}
//Calculate change over day & % change
$changeprice = $closeprices[0] - $closeprices[1];
$percchange = round(($changeprice / $openprices[0]) * 100.0,2);


// Tesla
//closing price
$data = $quandl->getSymbol("WIKI/TSLA", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/TSLA", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);

//Tesla closing prices
$tslclosedates = array();
$tslcloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $tslclosedates[] = $key[0];
    $tslcloseprices[] = $key[1];
}
//Tesla opening prices
$tslopendates = array();
$tslopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $tslopendates[] = $key[0];
    $tslopenprices[] = $key[1];
}
//Calculate change over day & % change
$tslchangeprice = $tslcloseprices[0] - $tslcloseprices[1];
$tslpercchange = round(($tslchangeprice / $tslopenprices[0]) * 100.0,2);


// Facebook
//closing price
$data = $quandl->getSymbol("WIKI/FB", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/FB", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);

//Facebook closing prices
$fbclosedates = array();
$fbcloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $fbclosedates[] = $key[0];
    $fbcloseprices[] = $key[1];
}
//Facebook opening prices
$fbopendates = array();
$fbopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $fbopendates[] = $key[0];
    $fbopenprices[] = $key[1];
}
//Calculate change over day & % change
$fbchangeprice = $fbcloseprices[0] - $fbcloseprices[1];
$fbpercchange = round(($fbchangeprice / $fbopenprices[0]) * 100.0,2);


// Netflix
//closing price
$data = $quandl->getSymbol("WIKI/NFLX", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/NFLX", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);

//Netflix closing prices
$nflxclosedates = array();
$nflxcloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $nflxclosedates[] = $key[0];
    $nflxcloseprices[] = $key[1];
}
//Facebook opening prices
$nflxopendates = array();
$nflxopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $nflxopendates[] = $key[0];
    $nflxopenprices[] = $key[1];
}
//Calculate change over day & % change
$nflxchangeprice = $nflxcloseprices[0] - $nflxcloseprices[1];
$nflxpercchange = round(($nflxchangeprice / $nflxopenprices[0]) * 100.0,2);

// Nvidia
//closing price
$data = $quandl->getSymbol("WIKI/NVDA", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/NVDA", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);

//Nvidia closing prices
$nvdclosedates = array();
$nvdcloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $nvdclosedates[] = $key[0];
    $nvdcloseprices[] = $key[1];
}
//Facebook opening prices
$nvdopendates = array();
$nvdopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $nvdopendates[] = $key[0];
    $nvdopenprices[] = $key[1];
}
//Calculate change over day & % change
$nvdchangeprice = $nvdcloseprices[0] - $nvdcloseprices[1];
$nvdpercchange = round(($nvdchangeprice / $nvdopenprices[0]) * 100.0,2);

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
    </script>
    </head>
    <body>
        <div class ="container-fluid">
            <div class = "row">
            <div class = "col col-sm-4"></div>
            <div class = "col col-sm-4">
            <h3> <b>User Dashboard </b></h3>
            <div class = "col col-sm-4"></div>
            </div>
            </div>
            <hr>
            <div class ="row">
                <div class ="col-sm-5">
                    <table id="datatables" class ="display">
                        <thead>
                            <tr>
                            <th> Symbol</th>
                            <th> Company</th>
                            <th> Open Price</th>
                            <th> Close Price</th>
                            <th> Change</th>
                            <th> %-Change</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="https://nitintest.azurewebsites.net/area.php?COMPANY=AAPL"> AAPL </a></td>
                                <td> Apple </td>
                                <td> <? echo $openprices[0] ?> </td>
                                <td> <? echo $closeprices[0] ?></td>
                                <td> <? echo $changeprice ?></td>
                                <td> <? echo $percchange ?></td>
                            </tr>
                            <tr>
                                <td><a href="https://nitintest.azurewebsites.net/area.php?COMPANY=TSLA"> TSLA </a></td>
                                <td> TESLA </td>
                                <td> <? echo $tslopenprices[0] ?> </td>
                                <td> <? echo $tslcloseprices[0] ?></td>
                                <td> <? echo $tslchangeprice ?></td>
                                <td> <? echo $tslpercchange ?></td>
                            </tr>
                            <tr>
                                <td><a href="https://nitintest.azurewebsites.net/area.php?COMPANY=FB"> FB </a></td>
                                <td> Facebook </td>
                                <td> <? echo $fbopenprices[0] ?> </td>
                                <td> <? echo $fbcloseprices[0] ?></td>
                                <td> <? echo $fbchangeprice ?></td>
                                <td> <? echo $fbpercchange ?></td>
                            </tr>
                            <tr>
                                <td> <a href="https://nitintest.azurewebsites.net/area.php?COMPANY=NFLX"> NFLX </a></td>
                                <td> Netflix </td>
                                <td> <? echo $nflxopenprices[0] ?> </td>
                                <td> <? echo $nflxcloseprices[0] ?></td>
                                <td> <? echo $nflxchangeprice ?></td>
                                <td> <? echo $nflxpercchange ?></td>
                            </tr>
                            <tr>
                                <td> <a href="https://nitintest.azurewebsites.net/area.php?COMPANY=NVDA"> NVDA </a></td>
                                <td> Nvidia </td>
                                <td> <? echo $nvdopenprices[0] ?> </td>
                                <td> <? echo $nvdcloseprices[0] ?></td>
                                <td> <? echo $nvdchangeprice ?></td>
                                <td> <? echo $nvdpercchange ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class ="col-sm-7">
                    <iframe src="https://nitintest.azurewebsites.net/test2.php" width="100%" height="250" scrolling="no" style="padding-left: 25px; overflow:hidden; margin-top:0px; margin-left:0px; border:none;" frameBorder="0"></iframe>
                </div>
            
            </div>
        
        </div>
    </body>
</html>