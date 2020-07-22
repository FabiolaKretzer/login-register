function on_submit(form) {
    if(val_nome(form) && val_email(form) && val_in_sel(form) && val_senha(form)) {
        return true;
    }
    return false;  
}

function on_submit_index(form) {
    if(val_email(form) && val_senha(form)) {
        return true;
    }
    return false;  
}

function val_nome(form) {
    var nome = form.nome.value.trim();
    if(nome == "" || nome == null) {
        alert("Por favor, indique o seu nome.");
        return false;
    }
    return true;
}

function val_email(form) {
    var email = form.email.value.trim();
    if(email.indexOf("@gmail.com") == -1 || email == "" || email == null) {
        alert("Por favor, indique um e-mail válido.");
        return false;
    }
    return true;
}

function val_in_sel(form) {
    var in_sel = form.in_sel.value.trim();
    if(in_sel == "" || in_sel == null) {
        alert("Por favor, indique uma opção válida.");
        return false;
    }
    return true;
}

function val_senha(form) {
    var senha = form.senha.value.trim();
    if(senha.lenght < 6 || senha == "" || senha == null) {
        alert("Por favor, indique uma senha válida.");
        return false;
    }
    return true;
}