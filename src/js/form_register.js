function newFunction() {
    $("#form-register").submit(function () {
        var nome = $("#nome").val();
        var email = $("#email").val();
        var in_sel = $("#in_sel").val();
        var senha = $("#senha").val();
        
        // var arr = new Array();
        // arr['nome'] = nome;
        // arr['email'] = email;
        // arr['in_sel'] = in_sel;
        // arr['senha'] = senha;

        // var data = JSON.parse(arr);

        $.ajax({
            url: 'val_form_register.php',
            type: 'POST',
            dataType: 'JSON',
            data: {            
                nome: nome,
                email: email,
                in_sel: in_sel,
                senha: senha
            },
            success: function (result) {
                //var r = JSON.parse(result);
                $("#input-message").text(result.message);
                //alert(result);
            }
        });
        return false;
    });
}

$(document).ready(function(){
    newFunction();
});


