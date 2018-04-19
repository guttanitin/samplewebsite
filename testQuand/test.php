<?php

include("php-quandl-master/Quandl.php");

//$api_key = $_SERVER['QUANDL_KEY'] ?: "bcw-wtRJ3ucCAZJQu4i8";
$api_key = "bcw-wtRJ3ucCAZJQu4i8";
$quandl = new Quandl($api_key, 'json');
$data = $quandl->getSymbol("WIKI/AAPL", [
	"sort_order"      => "desc",
	"rows"            => 10,
	"column_index"    => 4, 
]);

$obj2 = json_decode( $data, true );
//file_put_contents('test.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    echo $key[0]. ',' . $key[1];
    echo "<br></br>";
    //echo $value['data'];
    //echo "<br></br>";
}
//echo "<br></br>";
//print_r($obj2);
/*$quandl->format = 'csv';
$quandl->force_curl = true;
$quandl->no_ssl_verify = true;
$quandl->timeout = 60;
*/
?>