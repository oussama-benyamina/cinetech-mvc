<?php
// Generate CSRF token if it doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<div class="login-container">
    <h2>Login</h2>
    
    <?php if (isset($_SESSION['user_id'])): ?>
    <div class="info-message">
        You are already logged in as <?php echo htmlspecialchars($_SESSION['user_firstname']); ?>.
        <br>
        <a href="/profile">Go to Profile</a> or <a href="/logout">Logout</a>
    </div>
    <?php else: ?>
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <?php if (isset($_SESSION['success'])): ?>
            <div class="success-message">
                <?php echo htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>
        
        <form action="/login" method="POST" class="login-form">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            
            <button type="submit" class="login-button">Login</button>
        </form>
        
        <div class="form-footer">
            <p>Don't have an account? <a href="/signup">Sign up here</a></p>
        </div>
    <?php endif; ?>
</div>

<style>
.info-message {
    background: #e3f2fd;
    color: #1565c0;
    padding: 1rem;
    border-radius: 5px;
    margin-bottom: 1rem;
    text-align: center;
}

.info-message a {
    color: #1565c0;
    text-decoration: underline;
    font-weight: bold;
}

.info-message a:hover {
    color: #0d47a1;
}
</style>