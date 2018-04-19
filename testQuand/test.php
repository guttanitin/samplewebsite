<?php
include("php-quandl-master/Quandl.php");
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<?php
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
    $dates[] = $key[0];
    $prices[] = $key[1];
    //echo $key[0]. ',' . $key[1];
   // echo "<br></br>";
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

<html>
    <script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: <? echo $dates ?>,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Prices',
        data: <? echo $prices ?>

    }]
});
             </script>
</html>