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
function filterShopItems() {
    // 1. Get the search text from the input box
    var input = document.getElementById("searchInput");
    var filter = input.value.toLowerCase();

    // 2. Get all the product/item cards on the page
    // (This assumes your items are inside a wrapper with id="items-list")
    var itemsContainer = document.getElementById("items-list");
    var items = itemsContainer.getElementsByClassName("shop-item");

    // 3. Loop through all the item cards
    for (var i = 0; i < items.length; i++) {

        // 4. Find the title (h3) within the item card
        var title = items[i].getElementsByTagName("h3")[0];

        if (title) {
            var textValue = title.textContent || title.innerText;

            // 5. Check if the item's title includes the search text
            if (textValue.toLowerCase().indexOf(filter) > -1) {
                items[i].style.display = ""; // Show the item
            } else {
                items[i].style.display = "none"; // Hide the item
            }
        }
    }
}