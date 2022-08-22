<section class="slider">
<div class="intro-slider intro-slider-1 owl-carousel owl-theme owl-nav-inside owl-light slide-animate mb-0" data-toggle="owl" data-owl-options='{
                        "dots": false,
                        "nav": false,
                        "responsive": {
                            "1200": {
                                "nav": true
                            }
                        }
                    }'>

    <?php while (have_rows('slide')) : the_row(); ?>
        <div class="banner intro-slide bg-section" style="background-image:url('<?php echo get_sub_field('resim'); ?>');background-position:100% top">
            <div class="container">
                <div class="banner-content">
                    <h1 class="banner-title">
                        <?php echo get_sub_field('baslik'); ?>
                    </h1>
                    <p class="banner-info">
                        <?php echo get_sub_field('alt_baslik'); ?>
                    </p>
                    <div class="banner-actions">
                        <?php while (have_rows('link_1')) : the_row(); ?>
                            <a href="<?php echo get_sub_field('link'); ?>" class="btn btn-secondary-color">
                                <span> <?php echo get_sub_field('yazi'); ?></span>
                            </a>
                        <?php endwhile; ?>
                        <?php while (have_rows('link_2')) : the_row(); ?>
                            <a href="<?php echo get_sub_field('link'); ?>" class="btn btn-primary-color">
                                <span> <?php echo get_sub_field('yazi'); ?></span>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
</section>