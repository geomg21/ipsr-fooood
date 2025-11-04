<?php
$menu = [
    ["name" => "Cheese Burst Pizza", "price" => 349, "image" => "images/pizza.jpg", "desc" => "Loaded with extra mozzarella on a crispy crust."],
    ["name" => "Veggie Burger", "price" => 149, "image" => "images/burger.jpg", "desc" => "Crispy veg patty with lettuce, cheese & sauces."],
    ["name" => "Pasta Alfredo", "price" => 199, "image" => "images/pasta.jpg", "desc" => "Creamy white sauce pasta infused with Italian herbs."],
    ["name" => "Cold Coffee", "price" => 99, "image" => "images/coffee.jpg", "desc" => "Iced coffee blended with whipped cream."],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FoodX Delivery | Home</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body { font-family: 'Poppins', sans-serif; background:#f8f9fa; }

    .navbar { background:#ff4d4f; }
    .navbar-brand { font-size:1.6rem; font-weight:700; }

    .hero {
        background:url('images/banner.jpg') center/cover no-repeat;
        height:80vh;
        display:flex;
        align-items:center;
        justify-content:center;
        text-align:center;
        color:white;
        position:relative;
    }
    .hero:after {
        content:"";
        position:absolute;
        inset:0;
        background:rgba(0,0,0,0.5);
    }
    .hero-content {
        position:relative; 
        z-index:2;
        animation: fadeIn 1s ease-in-out;
    }
    @keyframes fadeIn {
        from {opacity:0; transform:translateY(20px);}
        to {opacity:1; transform:translateY(0);}
    }

    .search-box input {
        padding:15px;
        border-radius:10px;
        border:1px solid #eee;
        width:100%;
        font-size:1rem;
    }

    .card {
        border:none;
        border-radius:12px;
        overflow:hidden;
        transition:0.3s;
        background:white;
    }
    .card:hover {
        transform:translateY(-5px);
        box-shadow:0 10px 25px rgba(0,0,0,0.08);
    }
    .card img {
        height:200px;
        object-fit:cover;
    }

    .btn-danger {
        background:#ff4d4f;
        border:none;
        border-radius:8px;
        transition:.3s;
    }
    .btn-danger:hover {
        background:#d93b3d;
    }

    footer {
        background:#ff4d4f;
        color:white;
    }
</style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">FoodX 🛵</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active fw-semibold" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
        <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="status.html">Track Order</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="hero-content">
      <h1 class="fw-bold display-4">Fresh Food Delivered Fast 🚀</h1>
      <p class="lead">Order delicious meals from your favorite restaurants</p>
      <a href="#menu" class="btn btn-light btn-lg mt-3 rounded-pill px-4">Browse Menu 🍔</a>
  </div>
</section>

<!-- Search Food -->
<section class="container py-5">
  <div class="search-box mb-4">
    <input type="text" placeholder="Search food... 🍕 Burger, Pasta, Coffee">
  </div>
</section>

<!-- Menu Section -->
<section id="menu" class="container pb-5">
  <h2 class="text-center mb-5 fw-bold text-danger">Popular Dishes</h2>
  <div class="row g-4">

    <?php foreach($menu as $item): ?>
    <div class="col-md-3">
      <div class="card shadow-sm h-100 text-center">
        <img src="<?= $item['image']; ?>" alt="<?= $item['name']; ?>">
        <div class="card-body">
            <h5 class="fw-bold text-danger"><?= $item['name']; ?></h5>
            <p class="text-muted small"><?= $item['desc']; ?></p>
            <h6 class="fw-bold">₹<?= $item['price']; ?></h6>
            <button class="btn btn-danger btn-sm mt-2 w-100">Add to Cart 🛒</button>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- Footer -->
<footer class="text-center py-3">
  <p class="mb-0">© 2025 FoodX Delivery — All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


