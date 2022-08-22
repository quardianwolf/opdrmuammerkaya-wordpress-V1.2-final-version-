<?php while (have_rows('form')) : the_row(); ?>
    <section class="contact-form">
        <div class="bg-primary-color appointment-dropdown">
            <div class="container pt-4 pb-4 position-relative">
                <a href="javascript:;" class="btn-book bg-primary-color ls-n-20">
                    <p class="ls-n-20"><?php echo get_sub_field('baslik'); ?></p>
                    <i class="far fa-sort-up"></i>
                </a>
                <div class="appointment item-gutter-top">
                    <form action="/en/homepage/#wpcf7-f465-o2" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="465">
                            <input type="hidden" name="_wpcf7_version" value="5.6.2">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f465-o2">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div>
                        <?php while (have_rows('icerikler')) : the_row(); ?>
                        <div class="row row-joined">
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0">
                                <div class="input-group input-dark ">
                                    <h6 class="input-title"><?php echo get_sub_field('isim'); ?></h6>
                                    <p> <span class="wpcf7-form-control-wrap" data-name="your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('isim'); ?>"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0  ">
                                <div class="input-group input-dark ">
                                    <h6 class="input-title"><?php echo get_sub_field('konu'); ?></h6>
                                    <p> <span class="wpcf7-form-control-wrap" data-name="your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('konu'); ?>"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 ">
                                <div class="input-group input-dark ">
                                    <h6 class="input-title"><?php echo get_sub_field('eposta'); ?></h6>
                                    <p> <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="text" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('eposta'); ?>"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 ">
                                <div class="input-group input-dark ">
                                    <h6 class="input-title"><?php echo get_sub_field('telefon'); ?></h6>
                                    <p> <span class="wpcf7-form-control-wrap" data-name="phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('telefon'); ?>"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-8 offset-lg-0 ">
                                <div class="input-group input-dark ">
                                    <h6 class="input-title"><?php echo get_sub_field('mesaj'); ?></h6>
                                    <p> <span class="wpcf7-form-control-wrap" data-name="Mesaj"><textarea name="Mesaj" cols="83" rows="3" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="<?php echo get_sub_field('mesaj'); ?>"></textarea></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-4 ">
                                <button type="submit" class="btn btn-secondary-color btn-secondary-color-1 btn-form"><br>
                                    <span><?php echo get_sub_field('randevu_al'); ?></span><br>
                                </button>
                            </div>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </div>
                        <?php endwhile; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>