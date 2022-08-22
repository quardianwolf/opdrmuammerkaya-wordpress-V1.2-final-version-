<div class="header-top">
<?php while (have_rows('iletisim', 'voobi_options')) : the_row(); ?>           
                <div class="container">
                    <div class="header-left">
                        <ul class="top-menu top-link-menu">
                           <?php while(have_rows('telefonlar')): the_row();?>                           
                            <li><a href="tel:<?php echo get_sub_field('telefon'); ?>" class="link-phone"><i class="fas fa-phone"></i><?php echo get_sub_field('telefon'); ?></a></li>
                            <?php endwhile; ?>
                            <li><a href="mailto:<?php echo get_sub_field('eposta'); ?>" class="link-email"><i class="fas fa-envelope-open"></i><?php echo get_sub_field('eposta'); ?></a></li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <ul class="top-menu">
                        <?php while(have_rows('sosyal_medya')): the_row();?>    
                            <li><a href="<?php echo get_sub_field('instagram'); ?>" class="social-link" style="margin: 0 0 0 45px"><i class="fab fa-instagram"></i>Instagram</a></li>
                            <li><a href="<?php echo get_sub_field('facebook'); ?>" class="social-link"><i class="fab fa-facebook"></i>Facebook</a></li>
                            <?php endwhile; ?>
                            <?php while(have_rows('diller')): the_row();?>    
                            <a style="margin: 0 0 0 15px; font-size: 15px;" href="<?php echo get_sub_field('tr'); ?>" class="social-icon">TR</a>
                            <a style="margin: 0 0 0 15px; font-size: 15px;" href="<?php echo get_sub_field('en'); ?>" class="social-icon">EN</a>
                            <a style="margin: 0 0 0 15px; font-size: 15px;" href="<?php echo get_sub_field('de'); ?>" class="social-icon">DE</a>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

           