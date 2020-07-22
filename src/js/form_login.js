function newFunction() {
    $("#form-login").submit(function () {
        $.ajax({
            url: 'val_form_login.php',
            type: 'POST',
            dataType: 'html',
            data:  $("#form-login").serialize(),
            success: function (result) {
                $('#input-message').html(result);
                //alert(result);
            }
        });
        return false;
    });
}

$(document).ready(function(){
    newFunction();
});


