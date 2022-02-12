$(document).ready(function(){
    $("#loginform").submit(function(e){
        e.preventDefault();
        console.log("success");
        var form = new FormData(this);
        var email = $("#email").val();
        var password = $("#password").val();
        if(email == "") {
            $("#emailerr").html("Please fill email");
        } else if(password == "") {
            $("#passerr").html("Please fill password");
        } else {
            $.ajax({
                url: 'http://localhost/personalwebsite2.0/admin/php/login.php',
                type: 'POST',
                contentType: false,
                processData: false,
                dataType: 'html',
                data: form,
                success: function(data) {
                    if(data == "Email does not match") {
                      $("#emailerr").html("Email does not match");
                    } else if(data == "Password does not match") {
                      $("#passerr").html("Password does not match");
                    } else {
                        console.log("next page");
                    //   window.location.href = "http://localhost/personalwebsite2.0/admin/dashboard/starter.php";
                    }
                }
            });
        }
    });
});
