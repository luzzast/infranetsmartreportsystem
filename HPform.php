<div class="alert alert-primary alert-dismissible fade show" role="alert">

  <strong><div class="container-fluid text-center">ADD REPORT</div></strong>

  <button type="button" class="btn-close float-right" data-dismiss="alert" aria-label="Close" span aria-hidden="true">&times;</span></button>
  <hr>


  <form method="post" action="javascript:su_submit_hpform();">

    <div class="mb-3">
      <label><b> Model Name </b></label>
      <input type="text" class="form-control" id="txt_modelname" placeholder="Enter model name" required>
    </div>

    <div class="mb-3">
      <label><b>Serial Number</b></label>
      <input type="text" class="form-control" id="txt_serialnum" placeholder="Enter serial number" required>
    </div>

    <div class="mb-3">
      <label><b> Problem Description </b></label>
      <input type="text" class="form-control" id="txt_probdesc" placeholder="Enter problem description here..." required>
    </div>

    <div class="mb-3">
      <label><b> PIC Name </b></label>
      <input type="text" class="form-control" id="txt_picname" placeholder="Enter PIC name" required>
    </div>


    <div class="mb-3">
      <label><b> No Contact </b></label>
      <input type="text" class="form-control" id="txt_nocontact" placeholder="Enter No contact" required>
    </div>


    <div class="mb-3">
      <label><b> Address </b></label>
      <input type="text" class="form-control" id="txt_address" placeholder="Enter address" required>
    </div>


    <div class="mb-3">
      <label><b> Date Created</b></label>
      <input type="date" class="form-control" id="date" placeholder="Default">
    </div>


    <div class="mb-3">
      <label><b> Case ID </b></label>
      <input type="text" class="form-control" id="txt_caseid" placeholder="Enter case ID" required>
    </div>

    <div class="mb-3">
      <label><b> Created By </b></label>
      <input type="text" class="form-control" id="txt_createdby" placeholder="Enter your name" required>
    </div>


    <div class="col-auto my-1">
      <label class="mr-sm-2"><b>Case Progress:</b></label>
      <select class="custom-select mr-sm-2" id="txt_proses">
        <option selected>Choose...</option>
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
      <input type="text" class="form-control" id="txt_nota" placeholder="Anything would you like add (Optional)">
    </div>

    <button type="submit" class="btn btn-primary">Add</button>

  </form>



</div>