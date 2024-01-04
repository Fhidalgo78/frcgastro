<?php get_header();
/* Template Name: about us */
$info_doc = get_field('info_doc');
$footer = get_field('footer', 'option');
?>

<section id="bout-us-banner">
    <div class="bg-home-banner container-fluid "
        style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.5)),url(<?php echo $info_doc['bg-image']; ?>">
        <div class="container position-relative ">
            <div class="row d-none d-lg-flex">
                <div class="col-9">

                </div>
                <div class="col-3">
                    <a href="tel:<?php echo $footer['phone_link'] ?>">
                        <div class="agenda-cita mt-3 ">
                            <h5 class="green-title">Agenda tu cita</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="phone-icon d-none d-lg-flex">
                <!-- <i class="fa-solid fa-phone"></i> -->
                <img class="image-wa"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2x/wa-ico@2x.png" />
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

            <a href="<?php echo $info_doc['cv-link']; ?>">
                <div class="cv-button">DRA Fabiola Rios de Choudens
                    CV</div>
            </a>
        </div>
    </div>
</section>


<?php get_footer(); ?>