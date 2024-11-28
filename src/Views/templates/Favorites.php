<div class="favorites-container">
    <h2>My Favorites</h2>
    
    <?php if (isset($error)): ?>
        <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if (empty($favorites)): ?>
        <p>You haven't added any favorites yet.</p>
    <?php else: ?>
        <div class="favorites-grid">
            <?php foreach ($favorites as $anime): ?>
                <div class="favorite-item">
                    <img src="<?php echo htmlspecialchars($anime['image_url']); ?>" 
                         alt="<?php echo htmlspecialchars($anime['title']); ?>">
                    <h3><?php echo htmlspecialchars($anime['title']); ?></h3>
                    <p>Score: <?php echo htmlspecialchars($anime['score']); ?></p>
                    <a href="/details/<?php echo htmlspecialchars($anime['mal_id']); ?>" class="btn-view">View Details</a>
                    <button class="btn-remove" data-anime-id="<?php echo htmlspecialchars($anime['id']); ?>">Remove from Favorites</button>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btn-remove').forEach(button => {
        button.addEventListener('click', function() {
            const animeId = this.getAttribute('data-anime-id');
            fetch(`/toggle-favorite/${animeId}`, { method: 'POST' })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.closest('.favorite-item').remove();
                    }
                });
        });
    });
});
</script>