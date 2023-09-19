//var refreshId = setInterval(function() { reportrefresh() }, 1000);
$(document).ready(function () {
    reportrefresh();
});


function reportrefresh() {
    $.post("listREPORT.php", function (data) {
        $("#listreport_here").html(data);
    });
}