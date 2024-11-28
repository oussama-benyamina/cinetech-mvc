<!-- Footer -->
<footer class="footer mt-5 py-4">
    <div class="container">
        <div class="row">
            <div clasMY Animes="col-md-4">
                <h3>About MY Anime</h3>
                <p> - Your Anime Universe</p>
            </div>
            <div class="col-md-4">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                    <li><a href="/" class="nav-link">Home</a></li>
                    
                    
                    <li><a href="/contact" class="nav-link">Contact</a></li>
                    
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" class="me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                    
                    <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                    <a href="/favorites" class="nav-link">My Favorites</a>
                    <?php endif; ?>
                    <div class="auth-buttons">
                        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                            
                            <a href="/profile" class="btn-profile">Profile</a>
                            <a href="/logout" class="btn-logout" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
                        
                        <?php endif; ?>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="/public/js/main.js"></script>
</body>
</html>