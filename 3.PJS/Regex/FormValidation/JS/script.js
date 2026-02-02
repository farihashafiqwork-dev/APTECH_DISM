// validation for button
function validateForm() {
    
   
    var Name = document.getElementById("name").value;
    var Email = document.getElementById("email").value;
    var Password = document.getElementById("password").value;
    
    var regName = /^[a-zA-Z\s]{3,}$/;
    var regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z])+\.([A-Za-z]{2,3})$/;
    var regPass = /^[\w\d\D]{8,}/;

    var isNameValid = Name.match(regName);
    var isEmailValid = Email.match(regEmail);
    var isPasswordValid = Password.match(regPass);

    if (isNameValid) {
        document.getElementById("name").style.borderColor = "green";
        document.getElementById("b1").innerHTML=""
    } else {
        document.getElementById("name").style.borderColor = "red";
        document.getElementById("b1").innerHTML="Wrong Name"
    }

    if (isEmailValid) {
        document.getElementById("email").style.borderColor = "green";
        document.getElementById("b2").innerHTML=""
    } else {
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("b2").innerHTML="Wrong Email"
    }

    if (isPasswordValid) {
        document.getElementById("password").style.borderColor = "green";
        document.getElementById("b3").innerHTML=""
    } else {
        document.getElementById("password").style.borderColor = "red";
        document.getElementById("b3").innerHTML="Wrong Password"
    }

    if (isNameValid && isEmailValid && isPasswordValid) {
      
        alert("Your form has been submitted");
    }
}

// Separate validation functions for onBlur
function validateName() {
    var Name = document.getElementById("name").value;
    var regName = /^[a-zA-Z\s]{3,}$/;
    
    if (Name.match(regName)) {
        document.getElementById("name").style.borderColor = "green";
        document.getElementById("b1").innerHTML=""
    } else {
        document.getElementById("name").style.borderColor = "red";
        document.getElementById("b1").innerHTML="Wrong Name"
    }
}

function validateEmail() {
    var Email = document.getElementById("email").value;
    var regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z])+\.([A-Za-z]{2,3})$/;
    
    if (Email.match(regEmail)) {
        document.getElementById("email").style.borderColor = "green";
        document.getElementById("b2").innerHTML=""
    } else {
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("b2").innerHTML="Wrong Email"
    }
}

function validatePassword() {
    var Password = document.getElementById("password").value;
    var regPass = /^[\w\d\D]{8,}/;
    
    if (Password.match(regPass)) {
        document.getElementById("password").style.borderColor = "green";
        document.getElementById("b3").innerHTML=""
    } else {
        document.getElementById("password").style.borderColor = "red";
        document.getElementById("b3").innerHTML="Wrong Password"
    }
}

