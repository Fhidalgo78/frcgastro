<?php get_header();
/* Template Name: about us */
$info_doc = get_field('info_doc');
?>

<section id="bout-us-banner">
    <div class="bg-home-banner container-fluid " style="background-image: url(<?php echo $info_doc['bg-image']; ?>">
        <div class="container">
            <div class="row d-none d-lg-flex">
                <div class="col-9">

                </div>
                <div class="col-3">
                    <div class="agenda-cita mt-3 ">
                        <h5 class="green-title ml-1 ">
                            Agenta tu cita
                        </h5>
                        <div class="phone-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="doc-info">
    <div class="container">
        <div class="row flex-column align-items-center doc-info">
            <h3 class="blue-title second-tHeader position-relative">
                <?php echo $info_doc['name']; ?>
            </h3>
            <p>
                <?php echo $info_doc['preview-info']; ?>
            </p>

            <a href="<?php echo $info_doc['cv-link']; ?>"><div class="cv-button">DRA Fabiola Rios de Choudens
                    CV</div></a>
        </div>
    </div>
</section>


<?php get_footer(); ?>