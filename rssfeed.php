<?php
/**
 * Created by PhpStorm.
 * User: nitin
 * Date: 6/4/18
 * Time: 1:25 PM
 */
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
        .well{
            background-color: gainsboro;
        }
        .h2{
            text-align:center;
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
                <input class="form-control mr-sm-2" name="stock" id="stock" type="text" placeholder="Search">
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
            <div class="col-lg-3 col-lg-offset-5">
            <div class ="well">
                <h2>Welcome to Today's News</h2> 
            </div>
            </div>
        </div>
        <div class = "row">
            <rss xmlns:media="http://search.yahoo.com/mrss/" version="2.0">
            <channel>
                <div class = "well">
                    <item>
                        <title>
                            Aide: EPA's Pruitt sought used Trump hotel mattress
                        </title>
                        <description>
                            <p><a href="https://finance.yahoo.com/news/aide-epas-pruitt-sought-used-trump-hotel-mattress-144602891--politics.html"><img src="http://l2.yimg.com/uu/api/res/1.2/RXkHC_v_reF7F96u2hdMKA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/images/US_AHTTP_AP_NEWSBRIEFS/d1fdab26dc1f4bd09b4cd8a1e61a1ab7_original.jpg" width="130" height="86" alt="Aide: EPA's Pruitt sought used Trump hotel mattress" align="left" title="Aide: EPA's Pruitt sought used Trump hotel mattress" border="0" ></a>Environmental Protection Agency chief Scott Pruitt had a top aide seek a used mattress from the Trump International Hotel and perform other personal chores for him, according to an email and testimony from the aide released Monday. The account from Pruitt scheduling director Millan Hupp is in a letter House Democrats sent Monday to Oversight committee Chairman Trey Gowdy, R-S.C. Hupp appeared before a panel of House oversight committee staffers earlier this month.<p><br clear="all">
                        </description>
                    </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Tesla has reportedly refunded nearly a quarter of US Model 3 pre-orders
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/tesla-reportedly-refunded-nearly-quarter-161200239.html"><img src="http://l2.yimg.com/uu/api/res/1.2/zscd.wg_LiymV6UGTE0EuQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/engadget_479/f6c5640f5e41ece846e13d2fdea8ee0c" width="130" height="86" alt="Tesla has reportedly refunded nearly a quarter of US Model 3 pre-orders" align="left" title="Tesla has reportedly refunded nearly a quarter of US Model 3 pre-orders" border="0" ></a>Tesla raked in hundreds of thousands of pre-orders for its Model 3 after it<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Supreme Court Tosses Gay-Bias Finding Against Wedding-Cake Baker
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/u-supreme-court-throws-gay-142057085.html"><img src="http://l.yimg.com/uu/api/res/1.2/3lh2EZOh5qPognD9q0Mpiw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/en_us/News/Reuters/0734efb8f1f4497ee88eff15493ab6c6" width="130" height="86" alt="Supreme Court Tosses Gay-Bias Finding Against Wedding-Cake Baker" align="left" title="Supreme Court Tosses Gay-Bias Finding Against Wedding-Cake Baker" border="0" ></a>The U.S. Supreme Court threw out a finding that a Colorado baker illegally discriminated when he refused to make a cake to celebrate a same-sex wedding. A seven-justice majority said the Colorado Civil Rights Commission finding in the baker’s case was tainted by animus toward religion. "The commission’s hostility was inconsistent with the First Amendment’s guarantee that our laws be applied in a manner that is neutral toward religion," Kennedy wrote.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        GM VP Mark Reuss apologies after crashing Chevy Corvette ZR1 pace car
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/gm-vp-mark-reuss-crashes-005000095.html"><img src="http://l2.yimg.com/uu/api/res/1.2/Glb_VLHiSX5R7vkrrCgjyQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/autoblog_50/94d8b7219266d2fa63873bf37dedc0a9" width="130" height="86" alt="GM VP Mark Reuss apologies after crashing Chevy Corvette ZR1 pace car" align="left" title="GM VP Mark Reuss apologies after crashing Chevy Corvette ZR1 pace car" border="0" ></a>The 2018 Detroit Grand Prix of Belle Isle was halted by a crash before the race even started - and it had nothing to do with one of the Indy Car drivers. The race was delayed by 27 minutes after the 2019 Chevy Corvette ZR1 pace car drove into a wall during the parade lap. General Motors executive vice president of global product development Mark Reuss was behind the wheel. Both the driver and passenger Mark Sand, an IndyCar official, were unharmed and exited the vehicle after the incident.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>Trump’s Lawyers Say He Is the Law</title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/trump-lawyers-law-110019560.html"><img src="http://l.yimg.com/uu/api/res/1.2/3aIU.fKAPP2a8Vt2YmcqJQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/en_us/News/Reuters/1d6f43918c29fe2682b37522fb198b74" width="130" height="86" alt="Trump’s Lawyers Say He Is the Law" align="left" title="Trump’s Lawyers Say He Is the Law" border="0" ></a>The memos argue, among other things, that one facet of the Justice Department’s investigation of Trump – whether the president tried to obstruct the probe itself – isn’t viable because the president has such broad constitutional authority to end the investigation or pardon those targeted by it that presidential obstruction simply can’t exist. “Put simply, the Constitution leaves no question that the President has exclusive authority over the ultimate conduct and disposition of all criminal investigations and over those executive branch officials responsible for conducting those investigations.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        The new tax law makes hiring your kid a better idea than ever
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/tax-law-makes-hiring-kid-095207400.html"><img src="" width="130" height="86" alt="The new tax law makes hiring your kid a better idea than ever" align="left" title="The new tax law makes hiring your kid a better idea than ever" border="0" ></a>Say you operate your business as a sole proprietorship, as a single-member LLC that is treated as a sole proprietorship for tax purposes, as a husband-wife partnership, or as an LLC that is treated as a husband-wife partnership. Great! That means you can hire your under-age-18 child (as a legitimate employee) and his or her wages will be exempt from Social Security tax, Medicare tax, and federal unemployment (FUTA) tax. Thanks to the Tax Cuts and Jobs Act (TCJA), your employee-child can use his or her standard deduction to shelter up to $12,000 of 2018 wages paid by your business from the federal income tax.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        OPEC And Russia Prepare For Long-Term Control Over Oil Market
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/opec-russia-prepare-long-term-190000826.html"><img src="" width="130" height="86" alt="OPEC And Russia Prepare For Long-Term Control Over Oil Market" align="left" title="OPEC And Russia Prepare For Long-Term Control Over Oil Market" border="0" ></a>OPEC is up for a tough meeting in June, and expectations are that Saudi Arabia and Russia are persuading the others that longer-term stability is preferable to short-term high oil prices<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Bill Clinton bristles at questions on Lewinsky, #MeToo
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/bill-clinton-bristles-questions-lewinsky-metoo-121200509--politics.html"><img src="http://l1.yimg.com/uu/api/res/1.2/NUShU6MNdAbogcSryu4OUQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/images/US_AHTTP_AP_NEWSBRIEFS/c7ed8940287642bf97292a9a143f5dd1_original.jpg" width="130" height="86" alt="Bill Clinton bristles at questions on Lewinsky, #MeToo" align="left" title="Bill Clinton bristles at questions on Lewinsky, #MeToo" border="0" ></a>Former President Bill Clinton says the #MeToo movement is overdue. Just don't ask him about Monica Lewinsky. In an interview with NBC's "Today Show" released Monday, Clinton bristled at questions over whether he should have resigned 20 years ago over his sexual relationship with the White House intern and whether the #MeToo movement has changed his perspective.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Devin Nunes reacts to Trey Gowdy&#39;s comments on Russia probe
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/video/devin-nunes-reacts-trey-gowdys-160618894.html"><img src="http://l.yimg.com/uu/api/res/1.2/Hc3Oo5q.HzgvEeATrda8vA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/video/video.foxbusinessvideos.com/cccdcc5559d5a211b189c417d6e5d29b" width="130" height="86" alt="Devin Nunes reacts to Trey Gowdy&#39;s comments on Russia probe" align="left" title="Devin Nunes reacts to Trey Gowdy&#39;s comments on Russia probe" border="0" ></a>Former House Oversight Chairman Trey Gowdy faces backlash from fellow Republicans for defending the FBI&#39;s use of an informant in the 2016 Trump campaign; reaction from House Intelligence Committee Chairman Devin Nunes.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        &apos;I&apos;m pretty sure Mark and Sheryl do not appreciate what I&apos;m doing&apos;: Meet the whistleblower waging war on Facebook (FB)
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/apos-apos-m-pretty-sure-060000415.html"><img src="http://l1.yimg.com/uu/api/res/1.2/.rRcF1s2sj0dmlFUrI3.Rg--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/businessinsider.com/41bf262a0bde506555495526136a299c" width="130" height="86" alt="&apos;I&apos;m pretty sure Mark and Sheryl do not appreciate what I&apos;m doing&apos;: Meet the whistleblower waging war on Facebook (FB)" align="left" title="&apos;I&apos;m pretty sure Mark and Sheryl do not appreciate what I&apos;m doing&apos;: Meet the whistleblower waging war on Facebook (FB)" border="0" ></a>Sandy Parakilas is the former Facebook employee who blew the whistle on the firm's internal security practices during the Cambridge Analytica scandal. Parakilas said the data breach was a "disaster" for which the only person who should be fired is CEO Mark Zuckerberg himself. Parakilas said he wants to keep holding Facebook to account until it does more to protect elections.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        The next 2 weeks could make or break the &apos;Destiny&apos; franchise
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/next-two-weeks-could-break-185654587.html"><img src="http://l2.yimg.com/uu/api/res/1.2/FPnIGGlu_8CamqnhA8mOAQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/businessinsider.com/39279e1baa80cc240158d51014865dcd" width="130" height="86" alt="The next 2 weeks could make or break the &apos;Destiny&apos; franchise" align="left" title="The next 2 weeks could make or break the &apos;Destiny&apos; franchise" border="0" ></a>Bungie plans to reveal the big September expansion for "Destiny 2" at noon ET on Tuesday in a Twitch livestream. To its credit, Bungie has shown in recent months that it's listening to players and wants to make the game something fans love again.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>Raw: SpaceX Rocket Carries Satellite Into Orbit</title>
                    <description>
                        <p><a href="https://finance.yahoo.com/video/raw-spacex-rocket-carries-satellite-055856096.html"><img src="http://l1.yimg.com/uu/api/res/1.2/5ltRvgLLppHF4BuIIUGvXQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/video/video.associatedpressfree.com/7a9f3a881ef1ac6d78a56bcef8734e0d" width="130" height="86" alt="Raw: SpaceX Rocket Carries Satellite Into Orbit" align="left" title="Raw: SpaceX Rocket Carries Satellite Into Orbit" border="0" ></a>A SpaceX Falcon 9 rocket carried a communications satellite into orbit early Monday. The SES-12 satellite separated from the Falcon 9 rocket about 32 minutes after launch. (June 4)<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        With deal to close this week, Bayer to retire Monsanto name
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/deal-close-week-bayer-retire-073451674.html"><img src="" width="130" height="86" alt="With deal to close this week, Bayer to retire Monsanto name" align="left" title="With deal to close this week, Bayer to retire Monsanto name" border="0" ></a>Germany's Bayer will wrap up the $63 billion takeover of Monsanto on Thursday and also retire the U.S. seeds maker's 117 year-old name. The German drugmaker had received all required approvals from regulatory ...<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Airbus sales chief defiant on A330neo demand as Boeing seals new win
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/airbus-sales-chief-says-not-021032671.html"><img src="http://l1.yimg.com/uu/api/res/1.2/8Xo6p2lecAhSsyFHLbv3Ww--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/images/US_AHTTP_REUTERS_OLUSBUS_WRAPPER_H_LIVE_NEW/2018-06-04T031543Z_3_LYNXNPEE5302N_RTROPTP_3_EU-USA-WTO-AIRCRAFT_original.jpg" width="130" height="86" alt="Airbus sales chief defiant on A330neo demand as Boeing seals new win" align="left" title="Airbus sales chief defiant on A330neo demand as Boeing seals new win" border="0" ></a>The head of airplane sales at Airbus (AIR.PA) dismissed concerns about a sharp drop in orders for the A330neo jet and predicted European wide-body demand would start to recover this year as rival Boeing extended a series of wins in the lucrative segment. The same airline may expand a leased fleet of A320neos.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>Social Security’s Bend Points: What Are They?</title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/social-security-bend-points-161500206.html"><img src="http://l1.yimg.com/uu/api/res/1.2/6S03nqJYICOO9zD0ITpuug--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/0142cb53b01fba489514e30395e3f063" width="130" height="86" alt="Social Security’s Bend Points: What Are They?" align="left" title="Social Security’s Bend Points: What Are They?" border="0" ></a>Understanding bend points is critical to understanding how much money you&apos;ll receive in Social Security when you retire.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Justices side with Colorado baker on same-sex wedding cake
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/justices-side-colorado-baker-same-sex-wedding-cake-142744589--politics.html"><img src="http://l2.yimg.com/uu/api/res/1.2/kxC3llWkV4oxOnlchP7DoQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/images/US_AHTTP_AP_FINANCIALTIMES/0786e64e18ef48d49faf089caa1b977d_original.jpg" width="130" height="86" alt="Justices side with Colorado baker on same-sex wedding cake" align="left" title="Justices side with Colorado baker on same-sex wedding cake" border="0" ></a>The Supreme Court ruled Monday for a Colorado baker who wouldn't make a wedding cake for a same-sex couple in a limited decision that leaves for another day the larger issue of whether a business can invoke religious objections to refuse service to gay and lesbian people. The justices' decision turned on what the court described as anti-religious bias on the Colorado Civil Rights Commission when it ruled against baker Jack Phillips. The justices voted 7-2 that the commission violated Phillips' rights under the First Amendment.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Elon Musk’s SpaceX Delays Plans for First Space Tourists to Circle Moon
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/elon-musk-spacex-delays-plans-053300860.html"><img src="" width="130" height="86" alt="Elon Musk’s SpaceX Delays Plans for First Space Tourists to Circle Moon" align="left" title="Elon Musk’s SpaceX Delays Plans for First Space Tourists to Circle Moon" border="0" ></a>SpaceX has indicated it won’t launch a pair of space tourists to loop around the moon this year as previously announced, the latest sign that technical and production challenges are disrupting founder Elon Musk’s plans for human exploration of the solar system. A new timetable for the flight—now postponed until at least mid-2019 and likely longer—hasn’t been released by Space Exploration Technologies Corp., the formal name of the closely held company. Over the weekend, company spokesman James Gleeson confirmed the private moon launch has been postponed, without indicating when it might occur.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        The Impact of Student Debt on the Millennial Mindset
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/impact-student-debt-millennial-mindset-130028090.html"><img src="http://l2.yimg.com/uu/api/res/1.2/1wQvG6JoYYTYLz0f7uQHaQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/credit.com/4d20359d397f3f4f1f446d18f1f02118" width="130" height="86" alt="The Impact of Student Debt on the Millennial Mindset" align="left" title="The Impact of Student Debt on the Millennial Mindset" border="0" ></a>The national student loan debt in America is at a record high of $1.45 trillion. A joint study from LendEDU and Laurel Road found that 74.3% of those surveyed feel stress related to the student loan debt on a daily basis. In addition, 55.6% admitted that they felt self-conscious or embarrassed by their student loan balance.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Celgene (CELG) Down 7.9% Since Earnings Report: Can It Rebound?
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/celgene-celg-down-7-9-084008640.html"><img src="http://l.yimg.com/uu/api/res/1.2/FArnZnmq1_PKRPGE.gmG8w--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/zacks.com/ac90b3d74679f6d01a122aa033d8a9a4" width="130" height="86" alt="Celgene (CELG) Down 7.9% Since Earnings Report: Can It Rebound?" align="left" title="Celgene (CELG) Down 7.9% Since Earnings Report: Can It Rebound?" border="0" ></a>Celgene (CELG) reported earnings 30 days ago. What&apos;s next for the stock? We take a look at earnings estimates for some clues.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Oil falls, U.S. crude hits lowest since early April
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/crude-oil-prices-ease-record-034215716.html"><img src="http://l1.yimg.com/uu/api/res/1.2/yI0mHQ3QjY5vGSqCiUhxeA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/images/SG_AHTTP_OLINBUS_Wrapper_NewFeed_1/2018-06-04T034215Z_1_LYNXNPEE5306F_RTROPTP_3_GLOBAL-OIL_original.jpg" width="130" height="86" alt="Oil falls, U.S. crude hits lowest since early April" align="left" title="Oil falls, U.S. crude hits lowest since early April" border="0" ></a>Oil prices slid on Monday, with U.S. crude futures dropping to their lowest since April 10, breaking below technical support levels as investors kept selling on growing U.S. production, possible global supply growth and nagging trade tensions. Benchmark Brent crude oil lost $1.10 a barrel, or 1.4 percent, to $75.69 a barrel by 12:00 p.m. (1600 GMT) U.S. light crude was down 80 cents, or 1.2 percent, at $65.01 a barrel. "We are breaking key levels of support now," said Phillip Streible, analyst at RJO Futures in Chicago.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Why the Time Warner deal could be &apos;uniquely significant&apos; for AT&T&apos;s CEO
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/time-warner-deal-uniquely-significant-atandts-ceo-162158053.html"><img src="http://l.yimg.com/uu/api/res/1.2/RROnThboIezzjmfpCDOrkg--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en/homerun/feed_manager_auto_publish_494/465ea145db260bef96b071fef78de2c4" width="130" height="86" alt="Why the Time Warner deal could be &apos;uniquely significant&apos; for AT&T&apos;s CEO" align="left" title="Why the Time Warner deal could be &apos;uniquely significant&apos; for AT&T&apos;s CEO" border="0" ></a>This month, a federal judge in Washington, DC, is expected to hand down a decision in one of the most closely watched antitrust trials in decades.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>Bad News for Sears Is Good News for J.C. Penney</title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/bad-news-sears-good-news-141500094.html"><img src="http://l.yimg.com/uu/api/res/1.2/VLyH4hdG3scPOYt6kuhGWw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/45bd2e66500a430942f8ac215cbf91b8" width="130" height="86" alt="Bad News for Sears Is Good News for J.C. Penney" align="left" title="Bad News for Sears Is Good News for J.C. Penney" border="0" ></a>More than 15% of the remaining Sears full-line store base is set to close by early September. That represents a huge revenue growth opportunity for J.C. Penney.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Microsoft discounts the Xbox One X for its E3 week sale
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/microsoft-discounts-xbox-one-x-142800924.html"><img src="http://l2.yimg.com/uu/api/res/1.2/RjnwoX6FLoRB7PvATUB3qQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/engadget_479/7111b8bfaccd4e1c5e9fc7d424c111ff" width="130" height="86" alt="Microsoft discounts the Xbox One X for its E3 week sale" align="left" title="Microsoft discounts the Xbox One X for its E3 week sale" border="0" ></a>Microsoft is cutting the price of the 4K-friendly Xbox One X for the first<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        This weed-killing AI robot uses 20 percent less herbicide...
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/video/weed-killing-ai-robot-uses-123000542.html"><img src="http://l2.yimg.com/uu/api/res/1.2/dyQDlI2b5Wf9q90M.2WJCg--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/video/video.cnbc2.com/37d2e99075bec87badea8b162cd6116f" width="130" height="86" alt="This weed-killing AI robot uses 20 percent less herbicide..." align="left" title="This weed-killing AI robot uses 20 percent less herbicide..." border="0" ></a>Smart weed-killing robots are here and could soon reduce the need for herbicides and genetically modified crops. Swiss company EcoRobotix has a solar-powered robot that can work for up to 12 hours detecting and destroying weeds. Ecorobotix says the rob...<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>9 Stocks Warren Buffett Loves More Than Ever</title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/9-stocks-warren-buffett-loves-111013893.html"><img src="http://l1.yimg.com/uu/api/res/1.2/hhSnaulfMn0iIlRk6Oy6Aw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/08ac84e343627224f682f9d2c63d12a2" width="130" height="86" alt="9 Stocks Warren Buffett Loves More Than Ever" align="left" title="9 Stocks Warren Buffett Loves More Than Ever" border="0" ></a>Berkshire added to seven of its stock positions in the first quarter<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        The 3 Things Salesforce Executives Can&apos;t Stop Talking About
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/3-things-salesforce-executives-apos-123300084.html"><img src="http://l1.yimg.com/uu/api/res/1.2/seaF_p2VSeXEMS7y0TeArw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/23e4d7fc6ad085c593c4bc968ea2929d" width="130" height="86" alt="The 3 Things Salesforce Executives Can&apos;t Stop Talking About" align="left" title="The 3 Things Salesforce Executives Can&apos;t Stop Talking About" border="0" ></a>The company is pursuing a number of strategies to achieve its lofty goals.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Boeing Sees Two-Year Wait for World's Biggest Fighter Jet Deal
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/boeing-sees-two-wait-worlds-230000960.html"><img src="http://l.yimg.com/uu/api/res/1.2/ubPrei.KxO57Ny_MQjagmQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/en_us/News/Reuters/c0258e119b48b884d1db554422bc3803" width="130" height="86" alt="Boeing Sees Two-Year Wait for World's Biggest Fighter Jet Deal" align="left" title="Boeing Sees Two-Year Wait for World's Biggest Fighter Jet Deal" border="0" ></a>It could be another two years before India picks the winner of the world’s biggest combat aircraft order, according to a senior Boeing Co. executive. Boeing is well placed in the race to supply the Indian Air Force with 110 fighter jets, Gene Cunningham, Boeing vice president of global defense sales, told Bloomberg News on Sunday on the sidelines of a security forum in Singapore.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Lava flow over highway in Hawaii forces another round of evacuations
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/lava-flow-over-highway-hawaii-160100827.html"><img src="http://l2.yimg.com/uu/api/res/1.2/tHR35EfUYk7Alo50Y1dNsw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/autoblog_50/ef58b17525b59bf6b7f39298aaad4766" width="130" height="86" alt="Lava flow over highway in Hawaii forces another round of evacuations" align="left" title="Lava flow over highway in Hawaii forces another round of evacuations" border="0" ></a>500 homes completely cut off from the rest of the island by road<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Air NZ to lease two Boeing 777s to cover for 787s with Rolls-Royce engine problems
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/air-nz-lease-two-boeing-030336638.html"><img src="" width="130" height="86" alt="Air NZ to lease two Boeing 777s to cover for 787s with Rolls-Royce engine problems" align="left" title="Air NZ to lease two Boeing 777s to cover for 787s with Rolls-Royce engine problems" border="0" ></a>Air New Zealand Ltd will lease two Boeing Co 777s to cover for 787-9s with Rolls-Royce Holdings Plc engines that have maintenance issues, its chief executive said. "Any one point in time we are planning to have between zero to two aircraft that will be cycling off to have aircraft inspections and/or maintenance," CEO Christopher Luxon told Reuters on the sidelines of an airline industry conference. "Therefore we will have two dry-lease aircraft we can operate so we can restore the schedule and keep our customers moving," he said on Monday.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Kudlow Says Don't Blame Trump as China Warns of Trade Pullback
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/china-says-trade-progress-off-042731365.html"><img src="http://l1.yimg.com/uu/api/res/1.2/eFH.cRanGOGw3OcxwCXaJA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/en_us/News/Reuters/bddf787edce27b44d040d2f2d9b7b704" width="130" height="86" alt="Kudlow Says Don't Blame Trump as China Warns of Trade Pullback" align="left" title="Kudlow Says Don't Blame Trump as China Warns of Trade Pullback" border="0" ></a>Blame China and those who are breaking trade rules, not Donald Trump, White House economic adviser Larry Kudlow said as China warned that all commitments so far in talks with the U.S. over trade will be withdrawn if the president carries out his threat to impose tariffs. Kudlow said rule-breaking is going on “all over the place” and Trump is simply responding to decades of trade abuse.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Apple’s About to Make Your iPhone Cooler (And Help You Use It Less)
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/apple-iphone-cooler-help-less-194106214.html"><img src="http://l2.yimg.com/uu/api/res/1.2/u6msH4xn8PjSR96HeJ8HgA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/fortune_175/2eb319ac326cca710ac11a9fa68d656e" width="130" height="86" alt="Apple’s About to Make Your iPhone Cooler (And Help You Use It Less)" align="left" title="Apple’s About to Make Your iPhone Cooler (And Help You Use It Less)" border="0" ></a>Expected new iOS features should help users make the best of their screen time, in a few different senses.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Nvidia makes big push into artificial intelligence, Amazon stock to hit $2K: Analyst, Bayer to retire Monsanto name
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/video/nvidia-makes-big-push-artificial-141152107.html"><img src="http://l1.yimg.com/uu/api/res/1.2/sj4cZ02IxalaWV.oqPCSaA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/https://media.zenfs.com/creatr-images/GLB/2018-06-04/f8711790-6800-11e8-ad2e-5ba963ff3e12_AP_527887341994.jpg" width="130" height="86" alt="Nvidia makes big push into artificial intelligence, Amazon stock to hit $2K: Analyst, Bayer to retire Monsanto name" align="left" title="Nvidia makes big push into artificial intelligence, Amazon stock to hit $2K: Analyst, Bayer to retire Monsanto name" border="0" ></a>Nvidia, Amazon, Monsanto and MGM are the companies to watch.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Looking for a Growth Stock? Why It is Time to Focus on Momo (MOMO)
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/looking-growth-stock-why-time-124112530.html"><img src="http://l1.yimg.com/uu/api/res/1.2/i384vXPkfG8IPBw9D8cv7A--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/zacks.com/670d1917693293f70179651625deb88f" width="130" height="86" alt="Looking for a Growth Stock? Why It is Time to Focus on Momo (MOMO)" align="left" title="Looking for a Growth Stock? Why It is Time to Focus on Momo (MOMO)" border="0" ></a>Momo (MOMO) seems well-positioned for future earnings growth and it is seeing rising earnings estimates as well, coupled with a solid Zacks Rank.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        As U.S. Confronts China on Trade, Taiwan Tensions Quietly Build
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/u-confronts-china-trade-taiwan-084516189.html"><img src="http://l1.yimg.com/uu/api/res/1.2/Iw5wVMfjWa3c1UTSAaxLew--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/en_us/News/Reuters/ad2ac17016959001cea5559be7788c2d" width="130" height="86" alt="As U.S. Confronts China on Trade, Taiwan Tensions Quietly Build" align="left" title="As U.S. Confronts China on Trade, Taiwan Tensions Quietly Build" border="0" ></a>Concern about Taiwan -- and recent sparring between Beijing and Washington over the democratically run island -- percolated discussions at the annual IISS Shangri-La Dialogue, which was otherwise focused on action further south. U.S. Secretary of Defense James Mattis warned China against disrupting the “status quo” on Taiwan, as Beijing steps up air-and-sea maneuvers nearby and accelerates efforts to isolate Taipei. Taiwan’s advocates in Washington have intensified calls for more U.S. support as President Donald Trump confronts China on a range of trade and security issues.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        How Altria&apos;s Transforming Itself to Keep Its Lead
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/altria-apos-transforming-itself-keep-120200987.html"><img src="http://l.yimg.com/uu/api/res/1.2/KraR8EZKRL.DxeuY0uHHTA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/ba25aec908efd210ee37d7459c57d7bb" width="130" height="86" alt="How Altria&apos;s Transforming Itself to Keep Its Lead" align="left" title="How Altria&apos;s Transforming Itself to Keep Its Lead" border="0" ></a>Find out what the tobacco giant&apos;s latest strategic move is and why it&apos;s important.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Should You Sell Royal Dutch Shell plc (AMS:RDSA) At This PE Ratio?
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/sell-royal-dutch-shell-plc-103418384.html"><img src="http://l2.yimg.com/uu/api/res/1.2/np9.AKA4NtxJ946f2Y4hFg--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/simply_wall_st__316/8a19c36061392ad37528e1897136f97f" width="130" height="86" alt="Should You Sell Royal Dutch Shell plc (AMS:RDSA) At This PE Ratio?" align="left" title="Should You Sell Royal Dutch Shell plc (AMS:RDSA) At This PE Ratio?" border="0" ></a>Royal Dutch Shell plc (ENXTAM:RDSA) is currently trading at a trailing P/E of 18.6x, which is higher than the industry average of 14.6x. While this makes RDSA appear like aRead More...<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        This Company Has the Best Dividend Record in Its Industry. Is It a Buy?
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/company-best-dividend-record-industry-123300840.html"><img src="http://l1.yimg.com/uu/api/res/1.2/jZfdYaGztBU1Vank5.12Eg--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/71ae3db891b5f01068e70099c8601369" width="130" height="86" alt="This Company Has the Best Dividend Record in Its Industry. Is It a Buy?" align="left" title="This Company Has the Best Dividend Record in Its Industry. Is It a Buy?" border="0" ></a>American States Water has an incredible dividend streak going, but is this dividend champion worth buying today?<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        These Maps Show How to Unlock North Korea's Economy
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/maps-show-unlock-north-koreas-200000905.html"><img src="http://l2.yimg.com/uu/api/res/1.2/aqCuCGgRY8mom3F0XUB.2g--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/en_us/News/Reuters/ab2c60b008b2eec6c29eefeb880e2205" width="130" height="86" alt="These Maps Show How to Unlock North Korea's Economy" align="left" title="These Maps Show How to Unlock North Korea's Economy" border="0" ></a>The prospect of a summit between Donald Trump and Kim Jong Un this month is sharpening focus on the dividends should North Korea -- one of the world’s poorest nations -- become plugged into one of the globe’s most dynamic economic regions. Should real progress be made, South Korean President Moon Jae-in’s plan involves the development of three economic belts that would link his country’s industrial heartland with the North and then with China and Russia. One of the first steps would be reopening rail links and roads between South Korea and the North, a move Moon and Kim agreed to during their April summit.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        What does Micron Technology Inc’s (NASDAQ:MU) Balance Sheet Tell Us About Its Future?
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/does-micron-technology-inc-nasdaq-135420416.html"><img src="http://l.yimg.com/uu/api/res/1.2/eoAsglpRbFwVPxqI2E9YmQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/simply_wall_st__316/0a4b1c985b5bcf5ea1415794b2cc4824" width="130" height="86" alt="What does Micron Technology Inc’s (NASDAQ:MU) Balance Sheet Tell Us About Its Future?" align="left" title="What does Micron Technology Inc’s (NASDAQ:MU) Balance Sheet Tell Us About Its Future?" border="0" ></a>The size of Micron Technology Inc (NASDAQ:MU), a US$72.57B large-cap, often attracts investors seeking a reliable investment in the stock market. Big corporations are much sought after by risk-averse investorsRead More...<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        The Keys to Live Financially Secure Before Retirement
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/video/keys-live-financially-secure-retirement-080000222.html"><img src="http://l1.yimg.com/uu/api/res/1.2/t_8Hl6eg611qvZW2SewWlQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/video/gobankingrates_644/2122023cc13e2b00e16eff163cafea60" width="130" height="86" alt="The Keys to Live Financially Secure Before Retirement" align="left" title="The Keys to Live Financially Secure Before Retirement" border="0" ></a>When it comes to retirement planning, it&#39;s best to listen to the experts. Here&#39;s what financial planner Ted Jenkin has to say about his journey to financial success.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>3 of the Cheapest Pot Stocks in the World</title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/3-cheapest-pot-stocks-world-154100862.html"><img src="http://l.yimg.com/uu/api/res/1.2/rWLJrHewkhTMPJ4lnZQSrA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/afd83bf92a3290929cf681482cb2dc13" width="130" height="86" alt="3 of the Cheapest Pot Stocks in the World" align="left" title="3 of the Cheapest Pot Stocks in the World" border="0" ></a>These marijuana stocks are valued at less than 30 times Wall Street&apos;s profit forecast for 2019.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Warriors star Stephen Curry explains when he knew he&apos;d &apos;made it&apos;
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/warriors-star-stephen-curry-explains-150000459.html"><img src="http://l1.yimg.com/uu/api/res/1.2/9Odk8IyeubZGI3bkrWiXUw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/video/video.cnbc2.com/71ac41573af57d97968cdf666f3bc6a9" width="130" height="86" alt="Warriors star Stephen Curry explains when he knew he&apos;d &apos;made it&apos;" align="left" title="Warriors star Stephen Curry explains when he knew he&apos;d &apos;made it&apos;" border="0" ></a>Basketball sensation Steph Curry says there were three specific times in his career that he felt truly successful.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Trump aide says Canada&#39;s Trudeau overreacting to trade dispute
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/trump-aide-says-canadas-trudeau-overreacting-trade-dispute-162046924--finance.html"><img src="http://l.yimg.com/uu/api/res/1.2/3qCUX9YNMdZ3OsuQFX6nfQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en_us/News/Reuters/2018-06-03T162046Z_2_LYNXNPEE520HC_RTROPTP_2_USA-TRADE-CANADA.JPG" width="130" height="86" alt="Trump aide says Canada&#39;s Trudeau overreacting to trade dispute" align="left" title="Trump aide says Canada&#39;s Trudeau overreacting to trade dispute" border="0" ></a>Trade frictions between the United States and Canada are a "family quarrel," President Donald Trump's economic adviser said on Sunday, brushing aside concerns expressed by Canadian Prime Minister Justin Trudeau as an overreaction. The Trump administration said on Thursday it was moving ahead with tariffs on aluminum and steel imports from Canada, Mexico and the European Union, ending a two-month exemption and potentially setting the stage for a trade war with some of America's top allies.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Honda's China sales slump for 4th month amid quality issues
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/honda-motors-may-china-vehicle-061532777.html"><img src="http://l2.yimg.com/uu/api/res/1.2/.MZ0aJsCG1BqGjQnQbXg7A--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/images/US_AHTTP_REUTERS_OLUSBUS_WRAPPER_H_LIVE_NEW/2018-06-04T061532Z_1_LYNXNPEE530BY_RTROPTP_3_AUTOSHOW-TOKYO_original.jpg" width="130" height="86" alt="Honda's China sales slump for 4th month amid quality issues" align="left" title="Honda's China sales slump for 4th month amid quality issues" border="0" ></a>Honda Motor Co Ltd's sales in China slumped for a fourth consecutive month in May, due to the lingering impact from a quality issue associated with the automaker's popular CR-V sport-utility vehicle. The Japanese automaker's sales in China fell 15.3 percent in May from a year earlier to 99,263 vehicles, it said on Monday. In early March, Honda decided to halt new sales of its CR-V and noted the company might have to do the same with the Civic after a Chinese quality watchdog rejected the automaker's plan to recall 350,000 of the cars to fix the problem.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Boeing dampens talk of redesign for potential new jet
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/boeing-executive-says-oil-over-65-leads-increased-043017606--finance.html"><img src="http://l.yimg.com/uu/api/res/1.2/B7ZJ90tfIzBtagd65RAGqA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en_us/News/Reuters/2018-06-03T051630Z_2_LYNXNPEE5204F_RTROPTP_2_BOEING-RESULTS.JPG" width="130" height="86" alt="Boeing dampens talk of redesign for potential new jet" align="left" title="Boeing dampens talk of redesign for potential new jet" border="0" ></a>Boeing Co is prioritizing passengers over cargo belly-space in its potential new mid-sized airplane, a senior executive said on Sunday, dampening speculation of a redesign to accommodate freight demand from Asian airlines. Industry sources say the proposed 220 to 270 seat plane has been designed with an elliptical fuselage leaving less space for cargo in order to make it more aerodynamic and cheaper to fly. Randy Tinseth, Boeing's vice president of marketing for commercial planes, said the company was reluctant to change the design because larger wide body jets were better suited for cargo.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        US singled out by G7 allies over steel and aluminum tariffs
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/us-singled-g7-allies-over-203405393.html"><img src="http://l2.yimg.com/uu/api/res/1.2/Zvs09xTDPK4RbGL3kzy2Mw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/images/US_AHTTP_AP_HEADLINES_BUSINESS/7f0f75c9865a4778b81cf2708e66876c_original.jpg" width="130" height="86" alt="US singled out by G7 allies over steel and aluminum tariffs" align="left" title="US singled out by G7 allies over steel and aluminum tariffs" border="0" ></a>The United States was singled out by some of its closest allies Saturday over the imposition of tariffs that they warn will undermine open trade and weaken confidence in the global economy. The dispute over U.S. President Donald Trump's new levies on steel and aluminum imports is driving a wedge in the G7 group of industrial nations. Following Saturday's conclusion of a three-day meeting of G7 finance ministers, Canadian Finance Minister Bill Morneau issued a summary saying the other six members want Trump to hear their message of "concern and disappointment" over the U.S. trade actions.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Airbus Is Said to Be Front-Runner for $6.6 Billion Vistara Order
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/airbus-said-front-runner-6-101017791.html"><img src="http://l2.yimg.com/uu/api/res/1.2/phisOQcEx3D4a1UEJl9DcQ--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://globalfinance.zenfs.com/en_us/News/Reuters/f10158ca3dae8839f471603f82d777ea" width="130" height="86" alt="Airbus Is Said to Be Front-Runner for $6.6 Billion Vistara Order" align="left" title="Airbus Is Said to Be Front-Runner for $6.6 Billion Vistara Order" border="0" ></a>Airbus SE is favored to pull in an order from Singapore Airlines Ltd. affiliate Vistara for as many as 60 new-engine single-aisle airliners to gain a stronger foothold in the booming Indian market, according to people familiar with the negotiations. The airline is leaning toward buying the A320neo jets after a contest with Boeing Co.’s 737 Max model, according to the people who asked not to be identified as the information isn’t public. The airline hasn’t signed a final deal yet and talks are continuing.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>Why You Need a Retirement Backup Plan</title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/why-retirement-backup-plan-133900433.html"><img src="http://l2.yimg.com/uu/api/res/1.2/qLVthl.QSLOt9RX0A1cMLw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/701ebfcfda3a7eefac86e5c865b0afa0" width="130" height="86" alt="Why You Need a Retirement Backup Plan" align="left" title="Why You Need a Retirement Backup Plan" border="0" ></a>And how to figure out yours.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        Hold Harmless Has Come Back to Haunt Many Social Security Recipients in 2018
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/hold-harmless-come-back-haunt-110600376.html"><img src="http://l1.yimg.com/uu/api/res/1.2/Dbj3fWX4cRqHT.0yRn98Pw--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en-US/homerun/motleyfool.com/e490489dec3fc12c45ca6760b18369f9" width="130" height="86" alt="Hold Harmless Has Come Back to Haunt Many Social Security Recipients in 2018" align="left" title="Hold Harmless Has Come Back to Haunt Many Social Security Recipients in 2018" border="0" ></a>Half of all seniors received nothing -- or virtually nothing -- extra as a result of Social Security&apos;s 2% &quot;raise&quot; in 2018, new survey shows.<p><br clear="all">
                    </description>
                </item>
                </div>
                <div class = "well">
                <item>
                    <title>
                        The Latest: China warns US no deal if tariffs go ahead
                    </title>
                    <description>
                        <p><a href="https://finance.yahoo.com/news/latest-china-warns-us-no-deal-tariffs-ahead-060615227--finance.html"><img src="http://l2.yimg.com/uu/api/res/1.2/G0y8Pj5Kx2FlZOJHuw2rnA--/YXBwaWQ9eXRhY2h5b247aD04Njt3PTEzMDs-/http://media.zenfs.com/en_us/News/ap_webfeeds/d279a7a0100046dbabee055bf4e1c53a.jpg" width="130" height="86" alt="The Latest: China warns US no deal if tariffs go ahead" align="left" title="The Latest: China warns US no deal if tariffs go ahead" border="0" ></a>BEIJING (AP) — The Latest on trade talks between the U.S. and China<p><br clear="all">
                    </description>
                </item>
                </div>
            </channel>
        </rss>

            
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
