<html>
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
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div id="container" style="height: 400px; max-width: 800px; margin: 0 auto"></div>
<table id='datatable'>
  <tr>
    <th>Dates</th>
    <th>Prices</th>  
  </tr><?
for($i = 0; $i < 10; $i++){
          ?><tr> 
          <th><? echo $dates[$i]; ?></th>   
          <th><? echo $prices[$i]; ?></th> 
          </tr>  <?
  };
?>
</table>
<script>
$(function () {

{
    Highcharts.setOptions({
        colors: ['#00868B']
    });
  }

    $('container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Price Change Over 10 Days'
        },
        credits: {
            enabled: false
        },
        yAxis: {
            allowDecimals: false,
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