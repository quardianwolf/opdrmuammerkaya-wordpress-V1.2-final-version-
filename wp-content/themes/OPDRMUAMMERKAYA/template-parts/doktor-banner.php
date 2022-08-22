<?php while (have_rows('doktor')) : the_row(); ?>
<section class="container doctor-detailed-section padding-small">
                <div class="row">
                    <div class="col-lg-7 offset-lg-0 order-lg-1 col-sm-8 offset-sm-2 col-10 offset-1 order-2">
                        <div class="banner-content">
                            <h3 class="banner-title"><?php echo get_sub_field('baslik'); ?></h3>
                            <p class="banner-desc">
                            <p
                                style="box-sizing: border-box; margin: 15px 0px 0px; padding: 0px 46px 0px 0px; list-style-type: none; font-size: 15px; line-height: 26px; color: #212529; font-family: Montserrat, sans-serif; text-align: left;">
                                <?php echo get_sub_field('icerik'); ?></p>
                            
                            </p>
                            <?php while (have_rows('buton')) : the_row(); ?>
                            <a href="<?php echo get_sub_field('link'); ?>">
                                <button class="btn btn-md btn-secondary-color mr-0">
                                    <span><?php echo get_sub_field('yazi'); ?></span>
                                </button>
                            </a>
                            <?php endwhile;?>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-0 order-lg-2 col-sm-8 offset-sm-2 col-10 offset-1 order-1">
                        <div class="doctor-detailed-image">
                            <figure>
                                <img src="<?php echo get_sub_field('resim'); ?>"
                                    class="img-aside" width="470" height="447">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <?php endwhile; ?>