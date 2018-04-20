<?php
/*
Dashboard Page for User
*/

?>
<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <style type = "text/css">
      @import "media/css/demo_table_jui.css";
      @import "media/themes/smoothness/jquery-ui-1.8.4custom.css"
    </style>
    
    <script type = "text/javascript" charset = "utf-8">
      $(document).ready(function(){
        $('#datatables').dataTable({
          "sPaginationType": "full_numbers",
          "fixedHeader": true,
          "iDisplayLength": 10
          //"bJQueryUI":true,
        });
      });
         $(document).ready(function(){
        $('#datatables2').dataTable({
          "sPaginationType": "full_numbers",
          "fixedHeader": true,
          "iDisplayLength": 10
          //"bJQueryUI":true,
        });
      });
    </script>
    </head>
    <body>
        <div class ="container-fluid">
        
            <div class ="row">
            
            
            </div>
        
        </div>
    </body>
</html>