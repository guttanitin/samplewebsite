<?php
/**
 * Created by PhpStorm.
 * User: nitin
 * Date: 6/5/18
 * Time: 8:30 PM
 */

$company = $_GET['COMPANY'];
include("testQuand/php-quandl-master/Quandl.php");
$api_key = "bcw-wtRJ3ucCAZJQu4i8";
$quandl = new Quandl($api_key, 'json');
$symbol = 'WIKI/'.$company;
$data = $quandl->getSymbol($symbol, [
	"sort_order"      => "desc",
	"rows"            => 30,
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
?>
<html>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div id="container" style="height: 100%; width: 95%; margin: 0 auto">
<table id='datatable'>
  <tr>
    <th>Dates</th>
    <th><? echo $company; ?> </th>
  </tr><?php
for($x = 30; $x >= 0; $x--){
          ?><tr>
          <th><?=$dates[$x];?></th>
          <th><?=trim($prices[$x]);?></th>
          </tr>  <?php
  };
?>
</table>
</div>
    <script>
$(function () {

{
    Highcharts.setOptions({
        colors: ['#0099cc']
    });
  }

    Highcharts.chart('container',{
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'area'
        },
        title: {
            text: 'Price movement in last 30 Days'
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: false
        },
        yAxis: {
            allowDecimals: true,
            title: {
                text: '<b>Prices</b>'
            }
        },
        xAxis: {
          title: {
                text: '<b>Dates</b>',
                type: 'datetime'
            },
            labels: {
                style: {
                  color: '#000000'
                }
            }
        },
        tooltip: {
            xDateFormat: '%Y-%m-%d',
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    Highcharts.dateFormat('%e %b %y', this.x) + ' - ' + this.point.y + ' Dollars(s)';
            }
        }
    });
});
</script>
</html>