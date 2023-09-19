//var refreshId = setInterval(function() { reportrefresh() }, 1000);
$(document).ready(function () {
    reportrefresh();
});

//Delete Report
function su_delete_hpform() {
    $.post("delete_formscript.php", {
        modelname: $("#txt_modelname").val(),
        serialnum: $("#txt_serialnum").val(),
        probdesc: $("#txt_probdesc").val(),
        picname: $("#txt_picname").val(),
        nocontact: $("#txt_nocontact").val(),
        address: $("#txt_address").val(),
        date: $("#date").val(),
        caseid: $("#txt_caseid").val(),
        createdby: $("#txt_createdby").val(),
        proses: $("#txt_proses").val(),
        nota: $("#txt_nota").val(),
        reportid: $("#hidden_reportid").val()


    }, function (data) {
        if (data.status == 'success') {
            reportrefresh();
            $("#hp_form_here").html('');
            alert("The report has been successfully deleted!");

        }
    }, "json");
}



function su_callformdelete_report(id) {
    $.post("HPform_delete.php", {
        reportid: id
    }, function (data) {
        $("#hp_form_here").html(data);
    });
}

//Update Report
function su_update_hpform() {
    $.post("update_formscript.php", {
        modelname: $("#txt_modelname").val(),
        serialnum: $("#txt_serialnum").val(),
        probdesc: $("#txt_probdesc").val(),
        picname: $("#txt_picname").val(),
        nocontact: $("#txt_nocontact").val(),
        address: $("#txt_address").val(),
        date: $("#date").val(),
        caseid: $("#txt_caseid").val(),
        createdby: $("#txt_createdby").val(),
        proses: $("#txt_proses").val(),
        nota: $("#txt_nota").val(),
        reportid: $("#hidden_reportid").val()


    }, function (data) {
        if (data.status == 'success') {
            reportrefresh();
            $("#hp_form_here").html('');
            alert("The report has been successfully updated!");
        }
    }, "json");
}


function su_callformupdate_report(id) {
    $.post("HPform_update.php", {
        reportid: id
    }, function (data) {
        $("#hp_form_here").html(data);
    });
}

//Add New Report
function su_submit_hpform() {
    $.post("submit_formscript.php", {
        modelname: $("#txt_modelname").val(),
        serialnum: $("#txt_serialnum").val(),
        probdesc: $("#txt_probdesc").val(),
        picname: $("#txt_picname").val(),
        nocontact: $("#txt_nocontact").val(),
        address: $("#txt_address").val(),
        date: $("#date").val(),
        caseid: $("#txt_caseid").val(),
        createdby: $("#txt_createdby").val(),
        proses: $("#txt_proses").val(),
        nota: $("#txt_nota").val()

    }, function (data) {
        if (data.status == 'success') {
            reportrefresh();
            $("#hp_form_here").html('');
            alert("New report has been successfully added!");
        }
    }, "json");

}

function su_callform_report() {
    $.post("HPform.php", function (data) {
        $("#hp_form_here").html(data);
    });
}

function reportrefresh() {
    $.post("listHP.php", function (data) {
        $("#listHP_here").html(data);
    });
}