<?php require_once VOOBI_THEME_PATH . '/header.php'; ?>
<div class="<?php echo VOOBI_PREFIX; ?>-page <?php echo VOOBI_PREFIX; ?>-page-single">
    <div class="page-header bg-more-light">
        <div class="container">
            <h2 class="page-title"></h2>
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php bloginfo('url') ?>">Ana Sayfa</a></li>
                    <li class="breadcrumb-item"><a href="<?php pll_e( 'tedavi-link' );?>"><?php pll_e( 'tedavi' );?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container blog-detailed blog-detailed-sidebar padding-small">
        <div class="row">
            <div class="col-lg-8 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php while (have_rows('icerik')) : the_row(); ?>
                            <figure>
                                <img src="<?php echo get_sub_field('resim'); ?>" class="w-100 height-auto" alt="Blog-big" width="770" height="450">
                            </figure>
                            <div>
                                <div class="blog-content">
                                    <h2 class="blog-title ls-n-20"><?php echo get_sub_field('icerik_basligi'); ?></h2>
                                    <p>
                                        <?php echo get_sub_field('metin'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
        <?php $query = new WP_Query(array(
            'post_type' => 'tedaviler',
            'post_status' => 'publish'
        )); ?>
        <div class="side-bar">
            <div class="sidebar-box">
                <h4 class="box-title">Tedaviler</h4>
                <div class="box-content mt-0">
                    <ul class="cat-menu ls-20">
                        <?php while ($query->have_posts()) :  $query->the_post(); ?>
                            <li class="menu-item">
                                <a href="<?php echo get_the_permalink() ?>" class="item-link">
                                    <i class="far fa-caret-right"></i><?php echo get_the_title() ?>
                                </a>
                            </li>
                        <?php endwhile;
                        wp_reset_query();
                        ?>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

</div>
<?php require_once VOOBI_THEME_PATH . '/footer.php'; ?>