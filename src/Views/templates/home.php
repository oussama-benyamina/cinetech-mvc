<div class="container-fluid p-0">
    <!-- Hero Carousel -->
    <div class="hero-carousel swiper mb-5">
        <div class="swiper-wrapper">
            <?php foreach ($trendingContent as $item): ?>
                <div class="swiper-slide">
                    <div class="carousel-item-overlay"></div>
                    <img src="<?php echo $item->getImages()->getJpg()->getLargeImageUrl(); ?>" 
                         alt="<?php echo $item->getTitle(); ?>"
                         class="carousel-img">
                    <div class="carousel-content">
                        <h2 class="carousel-title"><?php echo $item->getTitle(); ?></h2>
                        <div class="carousel-info">
                            <span class="badge bg-primary me-2"><?php echo $item->getType(); ?></span>
                            <span class="badge bg-secondary">
                                <?php echo $item->getType() === 'TV' ? $item->getEpisodes() . ' Episodes' : 'Movie'; ?>
                            </span>
                        </div>
                        <p class="carousel-synopsis"><?php echo substr($item->getSynopsis(), 0, 200) . '...'; ?></p>
                        <a href="/details/<?php echo $item->getMalId(); ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="container">
      

        <!-- Movies Section -->
        <?php if (!empty($movies)): ?>
            <section class="movies-section">
                <h2 class="section-title">Popular Anime</h2>
                <div class="movies-grid">
                    <?php foreach ($movies as $movie): ?>
                        <div class="movie-card">
                            <a href="/details/<?php echo $movie->getMalId(); ?>">
                                <?php if ($movie->getImages()): ?>
                                    <img src="<?php echo $movie->getImages()->getJpg()->getImageUrl(); ?>" 
                                         alt="<?php echo $movie->getTitle(); ?>"
                                         class="card-img">
                                <?php endif; ?>
                            </a>
                            <div class="card-content">
                                <h3 class="card-title"><?php echo $movie->getTitle(); ?></h3>
                                <p class="card-info">Type: <?php echo $movie->getType(); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <!-- TV Series Section -->
        <?php if (!empty($tvSeries)): ?>
            <section class="series-section">
                <h2 class="section-title">Popular Anime Series</h2>
                <div class="series-grid">
                    <?php foreach ($tvSeries as $series): ?>
                        <div class="series-card">
                            <a href="/details/<?php echo $series->getMalId(); ?>">
                                <?php if ($series->getImages()): ?>
                                    <img src="<?php echo $series->getImages()->getJpg()->getImageUrl(); ?>" 
                                         alt="<?php echo $series->getTitle(); ?>"
                                         class="card-img">
                                <?php endif; ?>
                            </a>
                            <div class="card-content">
                                <h3 class="card-title"><?php echo $series->getTitle(); ?></h3>
                                <p class="card-info">Episodes: <?php echo $series->getEpisodes(); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>
    </div>
</div>
