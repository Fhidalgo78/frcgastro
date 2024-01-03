<?php get_header();
/* Template Name: gastro */
$bg_image = get_field('background_image');
$first_title = get_field('first_title');
$second_title = get_field('second_title');
$third_title = get_field('third_title');

$info_div = get_field('info_div');


$proceso1 = get_field('primer_proceso');
$proceso2 = get_field('segundo_proceso');
$proceso3 = get_field('tercer_proceso');
?>

<section id="gastro-banner">
    <div class="bg-home-banner container-fluid " style="background-image: url(<?php echo $bg_image; ?>">
        <div class="container position-relative ">
            <div class="row d-none d-lg-flex">
                <div class="col-9">

                </div>
                <div class="col-3">
                    <div class="agenda-cita mt-3 ">
                        <h5 class="green-title">
                            <?php echo $first_title ?>
                        </h5>
                        
                    </div>
                </div>
            </div>



            <div class="title d-flex col-6 mx-auto ">
                <h3 class="blue-title title-header">
                    <?php echo $first_title ?>
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 400 150"
                    height="120" width="350">
                    <path id="SunCatcherStudio" display="none" fill="none" stroke="#000000"
                        d="m 31.233725,31.233725 c 0,0 61.574343,63.73891 168.766275,63.73891 121.84084,0 168.76627,-63.73891 168.76627,-63.73891" />

                    <text font-size="40" fill="#000000" letter-spacing="1" font-family="sans-serif" font-weight="bold">
                        <textPath xlink:href="#SunCatcherStudio" side="left" startOffset="50">
                            <?php echo $second_title ?>
                        </textPath>
                    </text>
                </svg>

                <h3 class="green-title second-tHeader">
                    <?php echo $third_title ?>
                </h3>
            </div>
            <div class="phone-icon d-none d-lg-flex">
                <!-- <i class="fa-solid fa-phone"></i> -->
                <img class="image-wa" src="<?php echo get_template_directory_uri(); ?>/assets/images/2x/wa-ico@2x.png"/>
            </div>

        </div>
    </div>
</section>



<section id="gastroInf-section" class="mb-4">
    <div class="container">
        <div class="row mt-lg-3">
            <div class="col-md-6 col-12 mx-auto">
                <img class="small-image px-3 py-3 w-100" src="<?php echo $info_div['image'] ?>" />
            </div>
            <div class="col-md-6 col-12 mx-auto px-3 py-3 w-100">
                <div class="info-text">
                    <h3 class="green-title">
                        <?php echo $info_div['title'] ?>
                    </h3>

                    <p>
                        <?php echo $info_div['description'] ?>
                    </p>

                </div>
            </div>


        </div>
    </div>
</section>



<section class="mb-4" id="procedimientos-dropdown">

    <!-- doesnt use containers cause container-fluid has some sorf of margin x -->

    <div class="accordion" id="accordionExample">
        <div class="card dark-blueCard">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="container">
                            <div class="row">
                                <div class="col-1">
                                    <div class="d-flex justify-content-end ">
                                        <img class="icon-dropover" src="<?php echo $proceso1['icon'];?>" alt="Icon">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h5>
                                        <?php echo $proceso1['title']; ?>
                                    </h5>
                                </div>
                                <div class="col-2">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </button>

                </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <?php echo $proceso1['info']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card light-blueCard">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="container">
                            <div class="row">
                                <div class="col-1">
                                    <div class="d-flex justify-content-end ">
                                        <img class="icon-dropover" src="<?php echo $proceso2['icon'];?>" alt="Icon">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h5>
                                        <?php echo $proceso2['title']; ?>
                                    </h5>
                                </div>
                                <div class="col-2">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <?php echo $proceso2['info'];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card dark-blueCard">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="container">
                            <div class="row">
                                <div class="col-1">
                                    <div class="d-flex justify-content-end ">
                                        <img class="icon-dropover" src="<?php echo $proceso3['icon'];?>" alt="Icon">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <h5>
                                        <?php echo $proceso3['title']; ?>
                                    </h5>
                                </div>
                                <div class="col-2">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <?php echo $proceso3['info']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mb-4" id="form-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/2x/bg4.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center formtitle">
                <h2>AGENDA TU CITA DE EVALUACIÓN <br> PARA LA COLOCACIÓN DEL BALÓN GÁSTRICO</h2>
                <?php echo do_shortcode('[contact-form-7 id="a80f651" title="Form procedure"]'); ?>
                <!-- <form action="/gastroenterologia/#wpcf7-f309-o1" method="post" class="wpcf7-form init"
                    aria-label="Contact form" novalidate="novalidate" data-status="init">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="309">
                        <input type="hidden" name="_wpcf7_version" value="5.8">
                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f309-o1">
                        <input type="hidden" name="_wpcf7_container_post" value="0">
                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                    </div>
                    <p><span class="wpcf7-form-control-wrap" data-name="names"><input size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="pacient-name"
                                aria-required="true" aria-invalid="false" placeholder="Nombre completo" value=""
                                type="text" name="names"></span>
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <p><span class="wpcf7-form-control-wrap" data-name="email"><input size="40"
                                        class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email"
                                        id="pacient-email" aria-invalid="false" placeholder="Correo electrónico"
                                        value="" type="email" name="email"></span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p><span class="wpcf7-form-control-wrap" data-name="number"><input
                                        class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                        id="pacient-number" aria-invalid="false" placeholder="Teléfono" value=""
                                        type="number" name="number"></span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p><span class="wpcf7-form-control-wrap" data-name="menu"><select
                                        class="wpcf7-form-control wpcf7-select" aria-invalid="false" name="menu">
                                        <option value="" disabled selected>Procedimiento de interés</option>
                                        <option value="Endoscopía">Endoscopía</option>
                                        <option value="Gastro-colonoscopía">Gastro-colonoscopía</option>
                                        <option value="Colonoscopía">Colonoscopía</option>
                                    </select></span>
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3  col-6">
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

<?php get_footer(); ?>