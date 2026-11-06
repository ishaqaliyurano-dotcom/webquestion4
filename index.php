<html>

<head>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>ELEGANCE_BOUTIQUE</title>
</head>

<body>

    <!-- ========== TASK 1a: LOGO / BOUTIQUE NAME ========== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-top">
                Elegance Boutique
            </a>

            <!-- ========== TASK 1b: NAVIGATION MENU ========== -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ========== TASK 1c: HERO SECTION ========== -->
    <div class="container-fluid bg-light text-center p-5" id="home">
        <h1 class="display-4">Welcome to Elegance Boutique</h1>
        <p class="lead">Timeless fashion, tailored for you.</p>
        <a href="#shop" class="btn btn-dark btn-lg">Shop Now</a>
    </div>

    <!-- ========== TASK 2d / TASK 3a: SHOP PAGE SECTION ========== -->
    <div class="container mt-5" id="shop">
        <h2 class="mb-3">Our Collection</h2>

        <!-- TASK 3a: Filter Dropdown -->
        <label for="categoryFilter" class="form-label">Filter by Category:</label>
        <select id="categoryFilter" class="form-select w-25 mb-4" onchange="filterProducts()">
            <option value="all">All Categories</option>
            <option value="Tops">Tops</option>
            <option value="Bottoms">Bottoms</option>
            <option value="Dresses">Dresses</option>
        </select>

        <!-- TASK 2b: Products rendered here by JavaScript -->
        <div id="productList" class="row"></div>
    </div>

    <!-- ========== ABOUT SECTION ========== -->
    <div class="container-fluid bg-light mt-5 p-5" id="about">
        <div class="container">
            <h2>About Elegance Boutique</h2>
            <p>Elegance Boutique was founded in 2015 with one goal: to bring high-quality,
               affordable fashion to everyone. Every piece is hand-picked by our stylists.</p>
        </div>
    </div>

    <!-- ========== TASK 4: CONTACT FORM ========== -->
    <div class="container mt-5 mb-5" id="contact">
        <h2>Contact Us</h2>

        <!-- Inline message box -->
        <div id="formMessage"></div>

        <form id="contactForm" onsubmit="return validateForm()">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-dark">Send Message</button>
        </form>
    </div>

    <div class="container-fluid bg-dark text-white text-center p-3">
        &copy; 2025 Elegance Boutique
    </div>

    <!-- Link to external JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>