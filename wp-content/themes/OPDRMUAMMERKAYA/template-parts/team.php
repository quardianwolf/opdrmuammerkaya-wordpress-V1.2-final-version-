<div class="page-header bg-more-light">
    <div class="container">
        <h2 class="page-title"><?php pll_e( 'ekibimiz' );?></h2>
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php get_bloginfo('url'); ?>"><?php pll_e( 'anasayfa' );?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php pll_e( 'ekibimiz' );?></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container doctor-list-section">
    <div class="row">
    <?php while(have_rows('calisan')): the_row();?>
        <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
            <h2 class="ls-n-20 text-center section-heading mb-3"><?php echo get_sub_field('baslik'); ?></h2>
        </div>
    </div>
    
    <div class="row grid-container" id="doctors" data-layout="fitRows">
        <div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 pf-anesthesiologist">
            <div class="image-box doctor-card mt-3">
                <figure>
                    <img src="<?php echo get_sub_field('resim'); ?>" class="w-100" alt="Doctor" width="370" height="407">
                </figure>
                <div class="box-content">
                    <h4 class="box-title"><?php echo get_sub_field('isim'); ?></h4>
                    <p class="doctor-cat"><?php echo get_sub_field('uzmanlik'); ?></p>
                    <p class="box-desc">
                    <?php echo get_sub_field('icerik'); ?>
                    </p>
                    <a href="javascript:;" class="btn-toggle"><i class="fas fa-plus-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
