<html>
<?
include("testQuand/php-quandl-master/Quandl.php");
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div id="container" style="height: 400px; max-width: 800px; margin: 0 auto"></div>
<?
//$api_key = $_SERVER['QUANDL_KEY'] ?: "bcw-wtRJ3ucCAZJQu4i8";
$api_key = "bcw-wtRJ3ucCAZJQu4i8";
$quandl = new Quandl($api_key, 'json');
$data = $quandl->getSymbol("WIKI/AAPL", [
	"sort_order"      => "desc",
	"rows"            => 10,
	"column_index"    => 4, 
]);
$dates = array();
$prices = array();
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

<table id='datatable'>
  <tr>
    <th>Dates</th>
    <th>Prices</th>  
  </tr><?php

for($x = 9; $x >= 0; $x--){
          ?><tr> 
          <th><?=$dates[$x];?></th>   
          <th><?=trim($prices[$x]);?></th> 
          </tr>  <?php
  };
?>
</table>
    
<script>
Highcharts.chart('container',{
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Price Change in Last 10 Day'
        },
        credits: {
            enabled: false
        },
        yAxis: {
            allowDecimals: false,
            min:0,
            //min:80,
            //max:100,
            //tickInterval:10,
            title: {
                text: '<b>Dates</b>'                
            }
        },
        xAxis: {
          title: {
                text: '<b>Prices</b>'                
            },
            labels: {
                style: {
                  color: '#000000'
                }
            }
        },
        legend:{
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.name + ' - ' + this.point.y + ' Defect(s)';
            }
        }
    });
</script>
</html>