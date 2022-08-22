   <?php while(have_rows('form_1')): the_row(); ?>
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
                    <?php while(have_rows('icerikler')): the_row(); ?>
                    <div class="row">
                        <div class=" col-sm-8 offset-sm-2 col-10 offset-1">
                            <div class="row row-joined">
                                <div class="col-sm-12 col-lg-6 mt-2">
                                    <div class="input-group input-light">
                                        <h6 class="input-title"><?php echo get_sub_field('isim'); ?></h6>
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