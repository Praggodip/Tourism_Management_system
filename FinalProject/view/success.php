<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Welcome to GlamZone</title>
  <link rel="stylesheet" href="../assets/css/style.css" />

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: #fff0f5;
        }

        header {
            background-color: #e75480;
            color: white;
            padding: 25px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 32px;
        }

        .container {
            padding: 30px;
            max-width: 1200px;
            margin: auto;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .product-info {
            padding: 15px;
        }

        .product-info h3 {
            margin: 0;
            color: #e75480;
        }

        .product-info p {
            font-size: 14px;
            color: #333;
        }

        .product-info .price {
            font-weight: bold;
            margin-top: 10px;
            color: #444;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to CHANEL , <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
    <p>Your one-stop shop for premium cosmetics and beauty essentials</p>
</header>

<div class="container">
    <div class="product-grid">

        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=800&q=80" alt="Lipstick">
            <div class="product-info">
                <h3>Matte Lipstick</h3>
                <p>Long-lasting rich color with a velvety finish.</p>
                <div class="price">$14.99</div>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=800&q=80" alt="Foundation">
            <div class="product-info">
                <h3>Liquid Foundation</h3>
                <p>Flawless coverage for all skin types.</p>
                <div class="price">$24.50</div>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=800&q=80" alt="Eyeshadow Palette">
            <div class="product-info">
                <h3>Eyeshadow Palette</h3>
                <p>12 vibrant shades for stunning eye looks.</p>
                <div class="price">$19.95</div>
            </div>
        </div>

        <div class="product-card">
<img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=800&q=80" alt="Blush">
            <div class="product-info">
                <h3>Peach Blush</h3>
                <p>Natural rosy glow that lasts all day.</p>
                <div class="price">$12.00</div>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=800&q=80" alt="Nail Polish">
            <div class="product-info">
                <h3>Nail Polish Set</h3>
                <p>Trendy colors for every occasion.</p>
                <div class="price">$16.75</div>
            </div>
        </div>

        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=800&q=80" alt="Perfume">
            <div class="product-info">
                <h3>Floral Perfume</h3>
                <p>Elegant fragrance with floral notes.</p>
                <div class="price">$34.99</div>
            </div>
        </div>

       

    </div>
</div>

</body>
</html>
