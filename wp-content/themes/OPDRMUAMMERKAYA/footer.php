        <!------------------------------------------------
		footer - start
		------------------------------------------------>
        <footer class="footer bg-primary-color">
            <div class="container">
                <div class="footer-top">
                    <?php while (have_rows('iletisim', 'voobi_options')) : the_row(); ?>
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-lg-6 col-sm-7 col-10">
                                <a href="<?php bloginfo('url') ?>" class="logo">
                                    <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/logo_white.png" alt="Muammer Kaya" width="280" height="auto">
                                </a>
                            </div>
                            <div class="col-lg-6 col-sm-7 col-10 d-lg-flex justify-content-lg-end">
                                <?php while (have_rows('sosyal_medya')) : the_row(); ?>
                                    <div class="social-links">
                                        <a href="<?php echo get_sub_field('instagram'); ?>" class="social-link"><i class="fab fa-instagram"></i><span>Instagram</span></a>
                                        <a href="<?php echo get_sub_field('facebook'); ?>" class="social-link"><i class="fab fa-facebook"></i><span>Facebook</span></a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="footer-middle d-none d-lg-block">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <?php $query = new WP_Query(array(
                                'post_type' => 'tedaviler',
                                'post_status' => 'publish'
                            )); ?>
                            <div class="col-lg-8 col-sm-12">
                                <div class="info-box">
                                    <h6 class="info-title" style="font-size: 25px !important; "><?php pll_e('tedavi-1'); ?></h6>
                                    <div class="row">
                                        <div class="col-6">

                                            <ul class="info-list">
                                                <?php while ($query->have_posts()) :  $query->the_post(); ?>
                                                    <li><a href="<?php echo get_the_permalink() ?>" class="info-link"><?php echo get_the_title() ?></a></li>
                                                <?php endwhile;
                                                wp_reset_query();
                                                ?>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                            <?php while (have_rows('iletisim', 'voobi_options')) : the_row(); ?>
                                <div class="info-box">
                                    <h6 class="info-title" style="font-size: 25px !important; "><?php pll_e('iletisim'); ?></h6>
                                    <ul class="info-list"> 
                                                                          
                                        <li class="info-link"><i style="margin-right: 10px;" class="fa fa-home"></i>
                                            <?php echo get_sub_field('adres'); ?>
                                        </li>
                                        <?php while(have_rows('telefonlar')): the_row(); ?>    
                                        <li class="info-link"><i style="margin-right: 17px;" class="fa fa-mobile-alt"></i>
                                            <a style="text-decoration: none; color: white;" href="tel://<?php echo get_sub_field('telefon'); ?>"><?php echo get_sub_field('telefon'); ?></a>
                                        </li>
                                        <?php endwhile; ?>
                                        <?php while(have_rows('whatsapp')): the_row(); ?>
                                        <li class="info-link"><i style="margin-right: 17px;" class="fa fa-mobile-alt"></i> 
                                            <a style="text-decoration: none; color: white;" href="tel://<?php echo get_sub_field('telefon'); ?>"><?php echo get_sub_field('telefon'); ?></a>                                      
                                        </li>
                                        <?php endwhile; ?>
                                        <li class="info-link"><i style="margin-right: 10px;" class="fa fa-envelope"></i>
                                            <a style="text-decoration: none; color: white;" href="mailto:<?php echo get_sub_field('eposta'); ?>"><?php echo get_sub_field('eposta'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 col-sm-7 col-10">
                            <p>OP. DR. MUAMMER KAYA</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!------------------------------------------------
		footer - end
		------------------------------------------------>
        </div>
        <button id="scroll-top" title="Top"><i class="fal fa-angle-up"></i></button>



        <div class="mobile-menu-overlay"></div>

        <div class="mobile-menu-container mobile-menu-light">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="fal fa-times"></i></span>
                <nav class="mobile-nav mt-3">
                    <ul class="mobile-menu">

                        <li>
                            <a href="<?php bloginfo('url') ?>"><?php pll_e('anasayfa'); ?></a>
                        </li>
                        <li>
                            <a href="#">Kurumsal<i class="fas fa-caret-down"></i></a>
                            <ul href="#">
                                <li><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/about.html">Hakkımızda</a></li>
                                <li><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/team.html">Ekibimiz</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Tedaviler<i class="fas fa-caret-down"></i></a>
                            <ul href="#">
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/cilt-yenileme-tedavisi.html">Cilt
                                        Yenileme Tedavisi</a></li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/mezoterapi-uygulamalari.html">Mezoterapi
                                        Uygulamaları</a></li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/kirisiklik-tedavisi.html">Kırışıklık
                                        Tedavisi</a></li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/leke-tedavisi.html">Leke Tedavisi</a>
                                </li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/thulium-tedavisi.html">Thulium Lazer</a>
                                </li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/dudak-dolgusu.html">Dudak Dolgusu</a>
                                </li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/burun-dolgusu.html">Burun Dolgusu</a>
                                </li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/yanak-dolgusu.html">Yanak Dolgusu</a>
                                </li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/akilli-dolgu.html">Akıllı Dolgu</a>
                                </li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/bolgesel-zayiflama.html">Bölgesel
                                        Zayıflama</a></li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/altin-igne.html">Altın İğne
                                        Tedavisi</a></li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/ip-uygulamasi.html">İp
                                        Uygulamaları</a></li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/medikal-ciltbakim.html">Medikal
                                        Cilt Bakımı</a></li>
                                <li style="padding: 0.3rem 1.1rem !important; font-size: 1.6rem"><a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/lazer.html">Lazer
                                        Epilasyon</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/contact.html">İletişim</a>
                        </li>
                    </ul>
                </nav>

                <div class="social-icons mt-6">
                    <a href="https://www.instagram.com/op.dr.muammerkaya/" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/opdr.muammerkaya/" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a style="margin: 0 0 0 15px; font-size: 15px;" href="/" class="social-icon">TR</a>
                    <a style="margin: 0 0 0 15px; font-size: 15px;" href="/en" class="social-icon">EN</a>
                    <a style="margin: 0 0 0 15px; font-size: 15px;" href="/de" class="social-icon">DE</a>
                </div>


            </div>
        </div>
        <?php while (have_rows('')) : the_row(); ?>
            <div class="popup" style="position: fixed;top: 0;left: 0;height: 100%;width: 100%;display: flex;align-items: center;justify-content: center;z-index: 9999;background: rgba(0,0,0,0.5);">
                <div class="popup-wrapper" style="background-color: #fff; padding: 30px; border-radius: 5px;">
                    <div class="close"><i class="fa fa-window-close"></i></div>
                    <div role="form" class="wpcf7" id="wpcf7-f497-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="/#wpcf7-f497-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="497">
                                <input type="hidden" name="_wpcf7_version" value="5.6.2">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f497-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="0">
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                            </div>
                            <?php while (have_rows('')) : the_row(); ?>
                                <div class="modal-body">
                                    <div class="input-group input-light">
                                        <h6 class="input-title"><?php echo get_sub_field('isim'); ?></h6>
                                        <p> <span class="wpcf7-form-control-wrap" data-name="your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="<?php echo get_sub_field('isim'); ?>"></span>
                                        </p>
                                    </div>
                                    <div class="input-group input-light">
                                        <h6 class="input-title"><?php echo get_sub_field('konu'); ?></h6>
                                        <p> <span class="wpcf7-form-control-wrap" data-name="your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('konu'); ?>"></span>
                                        </p>
                                    </div>
                                    <div class="input-group input-light">
                                        <h6 class="input-title"><?php echo get_sub_field('eposta'); ?></h6>
                                        <p> <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('eposta'); ?>"></span>
                                        </p>
                                    </div>
                                    <div class="input-group input-light">
                                        <h6 class="input-title"><?php echo get_sub_field('telefon'); ?></h6>
                                        <p><span class="wpcf7-form-control-wrap" data-name="your-tel"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('telefon'); ?>"></span>
                                        </p>
                                    </div>
                                    <div class="input-group input-light">
                                        <h6 class="input-title"><?php echo get_sub_field('mesaj'); ?></h6>
                                        <p> <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="<?php echo get_sub_field('mesaj'); ?>"></textarea></span>
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



        <?php wp_footer(); ?>
        </body>

        </html>