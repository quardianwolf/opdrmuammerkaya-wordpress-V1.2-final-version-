<?php get_header(); ?>

<?php if( have_rows('eleman') ):?>
    <?php while( have_rows('eleman') ) : the_row();?>

        <?php if( have_rows('slide') ):?>
            <?php while( have_rows('slide') ) : the_row();?>
                <?php 
                // Get sub value.
                $resim = get_sub_field('resim');
               
                ?>
            <?php endwhile;?>
        <?php endif;?>
    <?php endwhile;?>
<?php endif;?>
                
    <main class="main">
                <div class="intro-slider intro-slider-1 owl-carousel owl-theme owl-nav-inside owl-light slide-animate mb-0"
                    data-toggle="owl" data-owl-options='{
                        "dots": false,
                        "nav": false,
                        "responsive": {
                            "1200": {
                                "nav": true
                            }
                        }
                    }'>
                    <div class="banner intro-slide bg-section"
                        style="background-image:url('<?php echo $resim;?>');background-position:50% top">
                        <div class="container">
                            <div class="banner-content">
                                <h1 class="banner-title">
                                    <div>Mezoterapi <br />Uygulamaları</div>
                                </h1>
                                <p class="banner-info">
                                    İpek gibi bir cilt için
                                </p>
                                <div class="banner-actions">
                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/contact.html" class="btn btn-secondary-color">
                                        <span> Randevu Alın</span>
                                    </a>
                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/mezoterapi-uygulamalari.html"
                                        class="btn btn-primary-color">
                                        <span>Detaylı Bilgi</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <div class="banner intro-slide bg-section"
                        style="background-image:url('<?php echo $resim;?>');background-position:50% top">
                        <div class="container">
                            <div class="banner-content">
                                <h1 class="banner-title">
                                    <div>Leke <br />Tedavisi</div>
                                </h1>
                                <p class="banner-info">
                                    Cilt Lekelerinizden Kurtulun
                                </p>
                                <div class="banner-actions">
                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/contact.html" class="btn btn-secondary-color">
                                        <span> Randevu Alın</span>
                                    </a>
                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/leke-tedavisi.html"
                                        class="btn btn-primary-color">
                                        <span>Detaylı Bilgi</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner intro-slide bg-section"
                        style="background-image:url('<?php echo $resim;?>');background-position:50% top">
                        <div class="container">
                            <div class="banner-content">
                                <h1 class="banner-title">
                                    <div>Kırışıklık <br />Tedavisi</div>
                                </h1>
                                <p class="banner-info">
                                    Cildinizi yenileyin
                                </p>
                                <div class="banner-actions">
                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/contact.html" class="btn btn-secondary-color">
                                        <span> Randevu Alın</span>
                                    </a>
                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/kirisiklik-tedavisi.html"
                                        class="btn btn-primary-color">
                                        <span>Detaylı Bilgi</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
     

                <div class="bg-primary-color schedule-section">
                    <div class="container">
                        <div class="row position-relative">
                            <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/tk_logo.png"
                                class="puzzle pr-0 pl-0 d-lg-block d-xl-block d-md-none d-sm-none d-none" alt="Puzzle"
                                width="160" height="217">
                            <div class="col-lg-5 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
                                <div class="widget-left">
                                    <h4 class="widget-title"><i class="far fa-clock"></i>Çalışma Saatleri</h4>
                                    <p class="widget-desc">
                                        Çalışma saatlerimiz aşağıdaki gibidir.
                                    </p>
                                    <div class="widget-hours">
                                        <span>Pazartesi-Cuma</span>
                                        <span class="time">09:00 - 18:00</span>
                                    </div>
                                    <div class="widget-hours">
                                        <span>Cumartesi</span>
                                        <span class="time">09:00 - 16:00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
                                <div class="widget-right">
                                    <h4 class="widget-title"><i class="far fa-heart-rate"></i>Doktor Müsaitliği</h4>
                                    <p class="widget-desc">
                                        Lütfen gelmeden önce randevu alınız.
                                    </p>
                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/contact.html" class="btn btn-sm btn-secondary-color btn-secondary-color-1 ls-0">
                                        <span>İletişim</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


             
                <div class="review-bg-section bg-section type-section-margin-bottom">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-content">
                                    <h3 class="banner-title">
                                        Tedaviler
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
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/cilt-yenileme-tedavisi.html">
                                                        <h3 class="banner-title">

                                                            Cilt Yenileme Tedavisi
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/cilt-yenileme-tedavisi.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/cilt_yenileme.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/cilt-yenileme-tedavisi.html"
                                                                style="font-size: 15px;">
                                                                Antalya Manavgat&#039;ta bulunan kliniğimizde Cilt Yenileme
                                                                - Cilt Gençleştirme - Antiaging Tedavileri&#039;nde
                                                                doktorumuz Op. Dr. Muammer Kaya tarafından kişiye özel
                                                                tedavi protokolü belirlenir. Kişinin ihtiyaç durumuna göre
                                                                uzman yönlendirmesi ve kombine tedaviler ile bu hızlı ve
                                                                etkili sonuçlar elde edilir.

                                                                Cilt Yenileme Tedavisi Nedir?

                                                                Cilt yenileme tedavisinde kişinin kendi kanından elde edilen
                                                                platelet hücreleri ve büyüme faktörlerinden elde edilen kan
                                                                hücresi kullanılır.

                                                                Cilt Yenileme Tedavisi&#039;nin Faydaları Nelerdir?

                                                                Cilt yenileme tedavisi kırışıklık, leke oluşumları, sivilce
                                                                ve yara izleri, cilt çatlakları ve saç dökülmelerinde ku...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/mezoterapi-uygulamalari.html">
                                                        <h3 class="banner-title">

                                                            Mezoterapi Uygulamaları
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/mezoterapi-uygulamalari.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/mezo.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/mezoterapi-uygulamalari.html"
                                                                style="font-size: 15px;">
                                                                Mezoterapi uygulamaları bir gençleşme yöntemidir! Saça ve
                                                                Cilde uygulanır…
                                                                Antalya Manavgat&#039;ta bulunan kliniğimizde Mezoterapi
                                                                Tedavileri ile cildinizin yenilenmesini
                                                                sağlıyoruz.Mezoterapi cildi yenileyen, cilt kırışıklığı ve
                                                                cilt sarkmalarına karşı etkili olan doğal ve faydalı bir
                                                                yöntemdir. Mezoterapi ile cildin kırışıklıkları azaltılarak
                                                                cildin genç ve dinamik bir görünüme kavuşması sağlanır.
                                                                Ciltte henüz yıpranma belirtileri başlamadan da
                                                                uygulanabilecek mezoterapi uygulamaları sayesinde etkili
                                                                sonuçlar alınır.

                                                                Mezoterapi Uygulamaları Kimlere Uygulanır?

                                                                Mezoterapi uygulamaları, yıpranmış bir cilde sahip olan ya
                                                                da ciltte henüz yıpranma belirtileri başlamam...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/kirisiklik-tedavisi.html">
                                                        <h3 class="banner-title">

                                                            Kırışıklık Tedavisi
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/kirisiklik-tedavisi.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/kirisik.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/kirisiklik-tedavisi.html"
                                                                style="font-size: 15px;">
                                                                Antalya Manavgat&#039;ta bulunan kliniğimizde B0T0KS ile
                                                                Kırışıklık Tedavileri&#039;nde doktorumuz Op. Dr. Muammer
                                                                Kaya tarafından kişiye özel tedavi ve doz miktarı
                                                                belirlenir.
                                                                Yüzdeki mimiklerin çalışmalarıyla beraber yüzde
                                                                çizgilenmeler meydana gelmektedir. Uzun süreli bu mimiklerin
                                                                çalışmasıyla, yüzdeki çizgileri derinleşmektedir. Bοtοksla
                                                                kırışıklık tedavisi yüzdeki çizgilenmeyi gidermek için
                                                                yapılan uygulamadır.

                                                                Kırışıklık Tedavisi Nedir?

                                                                B0t0ksla Kırışıklık Tedavisi, kırışıklıkların giderilmesi
                                                                için uygulanan yöntemdir. Kırışıklık tedavisine en iyi cevap
                                                                veren kırışıklıklar alın, göz etrafı ve kaşların arasınd...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/leke-tedavisi.html">
                                                        <h3 class="banner-title">

                                                            Leke Tedavisi
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/leke-tedavisi.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/leke.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/leke-tedavisi.html"
                                                                style="font-size: 15px;">
                                                                Antalya Manavgat&#039;ta bulunan kliniğimizde uyguladığımız
                                                                Leke Tedavileri&#039;nde doktorumuz Op. Dr. Muammer
                                                                Kaya tarafından kişiye özel tedavi protokolü belirlenir.
                                                                Kişinin ihtiyaç durumuna göre uzman yönlendirmesi ve kombine
                                                                tedaviler ile bu hızlı ve etkili sonuçlar elde edilir.

                                                                Leke Tedavisi Nedir?

                                                                Leke tedavisi, ciltte çeşitli nedenlerle (güneş, yanlış
                                                                uygulanan bakımlar, kalitesiz makyaj malzemeleri, çeşitli
                                                                kimyasallar gibi) oluşan lekelerin giderilmesi
                                                                tedavisidir. Melanin, cildimize rengini veren maddedir.
                                                                Ciltte oluşan lekeler, melaninin normalin üzerinde konsantre
                                                                olarak bulunduğu bölgelerde bulunur. Melaninin, anormal
                                                                yüksek miktarda ve belli...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/thulium-tedavisi.html">
                                                        <h3 class="banner-title">

                                                            Thulium Lazer
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/thulium-tedavisi.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/thulium.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/thulium-tedavisi.html"
                                                                style="font-size: 15px;">
                                                                Ciltte oluşan lekeleri vücudun korunma önlemlerinden
                                                                biridir. Cilt maruz kaldığı ortamdan (güneş, kalitesiz
                                                                makyaj malzemeleri, zararlı kimyasallar vs.) kendini
                                                                koruyabilmek için melanin salgılar. Böylece cilt kendini
                                                                korur ama salgıladığı melaninden dolayı ciltte lekelenmeler
                                                                meydana gelir. Thulium lazerle leke tedavisi,
                                                                Manavgat&#039;ta tek ve en etkili leke tedavi yöntemidir.
                                                                Thulium Lazer ile Leke Tedavisi Nedir?Thulium lazer; güneş
                                                                lekeleri, yaşlılık lekeleri, melazma denilen ve tedavisi güç
                                                                olan düzensiz şekilli renk koyulaşmaları şeklinde oluşan
                                                                lekelerin giderilmesinde kullanılan en etkili yöntemdir.
                                                                Akıllı lazer, BB lazer, lavieen lazer, thulium lazer olarak
                                                                da bilinir. Thulium...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/dudak-dolgusu.html">
                                                        <h3 class="banner-title">

                                                            Dudak Dolgusu
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/dudak-dolgusu.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/dudak.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/dudak-dolgusu.html"
                                                                style="font-size: 15px;">
                                                                Dudak dolgusu ile daha çekici dudaklara kavuşabilirsiniz.
                                                                Hylaüronik asit bazlı dolgularla ince dudaklara hacim ve nem
                                                                verilebilmektedir.Daha çekici dudaklara sahip olmanın ve
                                                                yüze daha genç bir görünüm vermenin en pratik yolu
                                                                hyalüronik asit bazlı dolgu maddeleridir. Dolgu
                                                                uygulamaları, yapısal olarak ince dudaklara daha dolgun bir
                                                                görünüm vermekte ve yıllar içinde incelen dudaklara eski
                                                                hacimlerini geri kazandırmakta etkili bir
                                                                yöntemdir.Hyalüronik asit bazlı dolguları su moleküllerini
                                                                bağlayarak etki ederler. Bu özellikleri sayesinde sadece
                                                                dudakları biçimlendirip hacim vermekte değil, yoğun nem
                                                                vermek konusunda da etkilidir. Dudak dolgusu...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/burun-dolgusu.html">
                                                        <h3 class="banner-title">

                                                            Burun Dolgusu
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/burun-dolgusu.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/burun.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/burun-dolgusu.html"
                                                                style="font-size: 15px;">
                                                                Burun dolgusu, cerrahi müdahale yapılmadan ameliyatsız
                                                                olarak gerçekleştirilen burun şekli değişikliklerini ifade
                                                                eder. Bu işlem genellikle cilt dolgu malzemelerinin
                                                                enjeksiyonunu içerir. Hyalüronik asit dolgu malzemesi gibi
                                                                hacim kazandırmak için farklı yüz bölgelerine enjekte edilen
                                                                ürünlerdir. En çok tercih edilen yüz bölgeleri arasında
                                                                dudaklar, burun kenarları ile ağzın köşeleri arasındaki
                                                                kırışıklıklar ve yanaklar bulunur. Son yıllarda, cerrahi
                                                                olmayan rinoplasti tekniği gelişti, bu prosedürde de
                                                                burundaki dolgu enjeksiyonu ile burundaki boşluklar,
                                                                girintiler, kontür eksiklikleri ve asimetriler tedavi
                                                                edilmektedir.Burun Dolgusu Nasıl Yapılır?İşlem, buru...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/yanak-dolgusu.html">
                                                        <h3 class="banner-title">

                                                            Yanak Dolgusu
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/yanak-dolgusu.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/yanak_dolgusu.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/yanak-dolgusu.html"
                                                                style="font-size: 15px;">
                                                                Dolgun yanaklar gençliğin ve çekiciliğin sembolü olarak
                                                                kabul edilebilir. Zayıf ve çökük şekildeki yanaklar kişinin
                                                                yüzünü olduğundan daha yaşlı ve yorgun göstermektedir.
                                                                Yaşlanmaya bağlı olarak veya yapısal olarak gerçekleşen
                                                                yüzdeki hacim kayıpları yanak dolgusu ile tedavi
                                                                edilmektedir. Yanak dolgusu sayesinde yanaklar, cerrahi
                                                                işlem gerekmeden formuna kavuşabilmektedir.Yanak Dolgusu
                                                                Teknikleri Nelerdir?Yanak dolgusunun üç farklı türü vardır.
                                                                İlki cerrahi işlem gerektirirken ikincisi cerrahi işlem
                                                                olmadan gerçekleşmektedir. Üçüncüsü ise hem cerrahi işlem
                                                                hem de cerrahi olmayan işlemle gerçekleşmektedir. Dolgu...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/akilli-dolgu.html">
                                                        <h3 class="banner-title">

                                                            Akıllı Dolgu
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/akilli-dolgu.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/akilli_dolgu.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/akilli-dolgu.html"
                                                                style="font-size: 15px;">
                                                                Son yıllarda hızlı sonuç alınabilen, güvenilir dermakozmetik
                                                                tedaviler ve işlemler çok daha tercih edilir hale geldi.
                                                                Daha sağlıklı, daha genç ve daha dinamik görüntülerini
                                                                korumak isteyen kadın veya erkek ayırt etmeksizin ,
                                                                ameliyatsız estetik işlemlere talep gün geçtikçe
                                                                artmaktadır. Cildin yaşlanma etkilerine karşı koruma amaçlı
                                                                olarak uygulanabilecek pek çok estetik müdahale yöntemi
                                                                mevcuttur. Bunlardan biri de “akıllı dolgu”dur. Özellikle 30
                                                                yaş üzerinde olan kadın/erkek herkesin yararlanabileceği
                                                                akıllı dolgu ile pek çok etki elde edilmektedir. Daha genç
                                                                bir cilt görünümü isteyen herkese...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/bolgesel-zayiflama.html">
                                                        <h3 class="banner-title">

                                                            Bölgesel Zayıflama
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/bolgesel-zayiflama.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/bolgesel.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/bolgesel-zayiflama.html"
                                                                style="font-size: 15px;">
                                                                Yıllardır kardiyovasküler hastalıklar ve karaciğer
                                                                yağlanmasına karşı koruyucu bir tedavi olarak kullanılan
                                                                fosfotidilkolin, istenmeyen bölgesel yağlanmanın giderilmesi
                                                                amacıyla ilk kez 1995 yılında uygulanmaya başlanan soya
                                                                ekstresidir. Doğal olarak insan vücudunda var olan bu
                                                                maddenin görevi yağ hücresindeki geçirgenliği artırmaktır.
                                                                FDA onayını yeni almış olmasına rağmen, Avrupa ve
                                                                Amerika&#039;da çok büyük ilgi görmektedir.
                                                                Kilo alınca belli bölgeler daha çok şişmanlamakta, zayıflama
                                                                döneminde ise bu bölgelerde yeterince incelme
                                                                gerçekleşmektedir. Bu sorunlu bölgelere fosfatidilkolin
                                                                enjeksiyonu ile depolanmış yağlar harcanarak bölgesel
                                                                incelme sağla...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/altin-igne.html">
                                                        <h3 class="banner-title">

                                                            Altın İğne Tedavisi
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/altin-igne.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/altin_igne.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/altin-igne.html"
                                                                style="font-size: 15px;">
                                                                Radyofrekans cihazının altın iğneleri bulunan başlığı cilde
                                                                temas ettirildiğinde mikro iğneler otomatik olarak ayarlanan
                                                                derinlikte cilt içerisine giriş yapmaktadır. Çok sayıda
                                                                altın uçlu mikro iğnelerle cilt üzerinde fraksiyonel mikro
                                                                delikler oluşturur ve yalnızca iğne ucundan gönderilen cilt
                                                                üstüne temas etmeyen radyo frekans ile dermiste kollajen ve
                                                                elastin üretimi tetiklenir. Epidermis ve yüzesel cilt
                                                                tabakalarına potansiyel termal hasar verilmeden tedavi
                                                                edilmektedir. Altın iğne tedavisinde amaç verilebilecek en
                                                                yüksek enerjiyle deriye herhangi bir zarar vermeden doğrudan
                                                                cilt altına ulaştırmaktır. Cilt gençleştirme, cildin
                                                                yenilenmesi, boyun toparlama, ince kırışık...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/ip-uygulamasi.html">
                                                        <h3 class="banner-title">

                                                            İp Uygulamaları
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/ip-uygulamasi.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/ip.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/ip-uygulamasi.html"
                                                                style="font-size: 15px;">
                                                                Yaş ilerledikçe yüz ve boyun bölgesinde oluşan kırışıklık ve
                                                                sarkmaların temel sebepleri ciltteki kollajenin azalması,
                                                                cilt altı yağ dokunun hacim kaybı ve yer çekimidir. Yaşlanma
                                                                belirtilerinin ilk görüldüğü yerler olan yüz ve boyun
                                                                bölgesindeki kırışıklık ve sarkmalar, ameliyatsız bir yöntem
                                                                olan iple yüz germe yani &quot;İp Askı&quot; yöntemleri ile
                                                                kısa sürede ortadan kaldırılmaktadır. Ağız ve dudak çevresi,
                                                                göz kapakları ve yüzdeki sarkma ve kırışıklıklarda etkili
                                                                olan bu yöntemle vücudun her bölgesine uygulama
                                                                yapılmaktadır.
                                                                İşlem sırasında, vücutta eriyebilme özelliği taşıyan ve
                                                                genellikle ameliyatlarda kullanılan özel ipler...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/medikal-ciltbakim.html">
                                                        <h3 class="banner-title">

                                                            Medikal Cilt Bakımı
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/medikal-ciltbakim.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/medikal.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/medikal-ciltbakim.html"
                                                                style="font-size: 15px;">
                                                                Cildimizin yumuşak, parlak, temiz ve pürüzsüz görünümü
                                                                estetik açıdan oldukça önemlidir. Çevresel faktörler
                                                                yaşlanma sürecinde genetik mirasımızla birlikte rol oynar.
                                                                Yapılan araştırmalar, yaşlanmaya bağlı cilt sorunlarının
                                                                yüzde 80-90′ının çevresel zararlardan meydana geldiğini
                                                                göstermektedir.
                                                                Medikal cilt bakımı ile biraz da olsa yaşlanma sürecinin
                                                                yavaşlatılması hedeflenmektedir. Medikal cilt bakımı
                                                                ciltteki gözeneklerin temizlenmesi, cilde oksijen
                                                                sağlanması, parlaklık ve canlılık verilmesini sağlar. Lenf
                                                                drenajı ile toksinleri uzaklaştırır. Medikal cilt bakımı 1
                                                                saat süren bir uygulamadır. Cilt analizini takip ederek
                                                                bakımda yap...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card card-review review-carousel align-items-start">
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/lazer.html">
                                                        <h3 class="banner-title">

                                                            Lazer Epilasyon
                                                        </h3>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/lazer.html">
                                                        <img src="/wp-content/themes/OPDRMUAMMERKAYA/img/lazer.jpg"
                                                            style="border-radius: 3rem !important;" width="100%"
                                                            height="auto">
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card-content">
                                                        <p class="review-desc ls-20">
                                                            <a href="/wp-content/themes/OPDRMUAMMERKAYA/pages/lazer.html"
                                                                style="font-size: 15px;">
                                                                İstenmeyen tüy ve kıllar Türkiye&#039;de olduğu gibi tüm
                                                                dünyada bir çok insan için can sıkıcı, utanç verici ve
                                                                yıllarca süregelen önemli bir sorundur. Bu durum insanların
                                                                sosyal ve mesleki hayatını olumsuz yönde etkileyerek yaşam
                                                                kalitesini düşürmektedir. Kişinin kendine olan güvenini
                                                                tekrar kazanılmasında şüphesiz lazer epilasyon büyük öneme
                                                                sahiptir.
                                                                Sorunun Kaynağı
                                                                İstenmeyen kıl ve tüylerin oluşma sebepleri kişiden kişiye
                                                                değişik olmakla birlikte genel olarak;

                                                                Ağda, cımbız vs. yöntemler
                                                                Ergenlik ve menopoz
                                                                Genetik, hormon dengesizliği
                                                                Doğum sonrası hormonlarda oluşan değişimler
                                                                Doğum kontrol hapları
                                                                Tüy bezlerinde oluşan sorunlar
                                                                Korti...
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



               
                <div class="container review-section">
                    <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                            <h3 class="ls-n-20 text-center banner-title">Müşterilerimiz bizim için ne dediler?</h3>
                        </div>
                    </div>


                    <div class="card card-review review-carousel align-items-start">
                        <div class="grid-container row" id="reviews" data-layout="fitRows">
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 pf-recent">
                                <div class="card card-review text-center mt-3">
                                    <div class="card-content">
                                        <h4 class="review-author">E.K.</h4>
                                        <div class="ratings-container">
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                        </div>
                                        <p class="review-desc">
                                            İçeriye adımınızı atar atmaz sürekli gittiğiniz bir yer gibi güler yüzle, ilgi
                                            ve alaka ile karşılandığınız bir yerden bahsediyorum. Doktor Muammer Kaya sizin
                                            için en iyi kişisel tedavi süreci sunuyor. Cilt bakım seansım dolu dolu ve
                                            keyifli geçiyor. Gerek hijyen, gerek ilgi, gerek hizmet her şey muazzam.
                                            Antalya’da sağlık ve güzellik denilince kesinlikle Op. Dr. Muammer Kaya…
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 pf-recent">
                                <div class="card card-review text-center mt-3">
                                    <div class="card-content">
                                        <h4 class="review-author">B.B.</h4>
                                        <div class="ratings-container">
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                        </div>
                                        <p class="review-desc">
                                            Klinik personelinden tutun. Muammer hocamın profesyonel hekimliği ve size
                                            olmayacak tedaviyi yapmaması size en uygun olanı seçmesi ve girişte tün
                                            bilgilerin rahatsızlıgımız var mı işlem bize uygunmu herşeyi en detaylı sekile
                                            bize aktarıyorlarbu covid döneminde glutatyon tedavisi yaptırdım çok memnun
                                            kaldım herkese tavsiye ederim
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 pf-recent">
                                <div class="card card-review text-center mt-3">
                                    <div class="card-content">
                                        <h4 class="review-author">F.Y.</h4>
                                        <div class="ratings-container">
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                            <i class="fa fa-star" style="color: darkgoldenrod"></i>
                                        </div>
                                        <p class="review-desc">
                                            3 aydır düzenli gittiğim Muammer KAYA klinik çalışanlar profesyonel ozellıkle
                                            MUAMMER HOCAM hakkında ne yazsam az kalır burdan da teşekkür edıyorum. İyki
                                            gidiyorum 😊🙏🙏
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

                    
        <?php get_footer(); ?>

        


        
            