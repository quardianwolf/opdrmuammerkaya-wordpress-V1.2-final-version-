<?php require_once VOOBI_THEME_PATH . '/header.php'; ?>

<div class="<?php echo VOOBI_PREFIX; ?>-page <?php echo VOOBI_PREFIX; ?>-page-single">

  <div class="shape">

    <?php

    if (have_rows('eleman')) :

      while (have_rows('eleman')) : the_row();

        if (get_row_layout() == 'slider') :
          require VOOBI_THEME_PATH . '/template-parts/slider.php';

        elseif (get_row_layout() == 'calisma') :
          require VOOBI_THEME_PATH . '/template-parts/calisma.php';

        elseif (get_row_layout() == 'icerik') :
          require VOOBI_THEME_PATH . '/template-parts/doktor-banner.php';

        elseif (get_row_layout() == 'tedaviler') :
          require VOOBI_THEME_PATH . '/template-parts/tedaviler.php';

        elseif (get_row_layout() == 'buyuk_resim') :
          require VOOBI_THEME_PATH . '/template-parts/saglik-turizmi.php';

        elseif (get_row_layout() == 'step_section') :
          require VOOBI_THEME_PATH . '/template-parts/steps.php';

        elseif (get_row_layout() == 'iletisim_formu') :
          require VOOBI_THEME_PATH . '/template-parts/iletisim-formu.php';

        elseif (get_row_layout() == 'yorumlar') :
          require VOOBI_THEME_PATH . '/template-parts/testimonials.php';

        elseif (get_row_layout() == 'iletisim_sayfasi_eleman') :
          require VOOBI_THEME_PATH . '/template-parts/iletisim.php';

        elseif (get_row_layout() == 'ekip') :
          require VOOBI_THEME_PATH . '/template-parts/team.php';

        elseif (get_row_layout() == 'hakkimizda') :
          require VOOBI_THEME_PATH . '/template-parts/about.php';

        elseif (get_row_layout() == 'iletisim_sayfasi_formu') :
          require VOOBI_THEME_PATH . '/template-parts/iletisim-sayfasi.php';

        elseif (get_row_layout() == 'gomulu_harita') :
          require VOOBI_THEME_PATH . '/template-parts/map-section.php';

        elseif (get_row_layout() == 'tedaviler_liste') :
          require VOOBI_THEME_PATH . '/template-parts/tedaviler-sayfa.php';

        elseif (get_row_layout() == 'kurumsal') :
          require VOOBI_THEME_PATH . '/template-parts/kurumsal.php';


        endif;

      endwhile;

    endif;
    ?>

  </div>
</div>

<?php require_once VOOBI_THEME_PATH . '/footer.php'; ?>