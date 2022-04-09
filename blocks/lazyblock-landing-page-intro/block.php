<section class="home-intro">
    <div class="container">
        <div class="home-intro-wrapper">
            <div class="home-intro__info">
                <h1 class="home-intro__info-title" data-aos="fade-right" data-aos-delay="200">
                    <?php echo $attributes['title']?>
                </h1>
                <p class="home-intro__info-desc" data-aos="fade-right" data-aos-delay="300">
                    <?php echo $attributes['subtitle']?>
                </p>
                <div class="home-intro__info-bottom" data-aos="fade-right" data-aos-delay="400">
                    
                    <?php if ( !empty($attributes['book-button-text']) && !empty($attributes['book-button-url']) ):?>
                        <a href="<?php echo $attributes['book-button-url'] ?>" class="home-intro__info-bottom_book btn btn-white">
                            <?php echo $attributes['book-button-text'] ?>
                        </a>
                    <?php endif; ?>

                    <?php if ( !empty($attributes['sign-button-text']) && !empty($attributes['sign-button-url']) ):?>
                    <a href="<?php echo $attributes['sign-button-url'] ?>" class="home-intro__info-bottom_sign">
                        <span><?php echo $attributes['sign-button-text'] ?></span>
                        <svg><use xlink:href="#sign-arrow"></use></svg>
                    </a>
                    <?php endif; ?>

                </div>
            </div>
            <div class="home-intro__image" data-aos="fade-left">
                <div class="home-intro__image-inner">
                    <img src="<?php echo $attributes['image']['url']?>" alt="<?php echo $attributes['image']['alt']?>">
                </div>
            </div>
        </div>
    </div>
</section>