<div class="profile-container">
    <h2>My Profile</h2>
    
    <?php if (isset($error)): ?>
        <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['success'])): ?>
        <div class="success-message">
            <?php echo htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>

    <div class="profile-sections">
        <!-- Section Informations Personnelles -->
        <section class="profile-section">
            <h3>Personal Information</h3>
            <form action="/profile/update" method="POST" class="profile-form">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" 
                           value="<?php echo htmlspecialchars($user['firstname'] ?? ''); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" 
                           value="<?php echo htmlspecialchars($user['lastname'] ?? ''); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" 
                           value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>" required>
                </div>
                
                <button type="submit" class="btn-update">Update Profile</button>
            </form>
        </section>

        <!-- Section Changement de Mot de Passe -->
        <section class="profile-section">
            <h3>Change Password</h3>
            <form action="/profile/password" method="POST" class="password-form">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" name="current_password" id="current_password" required>
                </div>
                
                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" name="new_password" id="new_password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" required>
                </div>
                
                <button type="submit" class="btn-update">Update Password</button>
            </form>
        </section>

        <!-- Section Favoris -->
        <section class="profile-section favorites-section">
            <h3>My Favorites</h3>
            <?php if (!empty($favorites)): ?>
                <div class="favorites-grid">
                    <?php foreach ($favorites as $favorite): ?>
                        <div class="favorite-item">
                            <img src="<?php echo htmlspecialchars($favorite['image_url']); ?>" 
                                 alt="<?php echo htmlspecialchars($favorite['title']); ?>">
                            <h4><?php echo htmlspecialchars($favorite['title']); ?></h4>
                            <a href="/details/<?php echo $favorite['anime_id']; ?>" 
                               class="btn-view">View Details</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p>No favorites added yet.</p>
            <?php endif; ?>
        </section>
    </div>
</div>
