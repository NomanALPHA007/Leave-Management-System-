function uservalidation() {
    if (document.forms["userform"]["id"].value == "") {
        alert("Please Enter A User ID!");
        return false;
    }
    if (document.forms["userform"]["username"].value == "") {
        alert("Please Enter A User Name!");
        return false;
    }
    if (document.forms["userform"]["password"].value == "") {
        alert("Please Enter A Password!");
        return false;
    }
    var num = document.forms["userform"]["level"].value;
    if (num == "" || isNaN(num) || num < 1 || num > 3) {
        alert("Please Enter A Valid Integer Between 1 to 3");
        return false;
    }

}