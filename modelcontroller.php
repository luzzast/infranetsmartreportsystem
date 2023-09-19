<?php


require_once("connection/su_conn.php");

$su_username = $_POST['su_username'];
$su_password = $_POST['su_password'];

$return_arr["inputusername"] = $su_username;
$return_arr["inputpassword"] = $su_password;


$loginquery = $dbmysql->query("SELECT * FROM user WHERE Username = '$su_username' AND Password = '$su_password'");
$rows_affected = $dbmysql->get_row($loginquery);
foreach ($rows_affected->fetch_all() as [0 => $loginquery[]]); // no body needed

if ($rows_affected > 0) {
    $return_arr["loginstatus"] = "success";
}
else {
    $return_arr["loginstatus"] = "failed";

}

    echo json_encode($return_arr);
?>