function validateContact() {
    var fullname = document.getElementById("fullnameID");
    var email = document.getElementById("emailID");
    var message = document.getElementById("messageID");
    if(fullname.value == "" || email.value == "" || message.value == ""){
        alert("Fields cannot be blank.");
        return false;
    }
    return true;
}
