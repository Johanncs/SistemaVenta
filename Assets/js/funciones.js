let tblUsuarios;
document.addEventListener("DOMContentLoaded", function () {
    tblUsuarios = $('#tblUsuarios').DataTable({
        ajax: {
            url: base_url + "Usuarios/listar",
            dataSrc: ''
        },
        columns: [
            {
                'data': 'id'
            },
            { 'data': 'usuario' },
            { 'data': 'nombre' },
            {
                'data': 'caja'
            },
            {
                'data': 'estado'
            },
            {
                'data': 'acciones'
            }]
    });
})
function frmLogin(e) {
    e.preventDefault();
    const usuario = document.getElementById("txtUsuario");
    const passwrd = document.getElementById("txtPasswrd");
    if (usuario.value == "") {
        passwrd.classList.remove("is-invalid");
        usuario.classList.add("is-invalid");
        usuario.focus();
    } else if (passwrd.value == "") {
        passwrd.classList.add("is-invalid");
        usuario.classList.remove("is-invalid");
        passwrd.focus();
    } else {
        const url = base_url + "Usuarios/validar";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res == "ok") {
                    window.location = base_url + "Usuarios";
                } else {
                    document.getElementById("alerta").classList.remove("d-none");
                    document.getElementById("alerta").innerHTML = res;
                }
            }
        }
    }
}
function frmUsuario(){
    $('#nuevo_usuario').modal("show");
}