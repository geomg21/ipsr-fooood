<?php
$menu = [
    ["name" => "Cheese Burst Pizza", "price" => 349, "image" => "images/pizza.jpg", "desc" => "Loaded with mozzarella cheese and crispy crust."],
    ["name" => "Veggie Burger", "price" => 149, "image" => "images/burger.jpg", "desc" => "Crispy veg patty with fresh lettuce and sauces."],
    ["name" => "Pasta Alfredo", "price" => 199, "image" => "images/pasta.jpg", "desc" => "Creamy white sauce pasta with herbs."],
    ["name" => "Cold Coffee", "price" => 99, "image" => "images/coffee.jpg", "desc" => "Chilled coffee with whipped cream topping."]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Food Delivery | Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { font-family: 'Poppins', sans-serif; }
    .navbar { background-color: #dc3545; }
    .hero {
        background: url('images/banner.jpg') center/cover no-repeat;
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 8px #000;
        position: relative;
    }
    .hero::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.4);
    }
    .hero div {
        position: relative;
        z-index: 1;
    }
    .card img { height: 200px; object-fit: cover; transition: transform 0.3s; }
    .card:hover img { transform: scale(1.05); }
    .btn-danger { border-radius: 0.35rem; }
    footer { background-color: #dc3545; color: #fff; }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="index.php">🍴 Food Delivery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="status.html">Order Status</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center">
    <div>
        <h1 class="fw-bold display-4">Delicious Food, Delivered Fast 🍕</h1>
        <p class="lead">Order your favorite meals with just one click</p>
        <a href="#menu" class="btn btn-light btn-lg mt-3">Explore Menu</a>
    </div>
</section>

<!-- Menu Section -->
<section id="menu" class="container py-5">
    <h2 class="text-center mb-5 fw-bold text-danger">Our Menu</h2>
    <div class="row g-4">
        <?php foreach ($menu as $item): ?>
        <div class="col-md-3">
            <div class="card shadow-sm h-100 text-center">
                <img src="<?php echo $item['image']; ?>" class="card-img-top" alt="<?php echo $item['name']; ?>">
                <div class="card-body">
                    <h5 class="card-title text-danger"><?php echo $item['name']; ?></h5>
                    <p class="card-text"><?php echo $item['desc']; ?></p>
                    <h6 class="fw-bold">₹<?php echo $item['price']; ?></h6>
                    <button class="btn btn-outline-danger mt-2">Add to Cart</button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Order Form -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center text-danger mb-5 fw-bold">Place Your Order</h2>
        <form class="row g-3 justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Address" required>
            </div>
            <div class="col-md-4">
                <input type="tel" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" rows="4" placeholder="Your Order Details"></textarea>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-danger btn-lg">Submit Order</button>
            </div>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="text-center py-3">
    <p class="mb-0">&copy; 2025 Food Delivery. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

