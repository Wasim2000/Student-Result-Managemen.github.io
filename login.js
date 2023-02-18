function login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if ( username == "wasim10@gmail.com" && password == "12345678"){
    window.location = "menu.html"; // Redirecting to other page.
    return false;
    }
    else{
    alert("invalid credentials");
    }
    }