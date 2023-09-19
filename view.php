<body>

    <div class="container">
        <div class="row mt-5 ml-5">

            <div class="col-md-8 col-xl-11 text-center ml-sm-2 ml-md-5 ml-lg-5 mt-5">
                <div class="alert alert-danger mb-0">
                    <a href="" class="btn btn-dark mr-5" role="button">Go Back</a>
                </div>

                <div style="overflow-x:auto;">
                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th>Name:</th>
                            <th>Create at:</th>
                        </tr>

                        <?php
                        
                        $conn = mysqli_connect("localhost", "root", "smartreportissb_db", "folder");

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM information_schema.tables where table_name = ?";
                        $result = $conn->query($sql);

                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
         <td>" . $row['name'] . "</td>
         <td>" . $row['created_at'] . "</td>
      </tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }

                        $conn->close();

                        ?>

                    </table>

                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JSs -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/theme-script.js"></script>

</body>

</html>