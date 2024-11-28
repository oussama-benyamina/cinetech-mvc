<?php
$userLoggedIn = isset($_SESSION['user_id']);
?>

<div class="anime-details">
    <h1><?php echo htmlspecialchars($anime->getTitle()); ?></h1>
    <img src="<?php echo htmlspecialchars($anime->getImages()->getJpg()->getLargeImageUrl()); ?>" alt="<?php echo htmlspecialchars($anime->getTitle()); ?>">
    <p>Score: <?php echo htmlspecialchars($anime->getScore()); ?></p>
    <p><?php echo nl2br(htmlspecialchars($anime->getSynopsis())); ?></p>

    <?php if ($userLoggedIn): ?>
        <button id="favoriteBtn" data-anime-id="<?php echo $animeId; ?>" class="<?php echo $isFavorite ? 'remove-favorite' : 'add-favorite'; ?>">
            <?php echo $isFavorite ? 'Remove from Favorites' : 'Add to Favorites'; ?>
        </button>
    <?php endif; ?>

    <section class="comments-section">
        <h2>Comments</h2>
        <?php if ($userLoggedIn): ?>
            <form id="commentForm">
                <input type="hidden" name="anime_id" value="<?php echo htmlspecialchars($animeId); ?>">
                <textarea name="content" required placeholder="Write your comment here..."></textarea>
                <button type="submit" id="addCommentBtn">Add Comment</button>
            </form>
        <?php else: ?>
            <div class="login-prompt">
                <p><a href="/login">Log in</a> to add a comment</p>
            </div>
        <?php endif; ?>

        <div id="commentsList">
            <?php if (!empty($comments)): ?>
                <?php foreach ($comments as $comment): ?>
                    <div class="comment">
                        <p><strong><?php echo htmlspecialchars($comment['username']); ?></strong></p>
                        <p><?php echo nl2br(htmlspecialchars($comment['content'])); ?></p>
                        <p><small><?php echo htmlspecialchars($comment['created_at']); ?></small></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-comments">No comments yet. Be the first to comment!</p>
            <?php endif; ?>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const favoriteBtn = document.getElementById('favoriteBtn');
    if (favoriteBtn) {
        favoriteBtn.addEventListener('click', function() {
            const animeId = this.getAttribute('data-anime-id');
            fetch(`/toggle-favorite/${animeId}`, { method: 'POST' })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.textContent = this.textContent.includes('Add') ? 'Remove from Favorites' : 'Add to Favorites';
                        this.classList.toggle('add-favorite');
                        this.classList.toggle('remove-favorite');
                    }
                });
        });
    }

    const commentForm = document.getElementById('commentForm');
    if (commentForm) {
        commentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const content = this.querySelector('textarea').value;
            const animeId = this.querySelector('input[name="anime_id"]').value;

            fetch('/add-comment/' + animeId, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ content: content })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const commentsList = document.getElementById('commentsList');
                    const newComment = document.createElement('div');
                    newComment.className = 'comment';
                    newComment.innerHTML = `
                        <p><strong>${data.comment.username}</strong></p>
                        <p>${data.comment.content}</p>
                        <p><small>${data.comment.created_at}</small></p>
                    `;
                    commentsList.insertBefore(newComment, commentsList.firstChild);
                    this.reset();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while adding the comment');
            });
        });
    }
});
</script>