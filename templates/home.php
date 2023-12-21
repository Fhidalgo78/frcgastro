<?php get_header(); 
/* Template Name: home */
$section1 = get_field('primera_seccion');
$section2 = get_field('segunda_seccion');
$section3 = get_field('tercera_seccion');
$footer = get_field('footer');
?>
<section id="first-section" class="animate__animated animate__delay-500ms animate__fadeIn" style="background-image: url('<?php echo $section1['background'] ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center maintitle">
                <?php echo $section1['title']; ?>
            </div>
        </div>
    </div>
</section>
<section id="second-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/2x/bg2.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 secondtitle text-center">
               <?php echo $section2['maintitle']; ?>
            </div>
        </div>
        <div class="row mb-2">
            <?php foreach($section2['beneficios'] as $i => $ben): ?>
            <div class="col-md-6 col-lg-3">
                <div class="feature-box">
                    <div class="feature-title">
                        <img src="<?php echo $ben['imagen']; ?>" alt="">
                        <h3><?php echo $ben['titulo'] ?></h3>
                    </div>
                    <p><?php echo $ben['contenido'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row justify-content-center">
            <div class="steps-box" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/2x/bg3.png');">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center text-center">
                        <?php echo $section2['segundo_titulo'] ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php foreach($section2['steps'] as $i => $step): ?>
                        <div class="step">
                            <span><?php echo $step['numero'] ?></span>
                            <p><?php echo $step['contenido'] ?></p>
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
                <h4><?php echo $section3['titulo_1'] ?></h4>
                <h5><?php echo $section3['titulo_2'] ?></h5>
            </div>
        </div>
        <div class="box-wrapper">
            <?php foreach($section3['boxes'] as $i => $box): ?>
                <div class="box">
                    <img src="<?php echo $box['img']; ?>" alt="">
                    <h5><?php echo $box['titulo']; ?></h5>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="fourt-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/2x/bg4.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center formtitle">
                <h2>AGENDA TU CITA DE EVALUACIÓN <br> PARA LA COLOCACIÓN DEL BALÓN GÁSTRICO</h2>
                <?php echo do_shortcode('[contact-form-7 id="18" title="Form"]'); ?>
            </div>
        </div>
    </div>
</section>
<section id="moreservices">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Para otros servicios contáctanos <a href="tel:7872381575"><i class="fas fa-phone"></i>787-238-1575</a></h2>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>