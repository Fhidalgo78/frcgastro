<?php get_header();
/* Template Name: homepage */
$bg_image = get_field('background_image');
$first_title = get_field('first_title');
$second_title = get_field('second_title');
$third_title = get_field('third_title');


$info_div = get_field('info_div');
$doc_info = get_field('doc_info');

$middle_banner = get_field('middle_banner');

$section2 = get_field('beneficios');
$benefits = get_field('maintitle');
?>

<section id="home-banner" class="mb-2">
    <div class="bg-home-banner container-fluid " style="background-image: url(<?php echo $bg_image; ?>">
        <div class="container position-relative">
            <div class="row d-none d-lg-flex ">
                <div class="col-9">

                </div>
                <div class="col-3">
                    <div class="agenda-cita mt-3 ">
                        <h5 class="green-title">Agenda tu cita</h5>
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
                        <textPath xlink:href="#SunCatcherStudio" side="left" startOffset="50"><?php echo $second_title ?></textPath>
                    </text>
                </svg>

                <h3 class="green-title second-tHeader">
                    <?php echo $third_title ?>
                </h3>
            </div>

            <div class="phone-icon d-none d-lg-flex">
            <img class="image-wa" src="<?php echo get_template_directory_uri(); ?>/assets/images/2x/wa-ico@2x.png"/>
            </div>

        </div>
    </div>
</section>


<section id="info-section" class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12  mx-auto">
                <img class="small-image px-3 py-3 w-100" src="<?php echo $info_div['image'] ?>" />
            </div>
            <div class="col-md-6 col-12 mx-auto px-3 py-3 w-100">
                <div class="info-text mx-auto ">
                    <h3 class="green-title">
                        <?php echo $info_div['title'] ?>
                    </h3>

                    <p>
                        <?php echo $info_div['description'] ?>
                    </p>

                    <div class="d-flex justify-content-center ">
                        <button class="green-btn">Ver más</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>



<section id="middle-page" class="mb-4">
    <div class="container-fluid bg-home-banner" style="background-image: url(<?php echo $middle_banner['image'] ?>)">
        <div class="row h-100 ">
            <div class="col-12">
                <div class="d-flex flex-column mx-auto text-middle h-100 justify-content-center ">
                    <h3>
                        <?php echo $middle_banner['primer-titulo'] ?>
                    </h3>

                    <h3>
                        <?php echo $middle_banner['segundo-titulo'] ?>
                    </h3>
                </div>
            </div>
</section>




<section class="mb-4" id="second-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/2x/bg2.png');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 info-title blue-title text-center my-2 font-weight-bold" >
                <?php echo $benefits ?>
            </div>
        </div>
        <div class="row mb-2">
            <?php foreach ($section2 as $i => $ben): ?>
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
        <div class="d-flex justify-content-center ">
            <button class="green-btn">Ver más</button>
        </div>
    </div>
</section>


<section id="doc-info" class="mb-4">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 col-12  mx-auto">
                <img class="small-image px-3 py-3 w-100" src="<?php echo $doc_info['image'] ?>" />
            </div>
            <div class="col-md-6 col-12  mx-auto px-3 py-3 w-100">
                <div class="info-text">
                    <h3 class="green-title">
                        <?php echo $doc_info['title'] ?>
                    </h3>

                    <p>
                        <?php echo $doc_info['description'] ?>
                    </p>

                    <div class="d-flex justify-content-center ">
                        <button class="green-btn">Conocer a la doctora</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<?php get_footer(); ?>