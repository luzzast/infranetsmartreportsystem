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

//INSERT REPORT
$sudo_query_insert = "INSERT INTO mbsahp (ModelName, SN, ProblemDesc,PICName,NoContact,Address,Date,CaseID,CreatedBy,CaseProgress,Notes) 
VALUES ('$su_modelname','$su_serialnum','$su_probdesc','$su_picname','$su_nocontact','$su_address','$su_date','$su_caseid','$su_createdby','$su_proses','$su_nota')";
$insert_result = $dbmysql->query($sudo_query_insert);


if ($insert_result == 1)
    $return_arr["status"] = "success"; //success information
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
echo json_encode($return_arr);
