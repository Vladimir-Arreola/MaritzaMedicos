function validarLogin(){
    var user = document.getElementById("user").value;
    var password = document.getElementById("password").value;

    if (user == null || user.length == 0) {
            alert("El nombre de usuario es necesario");
            document.getElementById("user").style.backgroundColor = "#f5d3d4";
            document.getElementById("user").focus();
            return false;
        }
    else if(password == null || password.length == 0 || password == ""){
        alert("La contraseña es necesaria");
        document.getElementById("password").style.backgroundColor = "#f5d3d4";
        document.getElementById("password").focus();
        return false;
        }   
}
