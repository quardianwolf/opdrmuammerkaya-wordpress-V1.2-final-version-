<?php while(have_rows('hakkimizda')): the_row();?>
    <div class="page-header bg-more-light">
        <div class="container">
            <h2 class="page-title"><?php echo get_sub_field('sayfa_basligi'); ?></h2>
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php get_bloginfo('url'); ?>"><?php pll_e( 'anasayfa' );?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php pll_e( 'hakkimizda' );?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container about-primary-section">
        <div class="row">
            <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-lg-1 order-2">
                <div class="banner-content">
                    <h1 style="box-sizing: border-box; margin: 25px 0px 20px; font-family: Montserrat, sans-serif; line-height: 1.2; color: #223645; font-size: 32px; padding: 0px; list-style-type: none; letter-spacing: 1px;"><?php echo get_sub_field('baslik'); ?></h1>
                    <div class="cnt" style="box-sizing: border-box; color: #647589; margin-bottom: 7px; padding: 5px 0px; font-family: Montserrat, sans-serif; font-size: 16px;" data-prop="text">
                        <p style="box-sizing: border-box; margin: 0px 0px 15px; padding: 0px; list-style-type: none; font-size: 15px; line-height: 28px; color: inherit; letter-spacing: 0.1px;"><?php echo get_sub_field('icerik'); ?></p>
                        <h3 style="box-sizing: border-box; margin: 20px 0px 15px; font-family: inherit; line-height: 22px; color: inherit; font-size: 22px; padding: 0px; list-style-type: none;"><?php echo get_sub_field('alt_baslik'); ?></h3>
                        <ul style="box-sizing: border-box; margin: 10px 15px; padding: 0px 0px 0px 15px; list-style-type: none; margin-block-start: 1em;">
                            <li style="box-sizing: border-box; margin: 5px 0px; padding: 0px 0px 0px 10px; list-style-type: none; list-style-position: initial; font-size: 15px; color: inherit; position: relative;"><?php echo get_sub_field('alt_icerik'); ?></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-lg-2 order-1 d-lg-inline-flex justify-content-lg-end">
                <figure>
                    <img src="<?php echo get_sub_field('resim'); ?>" class="img-aside rounded-img" width="470" height="447">
                </figure>
            </div>
        </div>
    </div>
    <?php endwhile; ?>


