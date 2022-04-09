<section class="home-features">
    <div class="container">
        <h2 class="home-features__title" data-aos="fade-in">
            <?php echo $attributes['title']?>
        </h2>
        <div class="home-features__list">

        <?php 
        $delay = 0;
        foreach ($attributes['features'] as $feature): 
            $delay = $delay + 100;
        ?>
            <div class="home-features__list-item" data-aos="fade-right" data-aos-delay="<?php echo $delay ?>">
                <div class="home-features__list-item_image">
                    <img src="<?php echo $feature['feature-icon']['url'] ?>" alt="<?php echo $feature['feature-icon']['alt'] ?>">
                </div>
                <h3 class="home-features__list-item_title">
                    <?php echo $feature['feature-title'] ?>
                </h3>
                <p class="home-features__list-item_desc">
                    <?php echo $feature['feature-description'] ?>
                </p>
            </div>
        <?php endforeach; ?>

        </div>
    </div>
</section>