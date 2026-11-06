/* ============================================================
   TASK 2a: ARRAY OF CLOTHING ITEMS (name, price, category, image)
   ============================================================ */
var products = [
    { name: "Silk Blouse",       price: 45.00, category: "Tops",    image: "images/blouse.jpg" },
    { name: "Cotton Shirt",      price: 30.00, category: "Tops",    image: "images/shirt.jpg" },
    { name: "Slim Jeans",        price: 55.00, category: "Bottoms", image: "images/jeans.jpg" },
    { name: "Pleated Skirt",     price: 40.00, category: "Bottoms", image: "images/skirt.jpg" },
    { name: "Evening Gown",      price: 120.00, category: "Dresses", image: "images/gown.jpg" },
    { name: "Summer Dress",      price: 60.00, category: "Dresses", image: "images/summer.jpg" },
    { name: "Wool Sweater",      price: 50.00, category: "Tops",    image: "images/sweater.jpg" },
    { name: "Linen Shorts",      price: 25.00, category: "Bottoms", image: "images/shorts.jpg" }
];

/* ============================================================
   TASK 2c / 2b: DYNAMICALLY DISPLAY PRODUCTS ON SHOP PAGE
   ============================================================ */
function displayProducts(items) {
    var output = "";

    for (var i = 0; i < items.length; i++) {
        output += "<div class='col-md-3 mb-4'>";
        output += "  <div class='card h-100'>";
        output += "    <img src='" + items[i].image + "' class='card-img-top' alt='" + items[i].name + "'>";
        output += "    <div class='card-body'>";
        output += "      <h5 class='card-title'>" + items[i].name + "</h5>";
        output += "      <p class='card-text mb-1'><b>Category:</b> " + items[i].category + "</p>";
        output += "      <p class='card-text'><b>Price:</b> $" + items[i].price.toFixed(2) + "</p>";
        output += "    </div>";
        output += "  </div>";
        output += "</div>";
    }

    if (items.length === 0) {
        output = "<p>No products found in this category.</p>";
    }

    document.getElementById("productList").innerHTML = output;
}

/* ============================================================
   TASK 3b / 3c: FILTER PRODUCTS BY CATEGORY
   ============================================================ */
function filterProducts() {
    var selected = document.getElementById("categoryFilter").value;
    var filtered = [];

    for (var i = 0; i < products.length; i++) {
        if (selected === "all" || products[i].category === selected) {
            filtered.push(products[i]);
        }
    }

    displayProducts(filtered);
}

/* Show all products when the page finishes loading */
window.onload = function () {
    displayProducts(products);
};

/* ============================================================
   TASK 4a / 4b: CONTACT FORM VALIDATION
   ============================================================ */
function validateForm() {
    var name    = document.getElementById("name").value.trim();
    var email   = document.getElementById("email").value.trim();
    var message = document.getElementById("message").value.trim();
    var box     = document.getElementById("formMessage");

    var errors = "";

    /* Name validation */
    if (name === "") {
        errors += "Name is required.<br>";
    }

    /* Email validation (simple pattern check) */
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        errors += "Email is required.<br>";
    } else if (!emailPattern.test(email)) {
        errors += "Please enter a valid email address.<br>";
    }

    /* Message validation */
    if (message === "") {
        errors += "Message cannot be empty.<br>";
    } else if (message.length < 10) {
        errors += "Message must be at least 10 characters long.<br>";
    }

    /* Show inline error alert if validation fails */
    if (errors !== "") {
        box.innerHTML = "<div class='alert alert-danger'>" + errors + "</div>";
        return false;   // stop form submission
    }

    /* Success */
    box.innerHTML = "<div class='alert alert-success'>Message sent successfully. Thank you, " + name + "!</div>";
    document.getElementById("contactForm").reset();
    alert("Form submitted successfully!");

    return false; // prevent actual page reload for this demo
}