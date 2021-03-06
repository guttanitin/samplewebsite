<html>
<?
include("testQuand/php-quandl-master/Quandl.php");
$api_key = "bcw-wtRJ3ucCAZJQu4i8";
$quandl = new Quandl($api_key, 'json');
$data = $quandl->getSymbol("WIKI/F", [
	"sort_order"      => "desc",
	"rows"            => 10,
	"column_index"    => 4, 
]);
    $data2 = $quandl->getSymbol("WIKI/UA", [
	"sort_order"      => "desc",
	"rows"            => 10,
	"column_index"    => 4, 
]);
$data3 = $quandl->getSymbol("WIKI/GE", [
	"sort_order"      => "desc",
	"rows"            => 10,
	"column_index"    => 4, 
]);
$data4 = $quandl->getSymbol("WIKI/BAC", [
	"sort_order"      => "desc",
	"rows"            => 10,
	"column_index"    => 4, 
]);

$data5 = $quandl->getSymbol("WIKI/AMD", [
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
}
$dates2 = array();
$prices2 = array();
$obj3 = json_decode( $data2, true );
//file_put_contents('test.json', json_encode($obj2));
$values = $obj3['dataset']['data'];
foreach ($values as $keys){
    $dates2[] = $keys[0];
    $prices2[] = $keys[1];
}
    
$dates3 = array();
$prices3 = array();
$obj4 = json_decode( $data3, true );
//file_put_contents('test.json', json_encode($obj2));
$values = $obj4['dataset']['data'];
foreach ($values as $keys){
    $dates3[] = $keys[0];
    $prices3[] = $keys[1];
}

$dates4 = array();
$prices4 = array();
$obj5 = json_decode( $data4, true );
//file_put_contents('test.json', json_encode($obj2));
$values = $obj5['dataset']['data'];
foreach ($values as $keys){
    $dates4[] = $keys[0];
    $prices4[] = $keys[1];
}

$dates5 = array();
$prices5 = array();
$obj6 = json_decode( $data5, true );
//file_put_contents('test.json', json_encode($obj2));
$values = $obj6['dataset']['data'];
foreach ($values as $keys){
    $dates5[] = $keys[0];
    $prices5[] = $keys[1];
}
//echo "<br></br>";
//print_r($obj2);
/*$quandl->format = 'csv';
$quandl->force_curl = true;
$quandl->no_ssl_verify = true;
$quandl->timeout = 60;
*/
?>
<div id="container" style = "min-width:400px; height: 400px"></div>
<table id='datatable'>
  <tr>
    <th>Dates</th>
    <th>Ford</th>
    <th>Under Armour</th>
    <th>GE</th>
    <th>BAC</th>
    <th>AMD</th>
  </tr><?php
for($x = 9; $x >= 0; $x--){
          ?><tr> 
          <th><?=$dates[$x];?></th>   
          <th><?=trim($prices[$x]);?></th>  
          <th><?=trim($prices2[$x]);?></th>
          <th><?=trim($prices3[$x]);?></th>  
          <th><?=trim($prices4[$x]);?></th>
          <th><?=trim($prices5[$x]);?></th>
    
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
        colors: ['#0099cc','#666666', '#ff3300', '#6600cc', '#0033cc']
    });
  }

    Highcharts.chart('container',{
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'line'
        },
        title: {
            text: 'Portfolio Performance in Last 10 Days'
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: false
        },
        yAxis: {
            allowDecimals: true,
            min:0,
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