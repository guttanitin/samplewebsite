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
    $dates[] = "'" . $key[0] . "'";
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
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    <script>
<script>
{
    Highcharts.setOptions({
        colors: ['#084f83']
    });
  
        }

$(function () {

    $('#container').highcharts({
        title: {
            text: 'Daily Call Volume(200 days)'
        },
        xAxis: [{
            categories: [<?php echo join($dates, ",") ?>]
        }],
      credits: {
      enabled: false
  },
plotOptions: {
    column: {           
        groupPadding: 0.5,
        pointWidth: 5                         
    }
},
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}',
                style: {
                    color: '#000000'
                }
                
            },
            title: {
                text: 'Prices in last 10 days',
                style: {
                    color: '#000000'
                }
            },
            opposite: true,
            linkedTo:1

        }],
        tooltip: {
            shared: true,
            color: ['#000000']
        },
        series: [{
            name: 'Prices',
            type: 'column',
            colorByPoint: true,
            colors: ['#ff0000'],
            yAxis: 1,
            data: [<?php echo join($prices, ',') ?>]
        }
        ]
    });
});

</script>
</html>