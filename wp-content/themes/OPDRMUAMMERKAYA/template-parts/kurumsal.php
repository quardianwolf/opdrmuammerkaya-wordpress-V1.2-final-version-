<div class="page-header bg-more-light">
    <div class="container">
        <h2 class="page-title"><?php pll_e( 'kurumsal' );?></h2>
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php get_bloginfo('url'); ?>"><?php pll_e( 'anasayfa' );?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php pll_e( 'tedaviler' );?></li>
            </ol>
        </nav>
    </div>
</div>
<div class="container blog-masonry-section padding-small">
    <div class="grid row">
        <div class="grid-sizer col-1"></div>
        <?php
        $kurumsal = get_sub_field('kurumsal');
        if ($kurumsal) :  foreach ($kurumsal as $post) : setup_postdata($post); ?>
                <div class="grid-item col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                    <div class="post-box">
                        <figure>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Blog" width="370" height="257">
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-link"></i>
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <div class="box-content">
                            <h4 class="box-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p class="post-desc">
                            </p>
                        </div>
                    </div>
                </div>
        <?php endforeach;
            wp_reset_postdata();
        endif; ?>

    </div>

</div>