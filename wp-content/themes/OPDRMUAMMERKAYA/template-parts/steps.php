<section class="container step-section">
    <?php while (have_rows('step')) : the_row(); ?>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-md-8 col-sm-8 col-10">
                <h2 class="ls-n-20 text-center section-heading"><?php echo get_sub_field('ust_baslik'); ?></h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">

            <div class="banner-aside align-items-lg-start d-md-flex col-lg-12 col-md-8 col-sm-8 col-10">
                <figure class="mr-xl-10 mr-lg-5 mr-0">
                    <img src="<?php echo get_sub_field('resim'); ?>" class="img-aside" width="470" height="447">
                    <img src="<?php echo get_sub_field('icon'); ?>" class="puzzle" alt="Puzzle" width="160" height="217">
                </figure>
                <div class="banner-content">
                    <p class="banner-subtitle"></p>
                    <h3 class="banner-title" style="font-size: 3rem;"><?php echo get_sub_field('baslik'); ?></h3>
                    <p class="banner-desc">
                    <p><?php echo get_sub_field('icerik'); ?></p>
                    </p>
                    <?php while (have_rows('buton')) : the_row(); ?>
                        <div class="banner-actions">
                            <a href="<?php echo get_sub_field('link'); ?>" class="btn btn-secondary-color">
                                <span><?php echo get_sub_field('yazi'); ?></span>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endwhile; ?>
        
        <?php while (have_rows('step_2')) : the_row(); ?>
            <div class="banner-aside banner-aside-switch align-items-lg-start d-md-flex img-right col-lg-12 col-md-8 col-sm-8 col-10">
                <figure>
                    <img src="<?php echo get_sub_field('resim'); ?>" class="img-aside" width="470" height="447">
                    <img src="<?php echo get_sub_field('icon'); ?>" class="puzzle" alt="Puzzle" width="160" height="217">
                </figure>
                <div class="banner-content">
                    <p class="banner-subtitle"></p>
                    <h3 class="banner-title" style="font-size: 3rem;"><?php echo get_sub_field('baslik'); ?></h3>
                    <p class="banner-desc">
                    <p><?php echo get_sub_field('icerik'); ?></p>
                    </p>
                    <?php while (have_rows('buton')) : the_row(); ?>
                        <div class="banner-actions">
                            <a href="<?php echo get_sub_field('link'); ?>" class="btn btn-secondary-color">
                                <span><?php echo get_sub_field('yazi'); ?></span>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endwhile; ?>

        <?php while (have_rows('step_3')) : the_row(); ?>
            <div class="banner-aside align-items-lg-start d-md-flex col-lg-12 col-md-8 col-sm-8 col-10">
                <figure class="mr-xl-10 mr-lg-5 mr-0">
                    <img src="<?php echo get_sub_field('resim'); ?>" class="img-aside" width="470" height="447">
                    <img src="<?php echo get_sub_field('icon'); ?>" class="puzzle" alt="Puzzle" width="160" height="217">
                </figure>
                <div class="banner-content">
                    <p class="banner-subtitle"></p>
                    <h3 class="banner-title" style="font-size: 3rem;"><?php echo get_sub_field('baslik'); ?></h3>
                    <p class="banner-desc">
                    <p><?php echo get_sub_field('icerik'); ?></p>
                    </p>
                    <?php while (have_rows('buton')) : the_row(); ?>
                        <div class="banner-actions">
                            <a href="<?php echo get_sub_field('link'); ?>" class="btn btn-secondary-color">
                                <span><?php echo get_sub_field('yazi'); ?></span>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
</section>