<?php while(have_rows('')): the_row();?>
<div class="container contact-map-section position-relative padding-small">
        <div id="map" style="height: 684px;background-color: #f4f4f4;border-radius: 30px;">
            <iframe src="<?php echo get_sub_field('harita_link'); ?>" style="width: 100%;height: 100%;" frameborder="0" allowfullscreen=""></iframe>
        </div>
        <div class="card-contact card-rating">
            <p class="card-info ls-0">
                Ziyaret Edin
            </p>
            <?php while(have_rows('buton')): the_row();?>
            <div class="btn-link">
                <a href="<?php echo get_sub_field('link'); ?>" target="_blank"><?php echo get_sub_field('yazi'); ?></a><i class="far fa-caret-right"></i>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endwhile; ?>