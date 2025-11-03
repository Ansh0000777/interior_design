function validateSignupForm() {
    // Get the values from the form
    var name = document.forms["signupForm"]["name"].value;
    var email = document.forms["signupForm"]["email"].value;
    var phone = document.forms["signupForm"]["phone"].value;
    var password = document.forms["signupForm"]["password"].value;
    var cpassword = document.forms["signupForm"]["cpassword"].value;

    // Check for empty fields
    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    if (email == "") {
        alert("Email must be filled out");
        return false;
    }

    if (phone == "") {
        alert("Phone number must be filled out");
        return false;
    }

    // Check if phone number is 10 digits
    if (phone.length != 10 || isNaN(phone)) {
        alert("Please enter a valid 10-digit phone number");
        return false;
    }

    if (password == "") {
        alert("Password must be filled out");
        return false;
    }

    // Check if passwords match
    if (password != cpassword) {
        alert("Passwords do not match!");
        return false;
    }

    // If all checks pass, allow the form to submit
    return true;
}