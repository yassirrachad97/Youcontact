
function validateForm() {

    var name = document.getElementById("name");
    var email = document.getElementById("e-mail");
    var phone = document.getElementById("phone");
    console.log(name.value);
    if (name.value === "") {

        alert("Name must not be empty");
        return false;
    }


    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value)) {
        alert("Invalid email address");
        return false;
    }


    if (phone.value === "") {
        alert("Phone must not be empty");
        return false;
    }


    return true;
}
function error() {
    document.getElementById('error').style.display = 'block';
    document.getElementById('error').style.color = 'red';
}