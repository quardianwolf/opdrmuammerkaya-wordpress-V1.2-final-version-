<div class="review-bg-section bg-section type-section-margin-bottom">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <h3 class="banner-title">
                    <?php pll_e( 'tedavi-1' );?>
                    </h3>
                    <div class="review-carousel owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
									"nav": false,
									"dots": false,
									"margin": 35,
									"responsive": {
										"768": {
											"nav": true
										}
									}
								}'>
                        <?php
                        $tedaviler = get_sub_field('tedavi');
                        if ($tedaviler) :  foreach ($tedaviler as $post) : setup_postdata($post); ?>
                                <div class="card card-review review-carousel align-items-start">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="banner-title">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="border-radius: 3rem !important;" width="100%" height="auto">
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card-content">
                                                <p class="review-desc ls-20">
                                                    <a href="<?php the_permalink(); ?>" style="font-size: 15px;">
                                                        <?php the_field('ozet'); ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        <?php endforeach;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>