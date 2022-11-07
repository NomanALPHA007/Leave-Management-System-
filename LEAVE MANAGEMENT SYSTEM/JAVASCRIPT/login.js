function validateLogin() {
    if (document.forms["login_form"]["username"].value == "") {
        alert("Please Enter A User Name!");
        return false;
    }
    if (document.forms["login_form"]["password"].value == "") {
        alert("Please Enter A Password!");
        return false;
    }
}