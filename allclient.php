<?php session_start(); /* Starts the session */

if (!isset($_SESSION['UserData']['Username'])) {
    header("location:login.php");
    exit;
}
?>

Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Client Infranet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="css/CSS.2.css">-->
        <link rel="stylesheet" href="indexpage1.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="text-center">
    <!-- Link button home-->
    <nav class="bg-dark">
        <a class="navbar-brand" href="indexpage1.php">
            <!-- Button image link -->
            <img src="images/infranet2.png" width="160" height="67" class="d-inline-block align-top" title="Home" alt="">
        </a>
    </nav>
</div>

</br>
<p class="h1" style="text-align: center">Helpdesk Report System </p>
<br>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-evenly mt-3">

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Majlis Bandaraya Shah Alam</h5>
                    </div>

                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150721549192667187/IMG_0568.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="mbsa/mbsabrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Majlis Bandaraya Subang Jaya</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150717611064172544/IMG_0561.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="mbsj/mbsjbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Majlis Perbandaran Klang</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://cdn.discordapp.com/attachments/1139097979110830092/1139099624628555798/IMG_9903.jpg" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="mpk/mpkbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Pejabat Setiausaha Kerajaan Negeri Selangor</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://cdn.discordapp.com/attachments/1139097979110830092/1139099623194116116/IMG_9907.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="suk/sukbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Felcra Bekalan & Perkhidmatan Sdn Bhd</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://cdn.discordapp.com/attachments/1139097979110830092/1139099746380812338/IMG_9892.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="felcra/felcrabrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Jabatan Bomba dan Penyelamat Malaysia</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://cdn.discordapp.com/attachments/1139097979110830092/1139099801485594656/IMG_9887.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="bomba/bombabrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Kolej Poly-Tech MARA Sdn Bhd</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150714964525453344/IMG_0556.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="kptm/kptmbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Lembaga Getah Malaysia</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://cdn.discordapp.com/attachments/1139097979110830092/1139099744761806908/IMG_9899.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="lgm/lgmbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">THP Agro Management</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150711127173513306/IMG_0551.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="thp/thpbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Majlis Bandaraya Petaling Jaya</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150721217628733481/IMG_0567.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="mbpj/mbpjbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>

            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">GIATMARA Malaysia</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1117767219242336266/1150719375511408710/IMG_4652.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="giatmara/giatmarabrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>
            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Agensi Kelayakan Malaysia</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150716325740675102/IMG_0558.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="mqa/mqabrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>
            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Pusat Perubatan Universiti Kebangsaan Malaysia</h5>

                    </div>

                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150720979513913354/IMG_0566.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="ppukm/ppukmbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>
            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Pejabat Daerah dan Tanah Daerah Sabak Bernam</h5>
                    </div>
                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150720773745541160/IMG_0565.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="pdtsb/pdtsbbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>
            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title"> Jabatan Agama Islam Wilayah Persekutuan</h5>
                    </div>
                    <p style="text-align:center;">
                        <img src="https://cdn.discordapp.com/attachments/1139097979110830092/1139099745588088902/IMG_9896.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="jawi/jawibrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>
            <div class="col-md-4 mb-2   ">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title"> Universiti Kuala Lumpur</h5>
                    </div>
                    <p style="text-align:center;">
                        <img src="https://media.discordapp.net/attachments/1139097979110830092/1150718133473128518/IMG_0562.png" class="img-" style="width: 180px; height: 180px;" Max-height 100%>

                        <br>
                        <br>
                        <a href="unikl/uniklbrand.php" class="btn btn-outline-danger">Add New Report</a>
                </div>
            </div>





        </div>
    </div>



    <div class="text-center">
        <div class="card-footer p-3 mb-0 bg-dark text-white">
            <b>​©2023 Infranet System Sdn Bhd</b>
        </div>
    </div>

</body>
</html>