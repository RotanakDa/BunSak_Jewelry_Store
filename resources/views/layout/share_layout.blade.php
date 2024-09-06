<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         /* Navbar Styles */
 .navbar {
    background-color: white;
    padding: 15px;
  }
  .navbar-brand img {
    height: 50px;
  }
  .navbar-nav {
    margin: auto; /* Center navigation */
  }
  .nav-link {
    color: #666;
    font-weight: bold;
    margin-left: 20px;
    margin-right: 20px;
  }
  .nav-link:hover {
    color: #d1a054;
  }
  .icons {
    display: flex;
    gap: 15px;
  }
  .navbar-toggler {
    border: none;
  }
  .navbar-toggler-icon {
    background-color: black;
  }
  
  /* Hero Section */
  .hero-section {
    display: flex;
    justify-content: center; /* Center both text and image horizontally */
    align-items: center; /* Center items vertically */
    flex-wrap: wrap;
    background-color: #f4f4f4;
    padding: 60px;
  }
  
  .hero-text {
    text-align: left; /* Keep the text aligned to the left */
    padding-right: 20px;
  }
  
  .hero-text h1 {
    font-size: 3rem;
    font-weight: bold;
  }
  
  .hero-text p {
    font-size: 1.2rem;
    margin: 20px 0;
  }
  
  .hero-text button {
    background-color: #d1a054;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
  }
  
  .hero-image img {
    max-width: 100%;
    height: auto;
    margin-left: 20px; /* Add margin to give space between image and text */
  }
  
  /* Footer */
  .footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    position: relative;
  }
  .footer p {
    margin: 0;
  }
  /* Media Queries for Smaller Screens */
  @media (max-width: 992px) {
    .hero-text, .hero-image {
        max-width: 100%;
        text-align: center;
        padding: 10px;
    }
    .hero-text {
        padding-right: 0;
    }
  }
  /* Features Section */
  .features-section {
    background-color: #f9f9f9;
    padding: 20px 0;
  }
  
  .features {
    display: flex;
    justify-content: space-around;
    text-align: center;
  }
  
  .feature-item {
    max-width: 200px;
  }
  
  .feature-item i {
    font-size: 2rem;
    color: #d1a054;
    margin-bottom: 10px;
  }
  
  .feature-item h4 {
    font-size: 1.2rem;
    margin-bottom: 5px;
  }
  
  .feature-item p {
    font-size: 0.9rem;
    color: #888;
  }
  
  /* Products Section */
  .products-section {
    padding: 40px 0;
  }
  
  .products-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 20px;
  }
  
  .product-item {
    position: relative;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }
  
  .product-item.large {
    grid-column: 1 / 2;
  }
  
  .product-item img {
    width: 100%;
    height: auto;
    display: block;
  }
  
  .product-info {
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translateY(-50%);
    color: black;
  }
  
  .product-info h4 {
    font-size: 1.5rem;
    margin-bottom: 10px;
  }
  
  .shop-now-btn {
    background-color: #d1a054;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1rem;
  }
  
  .product-item.small {
    grid-column: 2 / 3;
  }
  
  @media (max-width: 768px) {
    .products-grid {
        grid-template-columns: 1fr;
    }
  }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png" alt="Logo">
            </a>

            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto"> <!-- Center the nav items -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>

                <!-- Icons Section -->
                <div class="icons d-none d-lg-flex">
                    <a href="#"><img src="search-icon.png" alt="Search" width="20"></a>
                    <a href="#"><img src="profile-icon.png" alt="Profile" width="20"></a>
                    <a href="#"><img src="cart-icon.png" alt="Cart" width="20"></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section container-fluid">
        <div class="row align-items-center">
            <!-- Left Side: Text -->
            <div class="col-lg-6 col-md-12 hero-text">
                <h1>Family Jewelry Collection</h1>
                <p>Designer Jewelry, Necklaces, Bracelets, Earrings</p>
                <button>Shop Now</button>
            </div>
            <!-- Right Side: Image -->
            <div class="col-lg-6 col-md-12 hero-image">
                <img src="/images/homepage.png" alt="Jewelry Collection">
            </div>
        </div>
    </section>


    
@yield('content')
    
</body>
</html>