<?php get_header();
/* Template Name: balongastrico */
$bg_image = get_field('background_image');
$first_title = get_field('first_title');
$second_title = get_field('second_title');
$third_title = get_field('third_title');


$section1 = get_field('primera_seccion');
$section2 = get_field('segunda_seccion');
$section3 = get_field('tercera_seccion');

?>



<section id="balon-banner">
    <div class="bg-home-banner container-fluid " style="background-image: url(<?php echo $bg_image; ?>">
        <div class="container">
            <div class="row d-none d-lg-flex">
                <div class="col-9">

                </div>
                <div class="col-3">
                    <div class="agenda-cita mt-3 ">
                        <h5 class="green-title ml-1 ">
                            Agenda tu cita
                        </h5>
                        <div class="phone-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </div>
                </div>
            </div>



            <div class="title d-flex col-6 mx-auto ">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 400 150"
                    height="120" width="350">
                    <path id="SunCatcherStudio" fill="none" display="none" stroke="#000000"
                        d="m 31.233725,31.233725 c 0,0 61.574343,63.73891 168.766275,63.73891 121.84084,0 168.76627,-63.73891 168.76627,-63.73891" />

                    <text font-size="42" fill="#000000" letter-spacing="2" font-family="sans-serif" font-weight="bold">
                        <textPath xlink:href="#SunCatcherStudio" side="left" startOffset="75">PIERDE PESO</textPath>
                    </text>
                </svg>
                <h3 class="blue-title title-header2">
                    <?php echo $second_title ?>
                </h3>

                <h3 class="green-title second-tHeader2">
                    <?php echo $third_title ?>
                </h3>
            </div>


        </div>
    </div>
</section>


<section id="second-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/2x/bg2.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 secondtitle my-4 text-center">
                <?php echo $section2['maintitle']; ?>
            </div>
        </div>
        <div class="row mb-2">
            <?php foreach ($section2['beneficios'] as $i => $ben): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-title">
                            <img src="<?php echo $ben['imagen']; ?>" alt="">
                            <h3>
                                <?php echo $ben['titulo'] ?>
                            </h3>
                        </div>
                        <p>
                            <?php echo $ben['contenido'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row justify-content-center">
            <div class="steps-box"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/2x/bg3.png');">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center text-center">
                        <?php echo $section2['segundo_titulo'] ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php foreach ($section2['steps'] as $i => $step): ?>
                            <div class="step">
                                <span>
                                    <?php echo $step['numero'] ?>
                                </span>
                                <p>
                                    <?php echo $step['contenido'] ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center justify-content-center steps-last-title">
            <?php echo $section2['ultimo_titulo'] ?>
        </div>
    </div>
</section>
<section id="tirth-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4>
                    <?php echo $section3['titulo_1'] ?>
                </h4>
                <h5>
                    <?php echo $section3['titulo_2'] ?>
                </h5>
            </div>
        </div>
        <div class="box-wrapper">
            <?php foreach ($section3['boxes'] as $i => $box): ?>
                <div class="box">
                    <img src="<?php echo $box['img']; ?>" alt="">
                    <h5>
                        <?php echo $box['titulo']; ?>
                    </h5>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="form-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/2x/bg4.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center formtitle">
                <h2>AGENDA TU CITA DE VALORACIÓN</h2>
                <?php echo do_shortcode('[contact-form-7 id="627f822" title="Valoracion"]'); ?>
                <!-- <form action="/balon-gastrico/#wpcf7-f336-o1" method="post" class="wpcf7-form init"
                    aria-label="Contact form" novalidate="novalidate" data-status="init">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="336">
                        <input type="hidden" name="_wpcf7_version" value="5.8">
                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f336-o1">
                        <input type="hidden" name="_wpcf7_container_post" value="0">
                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p><span class="wpcf7-form-control-wrap" data-name="nombre-completo"><input size="40"
                                        class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                        placeholder="Nombre completo" value="" type="text"
                                        name="nombre-completo"></span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p><span class="wpcf7-form-control-wrap" data-name="email-162"><input size="40"
                                        class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email"
                                        aria-invalid="false" placeholder="Correo electrónico" value="" type="email"
                                        name="email-162"></span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p><span class="wpcf7-form-control-wrap" data-name="date-604"><input
                                        class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date"
                                        aria-invalid="false" placeholder="dd/mm/aa" value="" type="date"
                                        name="date-604"></span>
                            </p>
                        </div>
                        <div class="col-4">
                            <p><span class="wpcf7-form-control-wrap" data-name="peso"><input
                                        class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                        aria-invalid="false" placeholder="Peso (Kg)" value="" type="number"
                                        name="peso"></span>
                            </p>
                        </div>

                        <div class="col-4">
                            <p><span class="wpcf7-form-control-wrap" data-name="IMC"><input
                                        class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                        aria-invalid="false" placeholder="IMC" value="" type="number" name="IMC"></span>
                            </p>
                        </div>
                    </div>

                    <p><span class="wpcf7-form-control-wrap" data-name="padecimientos"><input size="40"
                                class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Padecimientos"
                                value="" type="text" name="padecimientos"></span>
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-6">
                            <p><input class="wpcf7-form-control wpcf7-submit has-spinner green-btn"
                                    id="submit-procedure" type="submit" value="Enviar"><span
                                    class="wpcf7-spinner"></span>
                            </p>
                        </div>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                </form> -->
            </div>
        </div>
    </div>
</section>
<section id="moreservices">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Para otros servicios contáctanos <a href="tel:7872381575"><i
                            class="fas fa-phone"></i>787-238-1575</a></h2>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>