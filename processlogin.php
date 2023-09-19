<?php
require_once("connection/su_conn.php");


$su_username = $_POST["su_username"];
$su_password = $_POST["su_password"];

$return_arr["inputusername"] = $su_username;
$return_arr["inputpassword"] = $su_password;

if (isset($_POST['su_username']) && isset($_POST['su_password'])) {

    $results = $dbmysql->query("SELECT * FROM user WHERE Username = '$su_username' AND Password = '$su_password'");
    $rowresult = $dbmysql->get_row($results);
    if ($mysqli_num_rows($results) > 0) {
        //$newid = $dbmysql->insert_id;
        //$_SESSION['iduser'] = $newid;
        $return_arr["su_username"] = $su_username;
        $return_arr["su_password"] = $su_password;
        //$return_arr["newid"] = $newid;
        $return_arr["loginstatus"] = "success";
    } else {
        $return_arr["loginstatus"] = "failed";
    }
    echo json_encode($return_arr);
}
