<?php

?>
<html>
    
    <style>
       
        body{
            background-image: url("3848765-wallpaper-images-download.jpg");
            background-position: center center;
            background-size: cover;
        }
        #mainone{ 
            background-blend-mode: darken;
            
        }
        #nav1{
            background-image: url(lights.jpg)
        }
    </style>
    
    <head>
        <title> Sample Website Design</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    </head>
    
    <body>
        
        <nav class="navbar navbar-inverse">
            <div id="nav1" class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#">Website Name</a>
                    </div>
              <!-- Links -->
              <ul class="nav navbar-nav">
                <li>
                  <a class="nav-link" href="#">Menu</a>
                </li>
                <li>
                  <a class="nav-link" href="#">About us</a>
                </li>
                <li>
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class ="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Questions
                  <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1-1</a></li>
                      <li><a href="#">Page 1-2</a></li>
                      <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
              </ul>
            </div>
        </nav>
        <div class="container-fluid">
        <div class ="row">
        <div class = "col-lg-2"></div>
        <div class = "col-lg-8">
        <div id="mainone" class ="container-fluid">
        
            <h1>Sample Page</h1>
            <p>Sample Layout</p>
            <p>Scroll this page to see the effect. </p>
        </div>
            </div>
        <div class = "col-lg-2"></div>
        </div>
        </div>
    </body>
    
    
</html>
