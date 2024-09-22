<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="<?php echo site_url(); ?>">
                Cherry<span class="logo-dot">.</span>
            </a>
        </div>

        <ul class="nav-menu">
            <li class="nav-item <?php if (is_page('about-us')) echo 'current-page'; ?>"><a href="<?php echo site_url('/about-us'); ?>">About</a></li>
            <li class="nav-item <?php if (is_page('shop')) echo 'current-page'; ?>"><a href="<?php echo site_url('/shop'); ?>">Shop</a></li>
            <li class="nav-item <?php if (is_page('cart')) echo 'current-page'; ?>"><a href="<?php echo site_url('/cart'); ?>">Cart</a></li>
        </ul>
    </nav>