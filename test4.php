<?php
include("testQuand/php-quandl-master/Quandl.php");
//$api_key = $_SERVER['QUANDL_KEY'] ?: "bcw-wtRJ3ucCAZJQu4i8";
$api_key = "bcw-wtRJ3ucCAZJQu4i8";
$quandl = new Quandl($api_key, 'json');
$symbol = 'WIKI/AAPL';
$data = $quandl->getSymbol($symbol, [
	"sort_order"      => "desc",
	"rows"            => 10,
	"column_index"    => 5, 
]);

$dates = array();
$prices = array();
$obj2 = json_decode( $data, true );
//file_put_contents('test2.json', json_encode($obj2));
$value = $obj2['dataset']['data'];
foreach ($value as $key){
    $dates[] = $key[0];
    $prices[] = $key[1];
    //echo $key[0]. ',' . $key[1];
   // echo "<br></br>";
    //echo $value['data'];
    //echo "<br></br>";
}
?>
<div id="container" style = "min-width:400px; height: 400px"></div>
<table id='datatable'>
  <tr>
    <th>Dates</th>
    <th>Apple</th>
    <th>Amazon</th>
    <th>Netflix</th>
    <th>Facebook</th>
    <th>NVIDIA</th>
  </tr><?php
for($x = 9; $x >= 0; $x--){
          ?><tr> 
          <th><?=$dates[$x];?></th>   
          <th><?=trim($prices[$x]);?></th>  
    
          </tr>  <?php
  };
?>
</table>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div id="container" style="height: 100%; width: 95%; margin: 0 auto"></div>
<script>
$(function () {

{
    Highcharts.setOptions({
        colors: ['#0099cc','#000000', '#ff3300', '#6600cc', '#0033cc']
    });
  }

    Highcharts.chart('container',{
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Apple & Amazon Price Changes in Last 10 Days'
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: false
        },
        yAxis: {
            allowDecimals: true,
            //min:0,
            //min:80,
            //max:100,
            //tickInterval:10,
            title: {
                text: '<b>Prices</b>'                
            }
        },
        xAxis: {
          title: {
                text: '<b>Dates</b>'                
            },
            labels: {
                style: {
                  color: '#000000'
                }
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.name + ' - ' + this.point.y + ' Dollars(s)';
            }
        }
    });
});
</script>
</html>