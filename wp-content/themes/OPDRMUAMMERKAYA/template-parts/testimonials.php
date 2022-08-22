<section class="container review-section">
                <div class="row">
                <?php while(have_rows('yorum')): the_row();?>
                    <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <h3 class="ls-n-20 text-center banner-title"><?php echo get_sub_field('baslik'); ?></h3>
                    </div>
                    <?php endwhile; ?>
                </div>


                <div class="card card-review review-carousel align-items-start">
                    <div class="grid-container row" id="reviews" data-layout="fitRows">
                        <?php while(have_rows('yorum')): the_row();?>
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 pf-recent">
                            <div class="card card-review text-center mt-3">
                                <div class="card-content">
                                    <h4 class="review-author"><?php echo  get_sub_field('isim');?></h4>
                                    <div class="ratings-container">
                                        <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                        <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                        <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                        <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                    </div>
                                    <p class="review-desc">
                                    <?php echo  get_sub_field('icerik');?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>                      

                    </div>
                </div>
            </section>