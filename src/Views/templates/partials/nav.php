<!-- Navbar -->
    <nav class="navbar">
        <a href="/" ><div class="logo">
             My<span>Anime</span>
        </div></a>
        
        <form action="/search" method="get" class="d-flex position-relative">
            <input class="form-control me-2" type="search" name="q" id="searchInput" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <div id="autocompleteResults" class="autocomplete-results"></div>
        </form>
        
        <div class="nav-links">
            <a href="/" class="nav-link">Home</a>
            
        </div>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <a href="/favorites" class="nav-link">My Favorites</a>
        <?php endif; ?>
        <div class="auth-buttons">
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <span class="welcome-text">Welcome, <?php echo htmlspecialchars($_SESSION['user_firstname']); ?></span>
                <a href="/profile" class="btn-profile">Profile</a>
                <a href="/logout" class="btn-logout" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
            <?php else: ?>
                <a href="/login" class="btn-login">Login</a>
                <a href="/signup" class="btn-signup">Sign Up</a>
            <?php endif; ?>
        </div>
    </nav>  

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const autocompleteResults = document.getElementById('autocompleteResults');
    
        searchInput.addEventListener('input', function() {
            const query = this.value;
    
            if (query.length < 2) {
                autocompleteResults.innerHTML = '';
                return;
            }
    
            fetch(`/autocomplete?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    autocompleteResults.innerHTML = '';
                    data.forEach(anime => {
                        const div = document.createElement('div');
                        div.className = 'autocomplete-item';
                        div.innerHTML = `
                            <img src="${anime.image_url}" alt="${anime.title}" style="width: 30px; height: 30px; margin-right: 10px;">
                            <strong>${anime.title}</strong>
                        `;
                        div.addEventListener('click', function() {
                            window.location.href = `/details/${anime.id}`;
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
  
    max-height: 200px;
    overflow-y: auto;
    position: absolute;
    background-color: white;
    z-index: 1000;
    width: calc(100% - 1rem);
    color: black;
    top: 42px;
}

.autocomplete-item {
    padding: 10px;
    cursor: pointer;
    display: flex;
    align-items: center;
}

.autocomplete-item:hover {
    background-color: #f0f0f0;
}
</style>

