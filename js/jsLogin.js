$(function() {
    $("#login").click(function(){
        /*$.ajax({
            type: "POST",
            url: "../Ctl/Login.php",
            dataType: "html",
            data: "user=" + $("#user").val() + "&password=" + $("#pass").val(),
            success: function (msg) {
                if(msg) {
                    debugger;
                window.location = "View/index.php";
                }
            },
            error: function () {
                $("#authError").html = "usuario o contraseña incorrecta";
            }
        });*/
    });
});