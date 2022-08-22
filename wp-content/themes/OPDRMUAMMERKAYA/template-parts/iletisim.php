<?php while (have_rows('kutu')) : the_row(); ?>
    <div class="page-header bg-more-light">
        <div class="container">
            <h2 class="page-title"><?php the_title(); ?></h2>
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <?php while (have_rows('nav')) : the_row(); ?>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>"><?php echo get_sub_field('home_page'); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo get_sub_field('current_page'); ?></li>
                    </ol>
                <?php endwhile; ?>
            </nav>
        </div>
    </div>
    <div class="container contact-detail-section padding-small">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-sm-8 col-10">
                <h2 class="ls-n-20 text-center section-heading"><?php echo get_sub_field('ust_baslik'); ?></h2>
            </div>
        </div>
        <?php while (have_rows('dortlu_kutu')) : the_row(); ?>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-sm-6 col-10">
                    <?php while (have_rows('kutu_1')) : the_row(); ?>
                        <div class="icon-box icon-box-simple">
                            <figure>
                                <a href="tel:<?php echo get_sub_field('icerik_1'); ?>" class="icon-image"><i class="fal fa-phone"></i></a>
                            </figure>
                            <div class="icon-box-content text-center">
                                <h4 class="box-title mb-0"><?php echo get_sub_field('baslik'); ?></h4>
                                <p class="box-desc ls-0 mb-0">
                                    <a href="tel:<?php echo get_sub_field('icerik_1'); ?>"><?php echo get_sub_field('icerik_1'); ?></a>
                                    <br>
                                    <a href="tel:<?php echo get_sub_field('icerik_2'); ?>"><?php echo get_sub_field('icerik_2'); ?></a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="col-lg-3 col-sm-6 col-10">
                    <?php while (have_rows('kutu_2')) : the_row(); ?>
                        <div class="icon-box icon-box-simple">
                            <figure>
                                <a href="https://wa.me/<?php echo get_sub_field('icerik_1'); ?>" class="icon-image"><i class="fab fa-whatsapp"></i></a>
                            </figure>
                            <div class="icon-box-content text-center">
                                <h4 class="box-title mb-0"><?php echo get_sub_field('baslik'); ?></h4>
                                <p class="box-desc ls-0 mb-0">
                                    <a href="https://wa.me/<?php echo get_sub_field('icerik_1'); ?>"><?php echo get_sub_field('icerik_1'); ?></a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="col-lg-3 col-sm-6 col-10">
                    <?php while (have_rows('kutu_3')) : the_row(); ?>
                        <div class="icon-box icon-box-simple">
                            <figure>
                                <a href="mailto:<?php echo get_sub_field('icerik_1'); ?>" class="icon-image"><i class="fal fa-envelope-open"></i></a>
                            </figure>
                            <div class="icon-box-content text-center">
                                <h4 class="box-title mb-0"><?php echo get_sub_field('baslik'); ?></h4>
                                <p class="box-desc ls-0 mb-0">
                                    <a href="mailto:<?php echo get_sub_field('icerik_1'); ?>"><?php echo get_sub_field('icerik_1'); ?></a>

                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="col-lg-3 col-sm-6 col-10">
                    <?php while (have_rows('kutu_4')) : the_row(); ?>
                        <div class="icon-box icon-box-simple">
                            <figure>
                                <a href="<?php echo get_sub_field('icerik_2'); ?>" target="_blank" class="icon-image"><i class="fal fa-map-marker-alt"></i></a>
                            </figure>
                            <div class="icon-box-content text-center">
                                <h4 class="box-title mb-0"><?php echo get_sub_field('baslik'); ?></h4>
                                <p class="box-desc ls-0 mb-0">
                                    <a href="<?php echo get_sub_field('icerik_2'); ?>" target="_blank">
                                        <?php echo get_sub_field('icerik_1'); ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php while (have_rows('harita')) : the_row(); ?>
        <div class="container contact-map-section position-relative padding-small">
            <div id="map" style="height: 684px;background-color: #f4f4f4;border-radius: 30px;">
                <iframe src="<?php echo get_sub_field('harita_link'); ?>" style="width: 100%;height: 100%;" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <div class="card-contact card-rating">
                <p class="card-info ls-0">
                    <?php echo get_sub_field('yazi'); ?>
                </p>
                <?php while (have_rows('buton')) : the_row(); ?>
                    <div class="btn-link">
                        <a href="<?php echo get_sub_field('link'); ?>" target="_blank"><?php echo get_sub_field('yazi'); ?></a><i class="far fa-caret-right"></i>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php while (have_rows('form_1')) : the_row(); ?>
        <div class="container contact-form-section padding-small">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 col-sm-8 col-10">
                    <h2 class="ls-n-20 text-center section-heading"><?php echo get_sub_field('baslik'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div role="form" class="wpcf7" id="wpcf7-f628-o2" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="/iletisim/#wpcf7-f628-o2" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="628">
                            <input type="hidden" name="_wpcf7_version" value="5.6.2">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f628-o2">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div>
                        <?php while (have_rows('icerikler')) : the_row(); ?>
                            <div class="row">
                                <div class=" col-sm-8 offset-sm-2 col-10 offset-1">
                                    <div class="row row-joined">
                                        <div class="col-sm-12 col-lg-6 mt-2">
                                            <div class="input-group input-light">
                                                <h6 class="input-title"><?php echo get_sub_field('isim'); ?> </h6>
                                                    <p> <span class="wpcf7-form-control-wrap" data-name="your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('isim'); ?>"></span>
                                                    </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mt-2">
                                            <div class="input-group input-light">
                                                <h6 class="input-title"><?php echo get_sub_field('konu'); ?></h6>
                                                <p> <span class="wpcf7-form-control-wrap" data-name="your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('konu'); ?>"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mt-2">
                                            <div class="input-group input-light">
                                                <h6 class="input-title"><?php echo get_sub_field('eposta'); ?></h6>
                                                <p> <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="text" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('eposta'); ?>"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mt-2">
                                            <div class="input-group input-light">
                                                <h6 class="input-title"><?php echo get_sub_field('telefon'); ?></h6>
                                                <p> <span class="wpcf7-form-control-wrap" data-name="phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('telefon'); ?>"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="input-group input-light">
                                                <h6 class="input-title"><?php echo get_sub_field('mesaj'); ?></h6>
                                                <p> <span class="wpcf7-form-control-wrap" data-name="Mesaj"><textarea name="Mesaj" cols="100" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('mesaj'); ?>"></textarea></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <p> <button type="submit" class="btn btn-secondary-color btn-form d-flex mr-auto ml-auto mb-1"><br>
                                            <span><?php echo get_sub_field('randevu_al'); ?></span><br>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endwhile; ?>