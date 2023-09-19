<?php
require_once("../connection/su_conn.php");

$su_modelname = $_POST['modelname'];
$su_serialnum = $_POST['serialnum'];
$su_probdesc = $_POST['probdesc'];
$su_picname = $_POST['picname'];
$su_nocontact = $_POST['nocontact'];
$su_address = $_POST['address'];
$su_date = $_POST['date'];
$su_caseid = $_POST['caseid'];
$su_createdby = $_POST['createdby'];
$su_proses = $_POST['proses'];
$su_nota = $_POST['nota'];
$su_reportid = $_POST['reportid'];

//DELETE REPORT
$sudo_query_delete = "DELETE FROM mbsahp WHERE id = $su_reportid";

$delete_result = $dbmysql->query($sudo_query_delete);


if ($delete_result == 1)
    $return_arr["status"] = "success"; //update success information
else
    $return_arr["status"] = "failed"; //failed information



$return_arr["modelname"] = $su_modelname;
$return_arr["serialnum"] = $su_serialnum;
$return_arr["probdesc"] = $su_probdesc;
$return_arr["picname"] = $su_picname;
$return_arr["nocontact"] = $su_nocontact;
$return_arr["address"] = $su_address;
$return_arr["date"] = $su_date;
$return_arr["caseid"] = $su_caseid;
$return_arr["createdby"] = $su_createdby;
$return_arr["proses"] = $su_proses;
$return_arr["nota"] = $su_nota;
$return_arr["reportid"] = $su_reportid;

echo json_encode($return_arr);