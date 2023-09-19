<?php session_start(); /* Starts the session */

/* Check Login form submitted */
if (isset($_POST['Submit'])) {
    /* Define username and associated password array */
    $logins = array('Infranet' => 'infranet2023', 'username1' => 'password1', 'username2' => 'password2');

    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    /* Check Username and Password existence in defined array */
    if (isset($logins[$Username]) && $logins[$Username] == $Password) {
        /* Success: Set session variables and redirect to Protected page  */
        $_SESSION['UserData']['Username'] = $logins[$Username];
        header("location:indexpage1.php");
        exit;
    } else {
        /*Unsuccessful attempt: Set error message */
        $msg = "<span style='color:red'>Invalid Login, Incorrect username or password</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Infranet Smart System Report/css/CSS1.css">

    <title>Login Page</title>
</head>


<div class="card text-center">
    <!-- Link button home-->
    <nav class="bg-dark">
        <a class="navbar-brand" href="#">
            <!-- Button image link -->
            <img src="images/infranet2.png" width="160" height="67" class="d-inline-block align-top" alt="">
        </a>
    </nav>
</div>

<body class="my-login-page">

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4" id="frm">

                                    <div class="text-center">
                                        <img src="images/infa2.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Infranet Helpdesk Support System</h4>
                                    </div>

                                    <!--Form login -->

                                    <form action="" method="post" name="Login_Form">

                                        <p>Please login to your account:</p></br>
                                        <?php if (isset($msg)) { ?>
                                            <td colspan="2" valign="center" valign="top"><?php echo $msg; ?></td>
                                            </tr>
                                        <?php } ?>
                                        <div class="form-group">
                                            <label for="exampleinputusername">Username:</label>
                                            <input type="text" class="form-control" id="Username" name="Username" placeholder="Enter username" required />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleinputpassword">Password:</label>
                                            <input type="Password" class="form-control" id="Password" name="Password" placeholder="Enter password" required />
                                        </div>
                                        <div id="loginstatus"></div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button input name="Submit" type="submit" value="login" class="btn btn-dark">Login</button></br>


                                        </div>

                                    </form>

                                    <!-- end form-->

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">"We are more than just a company"</h4>
                                    <p class="small mb-5">~ANYTIME, ANYWHERE & MANAGEABLE

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="card text-center">
        <div class="card-footer p-3 mb-0 bg-dark text-white">
            <b>​©2023 Infranet System Sdn Bhd</b>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="application/javascript" src="js/bootstrap.js"></script>
    <script type="application/javascript" src="masuk.js"></script>



</body>

</html>