function carregarImgLogotipo() {
    var target = document.getElementById('target-logo');
    var file = document.querySelector("#logotipo").files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        target.src = reader.result;
    };
    if (file) {
        reader.readAsDataURL(file);
    } else {
        target.src = "";
    }
}

function carregarImgIcone() {
    var target = document.getElementById('target-ico');
    var file = document.querySelector("#icone").files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        target.src = reader.result;
    };
    if (file) {
        reader.readAsDataURL(file);
    } else {
        target.src = "";
    }
}

function carregarImgLogoRel() {
    var target = document.getElementById('target-logo-rel');
    var file = document.querySelector("#logo_rel").files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        target.src = reader.result;
    };
    if (file) {
        reader.readAsDataURL(file);
    } else {
        target.src = "";
    }
}

function carregarImgLogoPar() {
    var target = document.getElementById('target-logo-par');
    var file = document.querySelector("#logo_parceiro").files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        target.src = reader.result;
    };
    if (file) {
        reader.readAsDataURL(file);
    } else {
        target.src = "";
    }
}