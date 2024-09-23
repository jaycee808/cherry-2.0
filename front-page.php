<?php get_header(); ?>

<section class="hero-section">
    <div class="hero-tagline">Take a bite</div>
    <button class="hero-btn"><a href="<?php echo site_url('/shop'); ?>">Browse Products</a></button>
</section>

<section class="featured-products">
    <h2 class="section-title">Featured Products</h2>
        <div class="featured-products-display"><?php echo do_shortcode("[woo_product_slider id=124]")?></div>
</section>

<?php get_footer(); ?>