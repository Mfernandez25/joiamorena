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
        <div class="buttom-mobile d-flex align-items-center justify-content-center">
            <button id="nav-icon1" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle">
                <div><span></span><span></span><span></span><span></span></div>
            </button>
        </div>
        <nav class="menu-responsive d-flex align-items-center justify-content-center" style="background: url('<?php bloginfo( 'template_directory' ) ?>/img/bg_menu.jpg ?>') no-repeat;">
            <ul class="menu">
                <li><a href="#joiamorana"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""> Joia Morena <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""></a></li>
                <li><a href="#caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""> Características <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""></a></li>
                <li><a href="#recorridovirtual"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""> Recorrido virtual <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""></a></li>
                <li><a href="#ubicacion"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""> Ubicación <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""></a></li>
                <li><a href="#galeria"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""> Galería <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""></a></li>
                <li><a href="#contactanos"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""> Contáctanos <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_menu.png " alt=""></a></li>

            </ul>
        </nav>
            <ul class="list-buttoms">
                <li><a href="#joiamorana"></a></li>
                <li><a href="#caracteristicas"></a></li>
                <li><a href="#recorridovirtual"></a></li>
                <li><a href="#ubicacion"></a></li>
                <li><a href="#galeria"></a></li>
                <li><a href="#contactanos"></a></li>
            </ul>
            <section class="header-banner d-flex align-items-center justify-content-center" style="background: url('<?php bloginfo( 'template_directory' ) ?>/img/banner_home.jpg ?>') no-repeat;">
                <div class="box-logo text-center">
                    <div class="box-inner">
                        <img  class="logo" src="<?php bloginfo( 'template_directory' ) ?>/img/logo_joiamorena.png " alt="">
                        <div class="frase">
                            <span>Aquí todo <br>es diferente</span>
                            <img class="img-adorno" src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_joia.png" alt=""></div>
                    </div>

                </div>
            </section>
            <section class="section-video">
                <div class="container">
                    <div class="row">
                        <div class="col-12 title-movil text-center">
                            <h1 class="title-section ">Ver video</h1>
                        </div>
                        <div class="col-11">
                            <video id="ver-video" src="<?php bloginfo( 'template_directory' ) ?>/video/video.mp4" preload="" loop="loop" muted></video>
                            <img class="play" id="play-video" src="<?php bloginfo( 'template_directory' ) ?>/img/i_play.png" alt="">
                        </div>
                        <div class="col-1 title-desktop">
                            <h1 class="title-section title-vertical title-video">Ver video</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-bienvenido" id="joiamorana">
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
                        <div class="col-sm-7 col-11">
                            <video src="<?php bloginfo( 'template_directory' ) ?>/video/video.mp4" autoplay="autoplay" preload="" loop="loop" muted></video>
                            <img class="play-360" src="<?php bloginfo( 'template_directory' ) ?>/img/video360.png" alt="">
                        </div>
                    </div>
                    <div class="row row-items">
                        <div class="col-sm-2 col-6 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_5.png" alt="">
                            <p>De interés en tu<br>
                                financiamiento</p>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_6.png" alt="">
                            <p>Tenemos el mejor<br>
                                precio por m2.</p>
                        </div>
                        <div class="col-sm-2  col-6 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icono_a.png" alt="">
                            <p>La Joya es un distrito con un alto potencial de crecimiento y desarrollo.</p>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_2.png" alt="">
                            <p>Cumplimos con los <br>
                                plazos de entrega.</p>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_4.png" alt="">
                            <p>Lotes independizados e
                                inscritos en Registros Públicos.</p>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icon_1.png" alt="">
                            <p>Rentabiliza tu inversión disfruta de Joia Morena</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-caracteriscticas" id="caracteristicas">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="title-section">Características</div>
                        </div>
                        <div class="col-12">
                            <div class="container-caracteristicas">
                                <div class="box-caracteristicas box-caracteristicas-1">
                                    <div class="content-box">
                                        <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Laguna de pesca <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                        <p class="content-caracteristicas">Te ofrece una espléndida laguna ideal para
                                            desarrollar pesca.
                                            Disfruta del tiempo con tu familia de una
                                            manera diferente, alejado de la ciudad, en
                                            medio de un extenso valle y un clima campestre
                                            durante todo el año.
                                            Experimenta nuevas experiencias a lado de
                                            esas personas especiales para ti en nuestra
                                            laguna, goza de esos momentos especiales
                                            pescando, o simplemente apreciando el
                                            hermoso paisaje que Joia Morena te ofrece.</p>
                                    </div>

                                </div>
                                <div class="box-caracteristicas box-caracteristicas-2">
                                    <div class="content-box">
                                        <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Juegos para niños <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                        <p class="content-caracteristicas">Espacios destinados a la diversión e imaginación de los más pequeños de
                                            casa, aquí podrán divertirse en un lugar seguro y rodeado de juegos
                                            perfectamente diseñados para ellos.
                                            Aquí los días se vuelven un libro de aventuras, tus hijos podrán disfrutar
                                            junto con sus amigos de tardes de juegos inolvidables, risas infinitas, y
                                            emociones sin fin.</p>
                                    </div>

                                </div>
                                <div class="box-caracteristicas box-caracteristicas-3">
                                    <div class="content-box">
                                        <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Polideportivo <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                        <p class="content-caracteristicas">Aquí podrás practicar y disfrutar los deportes que más te gustan en tu
                                            urbanización.
                                            Joia Morena contará con dos canchas polideportivas, una de tenis, una
                                            de frontón y una de minibéisbol.
                                            Aquí, saldrás de la rutina, te divertirás y ejercitarás con cualquiera de
                                            estos deportes, tus días serán distintos, experimenta y descubre nuevos
                                            pasatiempos saludables para ti.</p>
                                    </div>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-4">
                                    <div class="content-box">
                                        <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Piscina <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                        <p class="content-caracteristicas">
                                            El clima campestre, hace de La Joya, el lugar
                                            perfecto para gozar de tardes interminables
                                            de juegos en la piscina.
                                            Una piscina de 95 m2 rodeada de vegetación
                                            y aire limpio.
                                            Refréscate de esos días calurosos,
                                            sumérgete y diviértete junto a las personas
                                            que quieras, vive un momento lleno de
                                            emociones
                                        </p>
                                    </div>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-5">
                                    <div class="content-box">
                                        <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Zona de fogata y camping <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                        <p class="content-caracteristicas">
                                            Aquí, tus días de camping serán inolvidables, disfrutando de
                                            esas conversaciones infinitas junto a tu fogata, mirando el cielo
                                            estrellado, la noche silenciosa y callada, fuera de la ciudad.
                                            La calidez y las noches despejadas en La Joya, harán que tus
                                            días de camping sean únicos, Acampar es la oportunidad
                                            perfecta para acercarse a la naturaleza y crear recuerdos junto
                                            a personas queridas
                                        </p>
                                    </div>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-6">
                                    <div class="content-box">
                                        <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Salón uso multiple <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                        <p class="content-caracteristicas">Aléjate de lo cotidiano, haz que ese día especial, esa celebración
                                            que habías planificado, sea diferente a las demás,
                                            más exclusiva, más relajante, más divertida, algo memorable.
                                            Aquí, podrás gozar de una celebración durante el día, junto a
                                            los más pequeños, o también de una en la noche, junto a tus
                                            amistades y familiares reencontrandote con ellos en la paz la
                                            urbanización.</p>
                                    </div>
                                </div>
                                <div class="box-caracteristicas box-caracteristicas-7">
                                    <div class="content-box">
                                        <h4 class="title-caracteristicas"><img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""> Zona de parrillas <img src="<?php bloginfo( 'template_directory' ) ?>/img/adorno_caracteristica.png" alt=""></h4>
                                        <p class="content-caracteristicas">Después de un día en la piscina, en el club o en las canchas,
                                            disfruta de una deliciosa parrilla junto a tu familia y amigos, goza
                                            de la tranquilidad del ambiente de Joia Morena.
                                            Planificar una tarde de parrilla, siempre será un buen plan,
                                            compartirás tiempo ameno con esas personas mientras disfrutas
                                            de tu comida.
                                        </p>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-recorrido-virtual" id="recorridovirtual">
                <div class="container">
                    <div class="row">
                        <div class="col-12 title-movil text-center">
                            <h1 class="title-section ">Recorrido virtual</h1>
                        </div>
                        <div class="col-1 title-desktop">
                            <h1 class="title-section title-vertical title-video">Recorrido virtual</h1>
                        </div>
                        <div class="offset-1 col-11">
                            <video src="<?php bloginfo( 'template_directory' ) ?>/video/video.mp4" autoplay="autoplay" preload="" loop="loop" muted></video>
                            <img class="play" src="<?php bloginfo( 'template_directory' ) ?>/img/i_play.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-el-lugar-ideal" id="ubicacion">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box-title text-center">
                                <h1 class="title-section">Llegando a</h1>
                                <h2 class="subtitle">JOIA MORENA</h2>
                            </div>
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/mapa.png" alt="">

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
            <section class="section-galeria" id="galeria">
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
            <section class="section-contacto" id="contactanos">
                <div class="row">
                    <div class="col-sm-5 col-mapa">
                        <div id="map" style="height: 560px;"></div>
                        <script type="text/javascript">
                            function initMap() {
                                var locations = [
                                    ['<strong>'+'Anden Inversiones'+'</strong>'+'<br/>'+
                                    'Calle Málaga Grenet 318 Urb. Magisterial Arequipa', -16.398860, -71.547260]
                                ];

                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 13,
                                    center: new google.maps.LatLng(-16.40, -71.542475),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                });


                                var infowindow = new google.maps.InfoWindow();

                                var marker, i;

                                for (i = 0; i < locations.length; i++) {
                                    marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                        map: map,
                                        icon: '<?php echo get_template_directory_uri() ?>/img/marker.png'
                                    });

                                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                        return function () {
                                            infowindow.setContent(locations[i][0]);
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));
                                }
                            }

                        </script>
                    </div>
                    <div class="col-sm-7 col-contacto text-center">
                        <h1 class="title-section">Contacto</h1>
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </section>
            <footer>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <p class="footer-title">Un protecto de:</p>
                            <img src="<?php bloginfo( 'template_directory' ) ?>/img/logo_anden.png" alt="">

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
                            <p class="footer-title">Síguenos en:</p>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/Andeninversiones" target="_blank" class="d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/andeninversiones/" target="_blank" class="d-flex align-items-center justify-content-center"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC8atjtMNk5Gs2tp1PzqRfZw" target="_blank" class="d-flex align-items-center justify-content-center"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA92pctFwjFNulFhyGXGj--Qr0yeU2_1Vk&callback=initMap"
                type="text/javascript"></script>
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
                $('#play-video').click(function () {
                    $('#ver-video').trigger('play');


                });
                <!-- ------------------- -->
                $(function () {

                    $('#nav-icon1').click(function () {
                        $(this).toggleClass('open');
                        $('.menu-responsive').toggleClass('open');
                        $('.buttom-movil').toggleClass('open');

                    });

                });

                $('.menu a').click(function (e) {
                    e.preventDefault();
                    var enlace = $(this).attr('href');
                    $('html, body').animate({
                        scrollTop: $(enlace).offset().top
                    }, 1500);
                    $('#nav-icon1').toggleClass('open');
                    $('.menu-responsive').toggleClass('open');
                });
                $('.list-buttoms a').click(function (e) {
                    e.preventDefault();
                    var enlace = $(this).attr('href');
                    $('html, body').animate({
                        scrollTop: $(enlace).offset().top
                    }, 1500);
                });


            </script>
        </body>
</html>