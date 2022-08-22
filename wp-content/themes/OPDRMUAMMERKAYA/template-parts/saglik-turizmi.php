<?php while (have_rows('harita')) : the_row(); ?>
    <section class="bg-gradient map-section">
        <div class="container position-relative">
            <h2 class="ls-n-20 text-center"><?php echo get_sub_field('baslik'); ?></h2>
            <img src="<?php echo get_sub_field('resim'); ?>" class="d-flex mr-auto ml-auto" style="width: 82.6%;height: auto;" alt="Map" width="922" height="606">
            <div class="card-rating card-rating-left">
                <p class="card-info ls-0"><?php echo get_sub_field('icerik'); ?></p>
                <p class="card-info ls-0"><?php echo get_sub_field('icerik_1'); ?></p>
                <?php while (have_rows('buton')) : the_row(); ?>
                    <div class="btn-link">
                        <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('yazi'); ?></a><i class="far fa-caret-right"></i>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endwhile; ?>