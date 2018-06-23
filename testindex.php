<?php
/**
 * Created by PhpStorm.
 * User: nitin
 * Date: 6/5/18
 * Time: 9:55 PM
 */

include("testQuand/php-quandl-master/Quandl.php");
$api_key = "bcw-wtRJ3ucCAZJQu4i8";
$quandl = new Quandl($api_key, 'json');


class rss
{
    var $feed;
    function rss($feed)
    {
        $this->feed = $feed;
    }
    function parse()
    {
        $rss = simplexml_load_file($this->feed);
        $rss_split = array();
        foreach ($rss->channel->item as $item) {
            $title = (string) $item->title;
            $link   = (string) $item->link;
            $description = (string) $item->description;
            $rss_split[] = '<div>
                                <a href="'.$link.'" target="_blank" title="">'.$title.'</a>
                                <hr>
                                </div>';
        }
        return $rss_split;
    }
    function display($numrows,$head)
    {
        $rss_split = $this->parse();
        $i = 0;
        $rss_data = '<div class="container">
                     <div class="title" style = "align:center;">'.$head.'</div>
                     <div class="links">';

        while ( $i < $numrows )
        {
            $rss_data .= $rss_split[$i];
            $i++;
        }
        $trim = str_replace('', '',$this->feed);
        $user = str_replace('&lang=en-us&format=rss_200','',$trim);
        $rss_data.='</div></div>';
        return $rss_data;
    }
}

