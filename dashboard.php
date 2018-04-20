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
//Nvidia opening prices
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

// SPY
//closing price
$data = $quandl->getSymbol("WIKI/SPY", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/SPY", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);
//SPY closing prices
$nvdclosedates = array();
$nvdcloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $spyclosedates[] = $key[0];
    $spycloseprices[] = $key[1];
}
//SPY opening prices
$spyopendates = array();
$spyopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $spyopendates[] = $key[0];
    $spyopenprices[] = $key[1];
}
//Calculate change over day & % change
$spychangeprice = $spycloseprices[0] - $spycloseprices[1];
$spypercchange = round(($spychangeprice / $spyopenprices[0]) * 100.0,2);

// Ford
//closing price
$data = $quandl->getSymbol("WIKI/F", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/F", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);
//F closing prices
$fclosedates = array();
$fcloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $fclosedates[] = $key[0];
    $fcloseprices[] = $key[1];
}
//F opening prices
$fopendates = array();
$fopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $fopendates[] = $key[0];
    $fopenprices[] = $key[1];
}
//Calculate change over day & % change
$fchangeprice = $fcloseprices[0] - $fcloseprices[1];
$fpercchange = round(($fchangeprice / $fopenprices[0]) * 100.0,2);

// Under Armour
//closing price
$data = $quandl->getSymbol("WIKI/UA", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/UA", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);
//UA closing prices
$uaclosedates = array();
$uacloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $uaclosedates[] = $key[0];
    $uacloseprices[] = $key[1];
}
//UA opening prices
$uaopendates = array();
$uaopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $uaopendates[] = $key[0];
    $uaopenprices[] = $key[1];
}
//Calculate change over day & % change
$uachangeprice = $uacloseprices[0] - $uacloseprices[1];
$uapercchange = round(($uachangeprice / $uaopenprices[0]) * 100.0,2);

// GE
//closing price
$data = $quandl->getSymbol("WIKI/GE", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/GE", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);
//GE closing prices
$geclosedates = array();
$gecloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $geclosedates[] = $key[0];
    $gecloseprices[] = $key[1];
}
//GE opening prices
$geopendates = array();
$geopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $geopendates[] = $key[0];
    $geopenprices[] = $key[1];
}
//Calculate change over day & % change
$gechangeprice = $gecloseprices[0] - $gecloseprices[1];
$gepercchange = round(($gechangeprice / $geopenprices[0]) * 100.0,2);

// BAC
//closing price
$data = $quandl->getSymbol("WIKI/BAC", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/BAC", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);
//BAC closing prices
$bacclosedates = array();
$baccloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $bacclosedates[] = $key[0];
    $baccloseprices[] = $key[1];
}
//BAC opening prices
$bacopendates = array();
$bacopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $bacopendates[] = $key[0];
    $bacopenprices[] = $key[1];
}
//Calculate change over day & % change
$bacchangeprice = $baccloseprices[0] - $baccloseprices[1];
$bacpercchange = round(($bacchangeprice / $bacopenprices[0]) * 100.0,2);

// AMD
//closing price
$data = $quandl->getSymbol("WIKI/AMD", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 4 
]);
//opening price
$data2 = $quandl->getSymbol("WIKI/AMD", [
	"sort_order"      => "desc",
	"rows"            => 2,
	"column_index"    => 1 
]);
//AMD closing prices
$amdclosedates = array();
$amdcloseprices = array();
$obj = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj['dataset']['data'];
foreach ($value as $key){
    $amdclosedates[] = $key[0];
    $amdcloseprices[] = $key[1];
}
//AMD opening prices
$amdopendates = array();
$amdopenprices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $amdopendates[] = $key[0];
    $amdopenprices[] = $key[1];
}
//Calculate change over day & % change
$amdchangeprice = $amdcloseprices[0] - $amdcloseprices[1];
$amdpercchange = round(($amdchangeprice / $amdopenprices[0]) * 100.0,2);

?>
<html lang="en">
    <head>
        <title>Dashboard</title>
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
          $('#datatables2').dataTable({
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
            <div class = "col col-sm-5"></div>
            <div class = "col col-sm-4">
            <h3> <b>User Dashboard </b></h3>
            <div class = "col col-sm-3"></div>
            </div>
            </div>
            <hr>
            <div class ="row">
                <div class ="col-sm-5">
                    <label>Portfolio Tracking</label>
                    <table id="datatables2" class ="display">
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
                                <td><a href="https://nitintest.azurewebsites.net/area.php?COMPANY=F"> F </a></td>
                                <td> Ford </td>
                                <td> <? echo $fopenprices[0] ?> </td>
                                <td> <? echo $fcloseprices[0] ?></td>
                                <td> <? echo $fchangeprice ?></td>
                                <td> <? echo $fpercchange ?></td>
                            </tr>
                            <tr>
                                <td><a href="https://nitintest.azurewebsites.net/area.php?COMPANY=FIT"> UA </a></td>
                                <td> Under Armour </td>
                                <td> <? echo $uaopenprices[0] ?> </td>
                                <td> <? echo $uacloseprices[0] ?></td>
                                <td> <? echo $uachangeprice ?></td>
                                <td> <? echo $uapercchange ?></td>
                            </tr>
                            <tr>
                                <td><a href="https://nitintest.azurewebsites.net/area.php?COMPANY=GE"> GE </a></td>
                                <td> General Electric </td>
                                <td> <? echo $gebopenprices[0] ?> </td>
                                <td> <? echo $gebcloseprices[0] ?></td>
                                <td> <? echo $gebchangeprice ?></td>
                                <td> <? echo $gebpercchange ?></td>
                            </tr>
                            <tr>
                                <td> <a href="https://nitintest.azurewebsites.net/area.php?COMPANY=BAC"> BAC </a></td>
                                <td> Bank of America </td>
                                <td> <? echo $bacopenprices[0] ?> </td>
                                <td> <? echo $baccloseprices[0] ?></td>
                                <td> <? echo $bacchangeprice ?></td>
                                <td> <? echo $bacpercchange ?></td>
                            </tr>
                            <tr>
                                <td> <a href="https://nitintest.azurewebsites.net/area.php?COMPANY=AMD"> AMD </a></td>
                                <td> Advanced Micro Devices </td>
                                <td> <? echo $amdopenprices[0] ?> </td>
                                <td> <? echo $amdcloseprices[0] ?></td>
                                <td> <? echo $amdchangeprice ?></td>
                                <td> <? echo $amdpercchange ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class = "col-sm-7">
                    <iframe src="https://nitintest.azurewebsites.net/portfoliograph.php" width="100%" height="400" scrolling="no" style="padding-left: 25px; overflow:hidden; margin-top:0px; margin-left:0px; border:none;" frameBorder="0"></iframe>
                </div>
            
            </div>
            <hr>
            <div class ="row">
                <div class ="col-sm-5">
                    <label>Watch List</label>
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
                            <tr>
                                <td> <a href="https://nitintest.azurewebsites.net/area.php?COMPANY=SPY"> SPY </a></td>
                                <td> S'&amp;'P 500 ETF </td>
                                <td> <? echo $spyopenprices[0] ?> </td>
                                <td> <? echo $spycloseprices[0] ?></td>
                                <td> <? echo $spychangeprice ?></td>
                                <td> <? echo $spypercchange ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class ="col-sm-7">
                    <iframe src="https://nitintest.azurewebsites.net/test2.php" width="100%" height="400" scrolling="no" style="padding-left: 25px; overflow:hidden; margin-top:0px; margin-left:0px; border:none;" frameBorder="0"></iframe>
                </div>
            
            </div>
            
        </div>
    </body>
</html>