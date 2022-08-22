            <section class="calisma">
                <div class="bg-primary-color schedule-section">
                    <div class="container">
                        <div class="row position-relative">
                        <img src="https://opdrmuammerkaya.local/wp-content/uploads/2022/08/tk_logo-1.png" class="puzzle pr-0 pl-0 d-lg-block d-xl-block d-md-none d-sm-none d-none" alt="Puzzle" style="width:160px; height:217px;" >
                            <?php while (have_rows('kutu_sol')) : the_row(); ?>
                            <div class="col-lg-5 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
                            
                                <div class="widget-left">
                                    <h4 class="widget-title"><i class="far fa-clock"></i><?php echo get_sub_field('baslik'); ?></h4>
                                    <p class="widget-desc">
                                        
                                    </p>
                                    
                                    <?php while (have_rows('liste')) : the_row(); ?>
                                    <div class="widget-hours">
                                        <span><?php echo get_sub_field('icerik'); ?></span>
                                        
                                    </div>
                                    
                                    <?php endwhile; ?>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php while (have_rows('kutu_sag')) : the_row(); ?>
                            <div class="col-lg-5 offset-lg-1 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
                                <div class="widget-right">
                                    <h4 class="widget-title"><i class="far fa-heart-rate"></i><?php echo get_sub_field('baslik'); ?></h4>
                                    <p class="widget-desc">
                                    <?php echo get_sub_field('alt_baslik'); ?>
                                    </p>
                                    <?php while (have_rows('link')) : the_row(); ?>
                                    <a href="<?php echo get_sub_field('link'); ?>" class="btn btn-sm btn-secondary-color btn-secondary-color-1 ls-0">
                                        <span><?php echo get_sub_field('text'); ?></span>
                                    </a>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>                   
                </div>
            </section>