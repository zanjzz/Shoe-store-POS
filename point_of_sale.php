<?php
include 'navbar.php';
require_once 'config.php';

// Fetch categories
$categories = $conn->query("SELECT Category_ID, Category_Name FROM Categories");

// Fetch products (with category name)
$products = $conn->query("
    SELECT p.*, c.Category_Name 
    FROM Products p
    JOIN Categories c ON p.Category_ID = c.Category_ID
");
?>

<div id="categories">
    <?php while($cat = $categories->fetch_assoc()): ?>
        <button class="category-buttons"><?= htmlspecialchars($cat['Category_Name']) ?></button>
    <?php endwhile; ?>
</div>

<h2>Point of Sale</h2>

<div id="product-list">
    <?php while($product = $products->fetch_assoc()): ?>
        <div class="product-card">
            <p><?= htmlspecialchars($product['Product_Name']) ?></p>
            <p><?= htmlspecialchars($product['Category_Name']) ?></p>
            <p>₱<?= number_format($product['Price'], 2) ?></p>
        </div>
    <?php endwhile; ?>
</div>