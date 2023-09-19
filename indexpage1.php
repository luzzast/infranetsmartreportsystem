<?php session_start(); /* Starts the session */

?>

Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Infranet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="css/CSS.2.css">-->
    <link rel="stylesheet" href="indexpage1.css">

</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="text-center">
    <!-- Link button home-->
    <nav class="bg-dark">
        <a class="navbar-brand" href="">
            <!-- Button image link -->
            <img src="images/infranet2.png" width="160" height="67" class="d-inline-block align-top" title="Home" alt="">
        </a>
    </nav>
</div>

</br><br>

<p class="h1" style="text-align: center">Helpdesk Report System </p>
<br><br>
<br><br>




<body class="bg-light">

    <div class="container">
        <div class="row justify-content-evenly mt-3">

            <div class="col-md-6 mb-3   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title" style="text-align: center">ADD NEW REPORT</h5>
                    </div>

                    <p style="text-align:center;">
                        <img src="https://icons.iconarchive.com/icons/dryicons/simplistica/128/folder-add-icon.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="allclient.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-6 mb-3   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title" style="text-align: center">ALL REPORT LISTS</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://icons.iconarchive.com/icons/aha-soft/standard-portfolio/128/Inventory-icon.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="allreport.php" class="btn btn-outline-success">View All Report</a>
                </div>
            </div>
        </div>
    </div>

    <card class="fixed-bottom bg-dark">
        <div class="container-fluid p-2 mb-0 bg-dark text-white text-center">
            <b>​©2023 Infranet Systems Sdn Bhd</b>
        </div>
    </card>

</body>
<script src="js/jquery-3.6.1.min.js"></script>
<script type="application/javascript" src="js/bootstrap.js"></script>

</html>