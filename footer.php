<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h4>Contact Us</h4>
            <p>Email: info@cherry.com</p>
        </div>
        <div class="footer-section">
            <h4>Follow Us</h4>
            <p>Instagram | Twitter | Facebook</p>
        </div>
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="<?php echo site_url('/about-us'); ?>">About</a></li>
                <li><a href="<?php echo site_url('/shop'); ?>">Shop</a></li>
                <li><a href="<?php echo site_url('/cart-checkout'); ?>">Cart</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Cherry. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>