<?php
require("php/config.php");
require(FRT_DIR . "body.class.php");
$o = new Body();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
   <![endif]-->
<!--[if IE 7]>
   <html class="no-js lt-ie9 lt-ie8" lang="en">
      <![endif]-->
<!--[if IE 8]>
      <html class="no-js lt-ie9" lang="en">
         <![endif]-->
<!--[if IE 9]>
         <html class="ie9 no-js">
            <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <?= $o->MostrarHead() ?>
</head>

<body id="kure" class="template-index">
    <div id="PageContainer"></div>
    <div class="quick-view"></div>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <div class="gf-menu-device-wrapper">
            <div class="close-menu">x</div>
            <div class="gf-menu-device-container"></div>
        </div>
    </nav>
    <?= $o->MostrarHeader() ?>
    <main class="main-content">
        <div class="grid-uniform">
            <div class="grid__item">
                <!-- BEGIN content_for_index -->
                <div id="shopify-section-1542369329707" class="shopify-section index-section index-section--flush">
                    <div class="wrapper">
                        <div class="home-slideshow">
                            <div class="variable-width" data-slick="{dots: true, slidesToScroll: 1,autoplay:false,fade: true,autoplaySpeed:5000">

                                <div class="slick-list slider_style_2 slider-1542369873506-list">
                                    <img src="files/slider-3_36d6260a-9c5d-4d8c-9d4f-8e073e006551_2000x.jpg?v=1551420838" class="slide-img medium-down--hide" alt="" />
                                    <img src="files/responsive-slider-2_767x.jpg?v=1552629445" class="slide-img wide--hide post-large--hide large--hide" alt="" />
                                    <div class="slider-content slider-content-bg">
                                        <div class="container">
                                            <div class="slide_left" style="">
                                                <div class="slider_heading">
                                                    <h2 class="slide-heading animated" style="
                                                        font-size: 54px;
                                                        color: #075ac9;
                                                        ">
                                                        Insumos Médicos
                                                    </h2>
                                                    <h3 class="slide-offer animated" style="
                                                        font-size: 54px;
                                                        color: #075ac9;
                                                        ">
                                                    </h3>
                                                </div>
                                                <div class="slide_right" style="" ;>
                                                    <p class="slide-offer-text animated" style="
                                                        font-size: 34px;
                                                        color: #ffffff;
                                                        ">
                                                        Elementos de protección y prevención médica
                                                        <span></span>
                                                    </p>
                                                </div>
                                                <a href="#shopify-section-1547016854059"" class=" slide-button animated btn">
                                                    Ver Catálogo
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-list slider_style_2 slider-1543466931051-list">
                                    <img src="files/slider2.jpg?v=1574161989" class="slide-img medium-down--hide" alt="" />
                                    <img src="files/slider2-resp.jpg" class="slide-img wide--hide post-large--hide large--hide" alt="" />
                                    <div class="slider-content slider-content-bg" style="">
                                        <div class="container">
                                            <div class="slide_left" style="">
                                                <div class="slider_heading">
                                                    <h2 class="slide-heading animated " style=" 
                                                    font-size: 54px;
                                                    color:#075ac9;
                                                    ">
                                                        Suplementos
                                                    </h2>
                                                    <h3 class="slide-offer animated " style=" 
                                                    font-size: 54px;
                                                    color:#075ac9;
                                                    ">
                                                        Alimenticios
                                                    </h3>
                                                </div>
                                                <div class="slide_right" style="" ;>
                                                    <p class="slide-offer-text animated " style="
                                                    font-size: 34px;
                                                    color:#ffffff;
                                                    ">
                                                        Ideal para adultos mayores<span></span>
                                                    </p>
                                                </div>
                                                <a href="suplementos.php" class="slide-button animated btn ">
                                                    Ver Suplementos
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).on("ready", function() {
                            $(".variable-width").slick({
                                dots: true,
                                slidesToScroll: 1,
                                autoplay: false,
                                fade: true,
                                autoplaySpeed: 5000,
                                afterChange: function(slick, currentSlide) {
                                    console.log(currentSlide);
                                },
                            });
                        });
                    </script>
                </div>
                <?= $o->MostrarProductosGeneral() ?>
                <div id="shopify-section-1547016715103" class="shopify-section index-section">
                    <div data-section-id="1547016715103" data-section-type="grid-banner-type-32" class="grid-banner-type-32" style="float: left; width: 100%; background: #ffffff;">
                        <div class="wrapper">
                            <div class="grid-uniform">
                                <div class="section-one wow fadeInUp animated">
                                    <div class="grid__item wide--one-half post-large--one-half large--grid__item medium--grid__item small-grid__item">
                                        <div class="block-content">
                                            <h2 style="color: #ffffff;">
                                                Solucionamos las necesidades del sector salud
                                            </h2>
                                            <p>
                                                En nuestro catálogo de productos ofrecemos medicamentos homeopáticos, suplementos alimenticios, insumos hospitalarios, implementos médicos, quirúrgicos, farmacéuticos y hospitalarios de excelente calidad
                                            </p>
                                            <a href="insumos_medicamentos.php" class="btn">Ver Catálogo
                                                <div class="overlay"></div></a>
                                        </div>
                                    </div>
                                    <div class="grid__item wide--one-half post-large--one-half large--grid__item medium--grid__item small-grid__item">
                                        <div class="ovrly10">
                                            <a>
                                                <img src="files/img5_1920X.jpg?v=1574142868" alt="Hot Pressure Aroma Ozone Vaporizer" />
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div id="shopify-section-1547016755773" class="shopify-section index-section">
                    <div data-section-id="1547016755773" data-section-type="triangle-icon-block-a" class="triangle-icon-block-a" style="
                     background-image: url('files/video-bg_18cc4631-3c3d-4e3c-9dd9-d50f48869231.png?v=1574243207');
                     background-repeat: no-repeat;
                     background-size: auto;
                     background-position: bottom;
                     background-color: #fafafa;
                     ">
                        <div id="empresa"></div>
                        <div class="container">
                            <div class="border-title text-center wow fadeInDown animated">
                                <h2 style="color: #222222;" class="">
                                    Nuestra Empresa
                                </h2>
                                <p class="small-desc">
                                    Elaboramos y fabricamos medicamentos, suplementos alimenticios, insumos hospitalarios, quirúrgicos, farmacéuticos y hospitalarios. Nos proyectamos como una empresa totalmente innovadora en la solución y mejoramiento de nuestro desempeño integral de mente cuerpo; llevando al individuo a ser parte concienzudamente y de una forma autónoma de los procesos en que interviene en su organización laboral.
                                </p>
                            </div>
                            <div class="grid-uniform">
                                <div class="triangle-icon-wrapper">
                                    <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item triangle-icon-left">
                                        <div class="icon_wrapper icon-left wow fadeInUp animated">
                                            <div class="icon">
                                                <img src="files/img1_c7654913-5675-45b9-9558-e4eb826ba7a7_grande.jpg?v=1574142669" alt="" title="" style="" />
                                            </div>
                                            <div class="icon-content">
                                                <h4 style="color: #222222;">Misión</h4>
                                                <p class="desc" style="color: #444444;">
                                                    Nuestra empresa está dirigida a solucionar las necesidades de las clínicas hospitales y centros de salud cubriendo todo lo necesario para su correcto funcionamiento manteniendo una enfoque muy humanitario teniendo el cuenta mejor calidad y mejor precio en todos nuestros servicios de productos
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item">
                                        <div class="center-block wow bounceIn animated" style="">
                                            <img src="files/micro-scope_grande.png?v=1574142047" alt="" />
                                        </div>
                                    </div>
                                    <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-whole small-grid__item triangle-icon-right">
                                        <div class="icon_wrapper icon-right wow fadeInUp animated">
                                            <div class="icon">
                                                <img src="files/img4_66b90825-0d61-4fda-832b-ef496279ec80_grande.jpg?v=1574142689" alt="" title="" style="" />
                                            </div>
                                            <div class="icon-content">
                                                <h4 style="color: #222222;">Visión</h4>
                                                <p class="desc" style="color: #444444;">
                                                    Ser una empresa en el área de la salud donde nuestros productos y servicios cada vez apunte más a buscar soluciones en los problemas de salud de nuestra humanidad causando el menor choque posible en nuestros cuerpos analizados a través de productos omeopaticos y naturales buscando las fórmulas y realizando investigaciones científicas para contribuir al bienestar integral de cada individuo que use nuestros productos.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix" style="margin-bottom:110px;"></div>
                <div id="shopify-section-1547017004810" class="shopify-section">
                    <div data-section-id="1547017004810" data-section-type="blog-post-type-4" class="blog-post-type-4">
                        <div class="container">
                            <div class="blog-post">
                                <div class="grid">
                                    <div class="section-header section-header--small">
                                        <div class="border-title wow fadeInDown animated">
                                            <h2 style="color: #222222;">Noticias</h2>
                                            <div class="small-desc">
                                                <p style="color: #444444;"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home-blog blog-section" id="BlogType4">
                                        <div class="article-item grid__item wide--one-third post-large--one-third large--one-third medium--one-third small-grid__item wow fadeInUp animated">
                                            <div class="article">
                                                <div class="home-blog-image grid__item">
                                                    <a href="">
                                                        <img src="articles/blog1_grande.jpg?v=1547188081" alt="The blood sample" />
                                                    </a>
                                                </div>
                                                <div class="blog-description grid__item">
                                                    <div class="blogs-sub-title">
                                                        <h4>
                                                            <a href="" style="color: #075ac9;">Casa a casa examinaron estado de salud de las familias de Pescaito</a>
                                                        </h4>
                                                        <p class="blog-date" style="color: #444444;">
                                                            <time datetime="2019-01-10"><span class="date"><i style="color: #444444;">04 </i> May 2020
                                                                </span></time>
                                                        </p>
                                                    </div>
                                                    <div class="home-blog-content blog-detail">
                                                        <p style="color: #444444;">La Secretaría de Salud Distrital de Santa Marta se tomó el barrio Pescaito en la Localidad 2, con una jornada de monitoreo integral, con el fin de revisar el estado actual de las familias del sector.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="article-item grid__item wide--one-third post-large--one-third large--one-third medium--one-third small-grid__item wow fadeInUp animated">
                                            <div class="article">
                                                <div class="home-blog-image grid__item">
                                                    <a href="">
                                                        <img src="articles/blog2_grande.jpg?v=1547188057" alt="Stethoscope and notepad" />
                                                    </a>
                                                </div>
                                                <div class="blog-description grid__item">
                                                    <div class="blogs-sub-title">
                                                        <h4>
                                                            <a href="" style="color: #075ac9;">Salud y bienestar en cinco opciones útiles para estos días</a>
                                                        </h4>
                                                        <p class="blog-date" style="color: #444444;">
                                                            <time datetime="2019-01-10"><span class="date"><i style="color: #444444;">29 </i> Abr 2020
                                                                </span></time>
                                                        </p>
                                                    </div>
                                                    <div class="home-blog-content blog-detail">
                                                        <p style="color: #444444;">¿Por qué sentimos ciertos dolores?, ¿cómo funcionan nuestros órganos?, ¿cómo prevenir adicciones?, ¿cómo alimentarnos sanamente? y trucos para relajar a los niños.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="article-item grid__item wide--one-third post-large--one-third large--one-third medium--one-third small-grid__item wow fadeInUp animated">
                                            <div class="article">
                                                <div class="home-blog-image grid__item">
                                                    <a href="">
                                                        <img src="articles/blog3_grande.jpg?v=1547187932" alt="Doctor is scanning" />
                                                    </a>
                                                </div>
                                                <div class="blog-description grid__item">
                                                    <div class="blogs-sub-title">
                                                        <h4>
                                                            <a href="" style="color: #075ac9;">“Hemos priorizado la vida y la salud”: Gobernador de Córdoba</a>
                                                        </h4>
                                                        <p class="blog-date" style="color: #444444;">
                                                            <time datetime="2019-01-10"><span class="date"><i style="color: #444444;">04 </i> May 2020
                                                                </span></time>
                                                        </p>
                                                    </div>
                                                    <div class="home-blog-content blog-detail">
                                                        <p style="color: #444444;">“En el departamento de Córdoba hemos priorizado la vida y la salud, porque una población enferma no puede producir y porque si no tenemos vida, no hay razón de ser para actividad productiva”, así se refiere el gobernador de Córdoba, Orlando Benítez Mora.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-btn">
                                        <a class="btn" href="">Ver Más<span class="lnr lnr-arrow-right"></span></a>
                                    </div>
                                    <!--  <div class="nav_article"> </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-large"></div>
                    </div>
                </div>

                <div id="shopify-section-1547016927414" class="shopify-section index-section">
                    <div data-section-id="1547016927414" data-section-type="wide-banner-type-4" class="wide-banner-type-4">
                        <div class="grid-uniform">
                            <div class="wide-banner-type-4-block parallax" style="  background-image:url('files/parallax-bg_1920X.jpg?v=1574156033');background-repeat:no-repeat;background-size:cover ">
                                <div class="wide-banner-type-4-content wow fadeInUp animated">
                                    <h2 style="color:#ffffff;">Newsletter</h2>
                                    <p style="color:#ffffff">Suscríbete a nuestro newsletter, recibirás ofertas, noticias y bonos</p>
                                    <div class="newsletter-block-type-3 mc-embedded-subscribe-form">
                                        <form method="post" action="./" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" />
                                            <input type="email" value="" placeholder="Escribe aquí tu email" style="width:100%; text-align: center" name="contact[email]" class="mail" aria-label="Email address">
                                            <button type="submit" class="btn subscribe" name="subscribe" style="width:100%" value="">Suscribirse</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="dt-sc-hr-invisible-large"></div>
                        </div>
                    </div>
                </div>

                <div id="contacto" class="clearfix" style="margin-bottom: 70px;"></div>
                <div id="shopify-section-1547016818515" class="shopify-section index-section">
                    <section id="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section-header section-header--small">
                                        <div class="border-title wow fadeInDown animated">
                                            <h2 style="color: #222222;">Contacto</h2>
                                            <div class="small-desc">
                                                <p style="color: #444444;"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Contact Form -->
                                    <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake" style="width: 65% !important;">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" id="name" class="form-control" placeholder="Nombre" required data-error="Please enter your name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" id="msg_subject" class="form-control" placeholder="Asunto" required data-error="Please enter your message subject">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea id="message" rows="1" placeholder="Mensaje" class="form-control" required data-error="Write your message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success"></i> Enviar</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                        <br>
                                    </form>
                                    <!-- End Contact Form -->
                                </div>
                                <div class="col-md-3">
                                    <h3 class="big-title">Información de Contacto</h3>
                                    <div class="information">
                                        <div class="contact-datails">
                                            <br>
                                            <p> <span class="fa fa-map-marker-alt"></span> <strong>Dirección </strong> <br>Calle 53 No. 42-25 Oficina 211</p>
                                            <p><span class="fa fa-phone"></span> <strong>Teléfono </strong> <br>300 814 3673</p>
                                            <p> <span class="fa fa-envelope"></span> <strong>Email </strong> <br>novalivepharma@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var myPlayer;
                        jQuery(function() {
                            myPlayer = jQuery("#bgndVideo").YTPlayer({
                                useOnMobile: true,
                                mobileFallbackImage: "assets/mask-4.png",
                            });

                            /* DEBUG ******************************************************************************************/

                            var YTPConsole = jQuery("#eventListener");
                            // EVENTS: YTPReady YTPStart YTPEnd YTPPlay YTPLoop YTPPause YTPBuffering YTPMuted YTPUnmuted YTPChangeVideo
                            myPlayer.on(
                                "YTPReady YTPStart YTPEnd YTPPlay YTPLoop YTPPause YTPBuffering YTPMuted YTPUnmuted YTPChangeVideo",
                                function(e) {
                                    YTPConsole.append(
                                        "event: " +
                                        e.type +
                                        " (" +
                                        jQuery("#bgndVideo").YTPGetPlayer().getPlayerState() +
                                        ") > time: " +
                                        e.time
                                    );
                                    YTPConsole.append("<br>");
                                }
                            );

                            // EVENT: YTPChanged
                            myPlayer.on("YTPChanged", function(e) {
                                YTPConsole.html("");
                            });

                            myPlayer.on("YTPChangeVideo", function(e) {
                                console.debug("YTPChangeVideo", e);
                            });

                            // EVENT: YTPData
                            myPlayer.on("YTPData", function(e) {
                                $(".dida").html(e.prop.title + "<br>@" + e.prop.channelTitle);
                                $("#videoData").show();

                                YTPConsole.append("******************************");
                                YTPConsole.append("<br>");
                                YTPConsole.append(e.type);
                                YTPConsole.append("<br>");
                                YTPConsole.append(e.prop.title);
                                YTPConsole.append("<br>");
                                YTPConsole.append(e.prop.description.replace(/\n/g, "<br/>"));
                                YTPConsole.append("<br>");
                                YTPConsole.append("******************************");
                                YTPConsole.append("<br>");
                            });

                            // EVENT: YTPTime
                            myPlayer.on("YTPTime", function(e) {
                                var currentTime = e.time;
                                var traceLog = currentTime / 5 == Math.floor(currentTime / 5);

                                if (traceLog && YTPConsole.is(":visible")) {
                                    YTPConsole.append(
                                        myPlayer.attr("id") +
                                        " > " +
                                        e.type +
                                        " > actual time is: " +
                                        currentTime
                                    );
                                    YTPConsole.append("<br>");

                                    if (myPlayer.YTPGetFilters())
                                        console.debug("filters: ", myPlayer.YTPGetFilters());
                                }
                            });

                            /* END DEBUG ******************************************************************************************/
                        });

                        /**
                         *
                         * @param val
                         * @returns {*|number}
                         */
                        function checkForVal(val) {
                            return val || 0;
                        }
                    </script>
                </div>
                <!-- END content_for_index -->
            </div>
        </div>
        <div style="margin-top: 150px !important;"></div>
    </main>
    <?= $o->MostrarFooter() ?>    
    <?= $o->CargarAssetsJS() ?>    
</body>

</html>