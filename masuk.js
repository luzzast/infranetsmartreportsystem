function masuk() {
    //alert('Please enter');
    $.post("modelcontroller.php", {
        su_username: $('#username').val(),
        su_password: $('#password').val()

    }, function (data) {

        if (data.loginstatus == 'success') {
            $("#loginstatus").removeClass().addClass('bg-success').html("Login Success");
            location.href = 'indexpage1.php/';
        }

        else if (data.loginstatus == 'failed') {
            $("#loginstatus").removeClass().addClass('bg-danger').html("Login Failed, Please Try again.");
        }
    },
        'json');
}