$feedlist = new rss("http://articlefeeds.nasdaq.com/nasdaq/symbols?symbol=NWS");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- font awesome icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <!-- JQuery Minified CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link type="text/css" href="css/styles.css" rel="stylesheet">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 90%;
        }

        td, th {
            border: 2px solid #000000;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand text-left" href="testindex.php" style="font-size: 29px;
    font-family: Black Han Sans;
    margin-top: 0px;">Hedge Hog</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler" style="padding: 21px;"> <i class="fa fa-fw fa-angle-left"></i> </a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-sidenav fa-ul" id="exampleAccordion" style="font-size: 25px; padding-top: 30px; min-width: 0px; left: -7px;">
            <li class="nav-item" data-placement="right">
                <a class="nav-link" href="testindex.php" style="font-size: 20px;">
                    <svg class="svg-inline--fa fa-home fa-w-18" aria-hidden="true" data-prefix="fa" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M488 312.7V456c0 13.3-10.7 24-24 24H348c-6.6 0-12-5.4-12-12V356c0-6.6-5.4-12-12-12h-72c-6.6 0-12 5.4-12 12v112c0 6.6-5.4 12-12 12H112c-13.3 0-24-10.7-24-24V312.7c0-3.6 1.6-7 4.4-9.3l188-154.8c4.4-3.6 10.8-3.6 15.3 0l188 154.8c2.7 2.3 4.3 5.7 4.3 9.3zm83.6-60.9L488 182.9V44.4c0-6.6-5.4-12-12-12h-56c-6.6 0-12 5.4-12 12V117l-89.5-73.7c-17.7-14.6-43.3-14.6-61 0L4.4 251.8c-5.1 4.2-5.8 11.8-1.6 16.9l25.5 31c4.2 5.1 11.8 5.8 16.9 1.6l235.2-193.7c4.4-3.6 10.8-3.6 15.3 0l235.2 193.7c5.1 4.2 12.7 3.5 16.9-1.6l25.5-31c4.2-5.2 3.4-12.7-1.7-16.9z"></path>
                    </svg>
                    <span class="nav-link-text">Home</span>
                    <br>
                </a>
                <a class="nav-link" href="rssfeed.php" style="font-size: 20px;">
                    <svg class="svg-inline--fa fa-microphone fa-w-12" aria-hidden="true" data-prefix="fa" data-icon="microphone" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 384 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M96 256V96c0-53.019 42.981-96 96-96s96 42.981 96 96v160c0 53.019-42.981 96-96 96s-96-42.981-96-96zm252-56h-24c-6.627 0-12 5.373-12 12v42.68c0 66.217-53.082 120.938-119.298 121.318C126.213 376.38 72 322.402 72 256v-44c0-6.627-5.373-12-12-12H36c-6.627 0-12 5.373-12 12v44c0 84.488 62.693 154.597 144 166.278V468h-68c-6.627 0-12 5.373-12 12v20c0 6.627 5.373 12 12 12h184c6.627 0 12-5.373 12-12v-20c0-6.627-5.373-12-12-12h-68v-45.722c81.307-11.681 144-81.79 144-166.278v-44c0-6.627-5.373-12-12-12z"></path>
                    </svg>
                    <span class="nav-link-text">News</span>
                    <br>
                </a>
                <a class="nav-link" href="#" style="font-size: 20px;"> <i class="fa fa-clipboard"></i> <span class="nav-link-text">Screener</span> <br> </a>
                <a class="nav-link" href="#" style="font-size: 20px;"> <i class="fa fa-male"></i> <span class="nav-link-text">Watchlist</span><br></a>
                <a class="nav-link" href="portfolio.php" style="font-size: 20px;"> <i class="fa fa-link"></i> <span class="nav-link-text">Portfolio</span><br></a>
                <a class="nav-link" href="#" style="font-size: 20px;"> <i class="fa fa-book"></i> <span class="nav-link-text">Education</span> <br> </a>
                <a class="nav-link" href="#" style="font-size: 20px;"> <i class="fa fa-comments"></i> <span class="nav-link-text">Community</span><br></a>
                <a class="nav-link" href="#" style="font-size: 20px;"> <i class="fa fa-tablet"></i> <span class="nav-link-text">App Store</span><br></a>
                <a class="nav-link" href="#" style="font-size: 20px;"> <i class="fa fa-wrench"></i> <span class="nav-link-text">Support</span><br></a>
            </li>
        </ul>
        <li class="nav-item">
            <form class="form-inline" action="stock.php">
                <input class="form-control mr-sm-2" type="text" name="stock" id="stock" placeholder="Search">
                <button class="btn btn-info" type="submit">Search</button>
            </form>
        </li>
        <!-- end of sideBar links-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;" class="nav-link dropdown-toggle">
                    <svg class="svg-inline--fa fa-envelope fa-w-16 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                    </svg>
                    <!-- <i class="fa fa-fw fa-envelope"></i> -->
                    <span class="d-lg-none">Messages  <span class="badge badge-pill badge-primary">12 New</span></span>
                    <span class="indicator text-primary d-none d-lg-block"> <svg class="svg-inline--fa fa-circle fa-w-16 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                </svg><!-- <i class="fa fa-fw fa-circle"></i> --> </span>
                    <!-- <i class="fa fa-fw fa-envelope"></i> -->
                    <span class="d-lg-none">Messages</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">
                    <svg class="svg-inline--fa fa-bell fa-w-14 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="bell" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M433.884 366.059C411.634 343.809 384 316.118 384 208c0-79.394-57.831-145.269-133.663-157.83A31.845 31.845 0 0 0 256 32c0-17.673-14.327-32-32-32s-32 14.327-32 32c0 6.75 2.095 13.008 5.663 18.17C121.831 62.731 64 128.606 64 208c0 108.118-27.643 135.809-49.893 158.059C-16.042 396.208 5.325 448 48.048 448H160c0 35.346 28.654 64 64 64s64-28.654 64-64h111.943c42.638 0 64.151-51.731 33.941-81.941zM224 472a8 8 0 0 1 0 16c-22.056 0-40-17.944-40-40h16c0 13.234 10.766 24 24 24z"></path>
                    </svg>
                    <!-- <i class="fa fa-fw fa-bell"></i> -->
                    <span class="d-lg-none">Alerts <span class="badge badge-pill badge-warning">6 New</span> </span>
                    <span class="indicator text-warning d-none d-lg-block"> <svg class="svg-inline--fa fa-circle fa-w-16 fa-fw" aria-hidden="true" data-prefix="fa" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                </svg><!-- <i class="fa fa-fw fa-circle"></i> --> </span>
                </a>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <span class="input-group-append"> </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="font-size: 18px;"> <i class="fa fa-power-off"></i><span class="nav-link-text">&nbsp;Logout</span><br> </a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper" style="background-color: #dddddd">
    <div class="container-fluid" style="font-size: 18px; background-color: #dddddd">
        <div class = "row">
            <div class = "col-sm-12 col-lg-12">
                <? echo $feedlist->display(20,"News"); ?>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
    </div>

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Your Website 2018</small>
            </div>
        </div>
    </footer>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top"> <i class="fa fa-angle-up"></i> </a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 15px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="font-size: 11px;">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <b><h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5> <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button></b>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" style="font-size: 14px;">Cancel</button>
                <a class="btn btn-primary" href="index.php" style="font-size: 14px;">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- Custom scripts for all pages-->
<script src="js/script.min.js"></script>
<!-- Custom scripts for this page-->
<!-- Toggle between fixed and static navbar-->
<script>
    $('#toggleNavPosition').click(function() {
        $('body').toggleClass('fixed-nav');
        $('nav').toggleClass('fixed-top static-top');
    });

</script>

</body>
</html>
