<?php
$url = $_SERVER['REQUEST_URI'];
$end = array_slice(explode('/', rtrim($url, '/')), -1)[0];
$x = explode('.', $end);
?>

<!-- Top Navigation Menu -->
<div class="topnav" id="myTopnav">
    <a class="<?= ($x[0] == 'index') ? 'active' : '' ?>" href=" index.php">Home</a>
    <a class="<?= ($x[0] == 'product') ? 'active' : '' ?>" href=" product.php">Product</a>
    <a class="<?= ($x[0] == 'gallery') ? 'active' : '' ?>" href=" gallery.php">Gallery</a>
    <a class="<?= ($x[0] == 'blog') ? 'active' : '' ?>" href=" blog.php">Blog</a>
    <a class="<?= ($x[0] == 'inventory') ? 'active' : '' ?>" href=" inventory.php">Inventory</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>