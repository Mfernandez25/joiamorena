<!doctype html>
    <html lang="en">
        <head>
            <title><?php wp_title(); ?></title>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bootstrap.min.css" type="text/css"/>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/slick/slick.css"/>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/libs/slick/slick-theme.css"/>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/global.css"/>
            <?php wp_head(); ?>
        </head>
        <body>
        <div class="buttom-mobile">
            <button id="nav-icon1" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle">
                <div><span></span><span></span><span></span><span></span></div>
            </button>
        </div>
        <nav class="menu-responsive d-flex align-items-center justify-content-center" style="background: url('<?php bloginfo( 'template_directory' ) ?>/img/bg_menu.jpg ?>') no-repeat;">
            <ul class="menu">
                <li><a href="">Joia Morena</a></li>
                <li><a href="">Características</a></li>
                <li><a href="">Recorrido virtual</a></li>
                <li><a href="">Ubicación</a></li>
                <li><a href="">Galería</a></li>
                <li><a href="">Contáctanos</a></li>

            </ul>
        </nav>
            <section class="header-banner d-flex align-items-center justify-content-center" style="background: url('<?php bloginfo( 'template_directory' ) ?>/img/banner_home.jpg ?>') no-repeat;">
                <div class="box-logo text-center">
                    <img  class="logo" src="<?php bloginfo( 'template_directory' ) ?>/img/logo_joiamorena.png " alt="">
                    <div class="frase">
                        <span>Aquí todo <br>es diferente</span>
                        <img class="img-adorno" src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_joia.png" alt=""></div>
                </div>
            </section>
            <section class="section-video">
                <div class="container">
                    <div class="row">
                        <div class="col-11">
                            <video src="<?php bloginfo( 'template_directory' ) ?>/video/video.mp4" autoplay="autoplay" preload="" loop="loop" muted></video>
                            <img class="play" src="<?php bloginfo( 'template_directory' ) ?>/img/i_play.png" alt="">
                        </div>
                        <div class="col-1">
                            <h1 class="title-section title-vertical title-video">Ver video</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-bienvenido">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="title-section">Bienvenidos</h1>
                            <h2 class="subtitle">A TUS SUEÑOS DE CAMPO</h2>
                            <div class="box-content">
                                <p>Vive el ambiente campestre como nunca antes.</p>
                                <p>Aquí tus deseos de tranquilidad toman forma real.</p>
                                <p>Joia Morena es una exclusiva urbanización de casas de campo en el valle de La Joya, uno de los distritos con mayor proyección urbanística de Arequipa.Un lugar donde podrás disfrutar del refrescante clima campestre, sol todo el año y diversos entretenimientos que la urbanización tiene para ti y tu familia. </p>
                                <p>Joia Morena te da la bienvenida.</p>
                                <img class="adorno-content" src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_content.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <video src="<?php bloginfo( 'template_directory' ) ?>/video/video.mp4" autoplay="autoplay" preload="" loop="loop" muted></video>
                            <img class="play-360" src="<?php bloginfo( 'template_directory' ) ?>/img/video360.png" alt="">
                        </div>
                    </div>
                    <div class="row row-items">
                        <div class="col-sm-2 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_5" alt="">
                            <p>De interés en tu<br>
                                financiamiento</p>
                        </div>
                        <div class="col-sm-2 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_6" alt="">
                            <p>Tenemos el mejor<br>
                                precio por m2.</p>
                        </div>
                        <div class="col-sm-2 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_3" alt="">
                            <p>La Joya es un distrito con un alto potencial de crecimiento y desarrollo.</p>
                        </div>
                        <div class="col-sm-2 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_2" alt="">
                            <p>Cumplimos con los <br>
                                plazos de entrega.</p>
                        </div>
                        <div class="col-sm-2 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_4" alt="">
                            <p>Lotes independizados e
                                inscritos en Registros Públicos.</p>
                        </div>
                        <div class="col-sm-2 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_1" alt="">
                            <p>Rentabiliza tu inversión y<br>
                                disfruta de Joia Morena</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-caracteriscticas">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="title-section">Características</div>
                        </div>
                        <div class="col-12">
                            <div class="container-caracteristicas">
                                <div class="box-caracteristicas box-caracteristicas-1">
                                    <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Laguna de pesca <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-2">
                                    <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Juegos para niños <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-3">
                                    <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Polideportivo <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-4">
                                    <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Piscina <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-5">
                                    <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Zona de fogata y camping <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-6">
                                    <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Salón uso multiple <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-7">
                                    <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Zona de parrillas <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-recorrido-virtual">
                <div class="container">
                    <div class="row">
                        <div class="col-1">
                            <h1 class="title-section title-vertical title-video">Recorrido virtual</h1>
                        </div>
                        <div class="col-11">
                            <video src="<?php bloginfo( 'template_directory' ) ?>/video/video.mp4" autoplay="autoplay" preload="" loop="loop" muted></video>
                            <img class="play" src="<?php bloginfo( 'template_directory' ) ?>/img/i_play.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-el-lugar-ideal">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box-title text-center">
                                <h1 class="title-section">EL lugar ideal</h1>
                                <h2 class="subtitle">UBICACIÓN</h2>
                            </div>
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/mapa_como_llegar.png" alt="">

                        </div>
                    </div>
                </div>
            </section>
            <section class="section-aqui-viviras">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="box-title">
                                <h1 class="title-section">Aquí vivirás momentos<br> inolvidables</h1>
                            </div>
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/mapa_joia.jpg" alt="">
                            <div class="box-content">
                                <img class="adorno-content" src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_content.png" alt="">
                                <p>El diseño de Joia Morena busca integrar todas las viviendas con los parques internos de la urbanización, generando así que todas las casas tengan vistas privilegiadas hacia los parques, que te brindan un paisajismo con estilo francés con zonas de colores intensos, que contrastan perfectamente con el verde de la zona, dentro de los parques se ha generado pequeños espacios de actividades que te dan cierta privacidad con respecto al resto del parque, de esta manera se puede disfrutar de la privacidad de las áreas de uso común.   </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-galeria">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="title-section">Galería</h1>
                        </div>
                        <div class="col-12">
                            <div class="slider">
                                <div class="box-slider" style="background: url('<?php bloginfo( 'template_directory' ) ?>/img/galeria_1.jpg ?>') no-repeat;"></div>
                                <div class="box-slider" style="background: url('<?php bloginfo( 'template_directory' ) ?>/img/galeria_1.jpg ?>') no-repeat;"></div>
                                <div class="box-slider" style="background: url('<?php bloginfo( 'template_directory' ) ?>/img/galeria_1.jpg ?>') no-repeat;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-contacto">
                <div class="row">
                    <div class="col-sm-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.510114868941!2d-71.54955208557702!3d-16.39889908867796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a5de887ea19%3A0x9c9d72a4e9ee2c9f!2sM%C3%A1laga+Grenet+318%2C+Arequipa!5e0!3m2!1ses-419!2spe!4v1532600426835" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-4 col-contacto text-center">
                        <h1 class="title-section">Contacto</h1>
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                    </div>
                    <div class="col-sm-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.510114868941!2d-71.54955208557702!3d-16.39889908867796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a5de887ea19%3A0x9c9d72a4e9ee2c9f!2sM%C3%A1laga+Grenet+318%2C+Arequipa!5e0!3m2!1ses-419!2spe!4v1532600426835" width="100%" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            <footer>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <p class="footer-title">Un protecto de:</p>
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/logo_anden.png" alt="">
                            <ul class="social-links">
                                <li><a href="" class="d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" class="d-flex align-items-center justify-content-center"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" class="d-flex align-items-center justify-content-center"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <p class="footer-title">Contacto</p>
                            <p>Calle Málaga Grenet 318 Urb. Magisterial Arequipa</p>
                            <p>054-258003 – 942020618</p>
                            <p>www.joiamorena.com</p>
                            <p>joiamorena@anden.com.pe</p>
                            <p>Atendemos tus consultas vía whatsapp942020618 </p>
                            <br>
                            <p>Copyright © Todos los Derechos Reservados - 2018 </p>
                        </div>
                        <div class="col-sm-4">
                            <p class="footer-title">Desarrollado por:</p>
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/logo_unnu.png" alt="">
                        </div>
                    </div>
                </div>
            </footer>

            <script src="<?php echo get_template_directory_uri() ?>/libs/jquery-3.3.1.min.js"></script>
            <script src="<?php echo get_template_directory_uri() ?>/libs/slick/slick.min.js"></script>
            <?php wp_footer(); ?>
            <script>
                $(document).ready(initPage);
                function initPage() {
                    $(".slider").slick({
                        infinite: true,
                        autoplaySpeed: 8000,
                        slidesToShow: 1,
                        slidesToScroll: 1

                    });
                }
                <!-- ------------------- -->
                $(function () {

                    $('#nav-icon1').click(function () {
                        $(this).toggleClass('open');
                        $('.menu-responsive').toggleClass('open');
                        $('.buttom-movil').toggleClass('open');

                    });
                });

            </script>
        </body>
</html>