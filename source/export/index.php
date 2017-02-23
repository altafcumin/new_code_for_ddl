<?php
include('../Session/session.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>list of registeration for conferences</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-3.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

    
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div class="collapse navbar-collapse" id="nav-main">
                    <ul class="nav navbar-nav nav-left">
                        
                        <li><a href=""><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b></a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="../index.php">Registration Form</a></li>
                        <li class="active"><a href="#">Registered Details</a></li>
                        <li><a href="../export.php" Onclick="return ConfirmMsg();">Export all records to Excel</a></li>
                        <li><a href="../Session/logout.php"><b id="logout" style="margin-right:20px;">Log Out</b></a></li>
                        <!--<li style="margin-right:20px; margin-top:5px;"><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                        <p style="font-size:17px; color:#ff0000;">fields with<span id="vld_FirstName" style="color:Red">(*)</span> are mandatory. In date & time field you can just select date, time is optional.</p>
                    </marquee></li>-->
                        
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->
    <div class="container" style="padding:20px;20px;">
      <div class="">
       
        <div class="" style="overflow-x:auto;">
        <table id="employee_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
        <th>Designation</th>
                <th>Email</th>
                <th>School name</th>
                <th>City</th>
                <th>State</th>
                <th>Mobile</th>
                <th>Date</th>
            </tr>
        </thead>
 
        
    </table>
    </div>
      </div>

    </div>
<script>
    function ConfirmMsg()
    {
      var x = confirm("Are you sure! you want to export to Excel?");
      if (x)
          return true;
      else
        return false;
    }
</script> 
<script type="text/javascript">
$( document ).ready(function() {
$('#employee_grid').DataTable({
         "processing": true,
         "sAjaxSource":"response.php",
         "dom": 'lBfrtip',
         "buttons": [
            {
                extend: 'collection',
                text: 'Export Selected Records',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
        });
});
</script>

