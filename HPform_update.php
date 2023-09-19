<?php
require_once("../connection/su_conn.php");

$su_reportid = $_POST['reportid'];

$query_row = "SELECT * FROM mbsahp WHERE id = $su_reportid";
$row_record = $dbmysql->get_row($query_row);

?>


<div class="alert alert-success alert-dismissible fade show" role="alert">

<strong><div class="container-fluid text-center">UPDATE REPORT</div></strong>
    <button type="button" class="btn-close float-right" data-dismiss="alert" aria-label="Close" span aria-hidden="true">&times;</span></button>
    <hr>


    <form method="post" action="javascript:su_update_hpform();">

        <div class="mb-3">
            <label><b> Model Name </b></label>
            <input type="text" class="form-control" id="txt_modelname" value="<?php echo $row_record->ModelName; ?>" placeholder="Enter model name" required>
        </div>

        <div class="mb-3">
            <label><b>Serial Number</b></label>
            <input type="text" class="form-control" id="txt_serialnum" value="<?php echo $row_record->SN; ?>" placeholder="Enter serial number" required>
        </div>

        <div class="mb-3">
            <label><b> Problem Description </b></label>
            <input type="text" class="form-control" id="txt_probdesc" value="<?php echo $row_record->ProblemDesc; ?>" placeholder="Enter problem description here..." required>
        </div>

        <div class="mb-3">
            <label><b> PIC Name </b></label>
            <input type="text" class="form-control" id="txt_picname" value="<?php echo $row_record->PICName; ?>" placeholder="Enter PIC name" required>
        </div>


        <div class="mb-3">
            <label><b> No Contact </b></label>
            <input type="text" class="form-control" id="txt_nocontact" value="<?php echo $row_record->NoContact; ?>" placeholder="Enter No contact" required>
        </div>


        <div class="mb-3">
            <label><b> Address </b></label>
            <input type="text" class="form-control" id="txt_address" value="<?php echo $row_record->Address; ?>" placeholder="Enter address" required>
        </div>


        <div class="mb-3">
            <label><b> Date Created</b></label>
            <input type="date" class="form-control" id="date" value="<?php echo $row_record->Date; ?>" placeholder="Default">
        </div>


        <div class="mb-3">
            <label><b> Case ID </b></label>
            <input type="text" class="form-control" id="txt_caseid" value="<?php echo $row_record->CaseID; ?>" placeholder="Enter case ID" required>
        </div>

        <div class="mb-3">
            <label><b> Created By </b></label>
            <input type="text" class="form-control" id="txt_createdby" value="<?php echo $row_record->CreatedBy; ?>" placeholder="Enter your name" required>
        </div>


        <div class="col-auto my-1">
            <label class="mr-sm-2"><b>Case Progress:</b></label>
            <select class="custom-select mr-sm-2" id="txt_proses">
                <option selected><?php echo $row_record->CaseProgress; ?></option>
                <option value="On-Going">On-Going</option>
                <option value="Completed">Completed</option>
            </select>
        </div>

        <!--<div class="mb-3">
        <label><b> Case Progress </b></label>
        <input type="text" class="form-control" id="txt_proses" placeholder="Default" required>
      </div>-->


        <div class="mb-3">
            <label><b> Notes </b></label>
            <input type="text" class="form-control" id="txt_nota" value="<?php echo $row_record->Notes; ?>" placeholder="Anything would you like add">
        </div>


        <input id="hidden_reportid" type="hidden" value="<?php echo $su_reportid; ?>">


        <button type="submit" class="btn btn-success">Update</button>
    </form>



</div>