<div class="container mt-4">
    <h2>Search Results for "<?php echo htmlspecialchars($query); ?>"</h2>
    
    <input type="text" id="searchInput" placeholder="Search for anime..." value="<?php echo htmlspecialchars($query); ?>" class="form-control mb-3">
    <div id="autocompleteResults" class="autocomplete-results"></div>

    <?php if (empty($results)): ?>
        <p>No results found.</p>
    <?php else: ?>
        <div class="row">
            <?php foreach ($results as $anime): ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="<?php echo $anime->getImages()->getJpg()->getImageUrl(); ?>" class="card-img-top" alt="<?php echo $anime->getTitle(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $anime->getTitle(); ?></h5>
                            <p class="card-text"><?php echo substr($anime->getSynopsis(), 0, 100) . '...'; ?></p>
                            <a href="/details/<?php echo $anime->getMalId(); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const autocompleteResults = document.getElementById('autocompleteResults');

    searchInput.addEventListener('input', function() {
        const query = this.value;

        if (query.length < 2) {
            autocompleteResults.innerHTML = ''; // Clear results if query is too short
            return;
        }

        fetch(`/autocomplete?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                autocompleteResults.innerHTML = ''; // Clear previous results
                data.forEach(anime => {
                    const div = document.createElement('div');
                    div.className = 'autocomplete-item';
                    div.innerHTML = `<strong>${anime.title}</strong>`;
                    div.addEventListener('click', function() {
                        window.location.href = `/details/${anime.mal_id}`;
                    });
                    autocompleteResults.appendChild(div);
                });
            })
            .catch(error => console.error('Error fetching autocomplete results:', error));
    });
});
</script>

<style>
.autocomplete-results {
    border: 1px solid #ccc;
    max-height: 200px;
    overflow-y: auto;
    position: absolute;
    background-color: white;
    z-index: 1000;
}

.autocomplete-item {
    padding: 10px;
    cursor: pointer;
}

.autocomplete-item:hover {
    background-color: #f0f0f0;
}
</style>