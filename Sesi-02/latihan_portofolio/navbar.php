<?php
$url = $_SERVER['REQUEST_URI'];
$end = array_slice(explode('/', rtrim($url, '/')), -1)[0];
$x = explode('.', $end);
?>

<ul>
    <li><a class="<?= ($x[0] == 'index') ? 'active' : '' ?>" href=" index.php">Home</a></li>
    <li><a class="<?= ($x[0] == 'product') ? 'active' : '' ?>" href=" product.php">Product</a></li>
    <li><a class="<?= ($x[0] == 'gallery') ? 'active' : '' ?>" href=" gallery.php">Gallery</a></li>
    <li><a class="<?= ($x[0] == 'blog') ? 'active' : '' ?>" href=" blog.php">Blog</a></li>
    <li><a class="<?= ($x[0] == 'inventory') ? 'active' : '' ?>" href=" inventory.php">Inventory</a></li>
</ul>