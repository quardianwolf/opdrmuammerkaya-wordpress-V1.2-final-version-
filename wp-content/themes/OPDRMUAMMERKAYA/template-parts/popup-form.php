<?php while(have_rows('')): the_row(); ?>
<div class="popup"
    style="position: fixed;top: 0;left: 0;height: 100%;width: 100%;display: flex;align-items: center;justify-content: center;z-index: 9999;background: rgba(0,0,0,0.5);">
    <div class="popup-wrapper" style="background-color: #fff; padding: 30px; border-radius: 5px;">
        <div class="close"><i class="fa fa-window-close"></i></div>
        <div role="form" class="wpcf7" id="wpcf7-f497-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
            </div>
            <form action="/#wpcf7-f497-o1" method="post" class="wpcf7-form init" novalidate="novalidate"
                data-status="init">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="497">
                    <input type="hidden" name="_wpcf7_version" value="5.6.2">
                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f497-o1">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                </div>
                <?php while(have_rows('')): the_row(); ?>
                <div class="modal-body">
                    <div class="input-group input-light">
                        <h6 class="input-title"><?php echo get_sub_field('isim'); ?></h6>
                        <p> <span class="wpcf7-form-control-wrap" data-name="your-name"><input type="text"
                                    name="your-name" value="" size="40"
                                    class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false"
                                    placeholder="<?php echo get_sub_field('isim'); ?>"></span>
                        </p>
                    </div>
                    <div class="input-group input-light">
                        <h6 class="input-title"><?php echo get_sub_field('konu'); ?></h6>
                        <p> <span class="wpcf7-form-control-wrap" data-name="your-subject"><input type="text"
                                    name="your-subject" value="" size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                    aria-required="true" aria-invalid="false"
                                    placeholder="<?php echo get_sub_field('konu'); ?>"></span>
                        </p>
                    </div>
                    <div class="input-group input-light">
                        <h6 class="input-title"><?php echo get_sub_field('eposta'); ?></h6>
                        <p> <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email"
                                    name="your-email" value="" size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                    aria-required="true" aria-invalid="false"
                                    placeholder="<?php echo get_sub_field('eposta'); ?>"></span>
                        </p>
                    </div>
                    <div class="input-group input-light">
                        <h6 class="input-title"><?php echo get_sub_field('telefon'); ?></h6>
                        <p><span class="wpcf7-form-control-wrap" data-name="your-tel"><input type="tel" name="your-tel"
                                    value="" size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control"
                                    aria-required="true" aria-invalid="false"
                                    placeholder="<?php echo get_sub_field('telefon'); ?>"></span>
                        </p>
                    </div>
                    <div class="input-group input-light">
                        <h6 class="input-title"><?php echo get_sub_field('mesaj'); ?></h6>
                        <p> <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea name="your-message"
                                    cols="40" rows="10"
                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                    aria-required="true" aria-invalid="false"
                                    placeholder="<?php echo get_sub_field('mesaj'); ?>"></textarea></span>
                        </p>
                    </div>
                    <p><button type="submit" class="btn btn-secondary-color btn-form"><br>
                            <span><?php echo get_sub_field('gonder'); ?></span><br>
                        </button></p>
                </div>
                <?php endwhile; ?>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
        </div>
    </div>
</div>
<?php endwhile; ?>