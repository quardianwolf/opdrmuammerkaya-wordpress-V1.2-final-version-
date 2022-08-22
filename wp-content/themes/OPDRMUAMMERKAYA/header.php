<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?> </title>
    <meta name="keywords" content="" />
    <meta name="description" content="Op.Dr. Muammer Kaya Resmi Web Sitesi">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/wp-content/themes/OPDRMUAMMERKAYA/img/favicon.png">


    <style>
        #cta-section {
            background: white;
            width: 100%;
        }

        .fixedd {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 999;
        }

        #sticky-wrapper .box .links {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 98px;
            color: #fff;
            text-decoration: none;
            text-align: center;
            font-size: 11px;
            line-height: 14px;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        #sticky-wrapper .box .links i {
            font-size: 38px;
            line-height: 1.3em;
        }

        a:focus,
        a:visited,
        a:active {
            border: none;
            text-decoration: none;
            outline: none;
        }

        @media only screen and (min-width: 0) and (max-width: 992px) {
            #sticky-wrapper .box .links {
                min-height: 80px;
                font-size: 10px;
            }

            #sticky-wrapper .box .links i {
                font-size: 32px;
            }
        }
    </style>
    <?php wp_head(); ?>
</head>

<body>
    <!------------------------------------------------
	loading overlay - start
	------------------------------------------------>
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!------------------------------------------------
	loading overlay - end
	------------------------------------------------>
    <div class="page-wrapper">
        <!------------------------------------------------
		navigation - start
		------------------------------------------------>
        <div class="row d-xl-none d-lg-none d-md-block d-sm-block d-block">
            <div id="cta-section" class="sticky-cta fixedd" style="margin:0 !important; padding: 0 !important;">
                <div class="container">
                    <div class="row" id="sticky-wrapper" style="margin:0 !important; padding: 0 !important;">
                        <div class="col-3 flex" style="margin: 0; background-color: #2b3b82; padding: 0;">
                            <div class="box">
                                <a href="#" id="randevu-al" style="font-size: 13px;" class="links randevu-al"> <i class="fa fa-calendar-alt"></i>Randevu Formu</a>
                            </div>
                        </div>
                        <div class="col-3 flex" style="margin: 0; background-color: #324597; padding: 0;">
                            <div class="box">
                                <a href="https://maps.google.com/maps?ll=36.785908,31.429755&z=17&t=m&hl=tr&gl=TR&mapclient=embed&q=Hasan%20Ali%20Y%C3%BCcel%20Cd.%20No%3A7%20Ayd%C4%B1nevler%2007600%20Manavgat%2FAntalya" target="_blank" style="font-size: 13px;" class="links"> <i class="fa fa-map-marker-alt"></i>Adres</a>
                            </div>
                        </div>
                        <div class="col-3 flex" style="margin: 0; background-color: #425ac4; padding: 0;">
                            <div class="box">
                                <a href="https://wa.me/+905320585879" target="_blank" style="font-size: 13px;" class="links"> <i class="fab fa-whatsapp"></i>WhatsApp</a>
                            </div>
                        </div>
                        <div class="col-3 flex" style="margin: 0; background-color: #5674f8; padding: 0; ">
                            <div class="box">
                                <a href="tel:0532 058 58 79" style="font-size: 13px;" class="links"> <i class="fa fa-phone"></i>Telefon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="header">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="header-left col-6 col-lg-3">
                            <a href="<?php bloginfo('url') ?>" class="logo">
                                <h1 class="mb-0">
                                    <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/logo.png" alt="Muammer Kaya" width="280" class="d-xl-block d-lg-block d-md-block d-sm-block d-none " height="auto">
                                    <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/logo.png" alt="Muammer Kaya" width="180" class="d-sm-none d-md-none d-lg-none d-xl-none" height="auto">
                                </h1>
                            </a>
                        </div>
                        <div class="header-right col-6 col-lg-9">
                            <div class="d-lg-none">
                                <button class="mobile-menu-toggler">
                                    <span class="sr-only">Mobil menüyü aç</span>
                                    <i class="fal fa-bars "></i>
                                </button>
                            </div>
                            <div class="d-none d-lg-flex justify-content-end">
                                <?php while (have_rows('iletisim', 'voobi_options')) : the_row(); ?>
                                    <div class="wp_nav_menu d-none d-md-block main-nav ls-20">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'Navbar',
                                                'container' => 'ul',
                                                'menu_id' => 'nav-ul',
                                                'menu_class' => 'menu sf-arrows',
                                            )
                                        );
                                        ?>
                                    </div>


                                    <a href="#" id="randevu-al" class="btn btn-sm btn-primary-color ls-0 randevu-al">
                                        <span><?php pll_e( 'randevu' );?></span>
                                    </a>



                                    <?php while (have_rows('whatsapp')) : the_row(); ?>
                                        <a href="https://wa.me/<?php echo get_sub_field('telefon'); ?>" class="btn btn-sm btn-whatsapp-color ls-0 btn-login">
                                            <span>WhatsApp</span>
                                        </a>
                                    <?php endwhile; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="popup d-none" style="position: fixed;top: 0;left: 0;height: 100%;width: 100%;display: flex;align-items: center;justify-content: center;z-index: 9999;background: rgba(0,0,0,0.5);">
            <div class="popup-wrapper" style="background-color: #fff; padding: 30px; border-radius: 5px;">
                <div class="close"><i class="fa fa-window-close"></i></div>
                <?php echo apply_shortcodes('[contact-form-7 id="497" title="popup form"]'); ?>
            </div>
        </div>
        <?php require VOOBI_THEME_PATH . '/template-parts/top-bar.php'; ?>