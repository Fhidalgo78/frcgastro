<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frc Theme
 */
$footer = get_field('footer', 'option');
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 d-flex justify-content-center align-items-center mb-sm-3 mb-md-3 mb-lg-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2x/footerlogo.png" alt="">
                <div class="info d-flex flex-column">
                    <h5><?php echo $footer['address'] ?></h5>
                    <a href="tel:<?php echo $footer['phone_link'] ?>"><i class="fas fa-phone"></i><?php echo $footer['phone'] ?></a>
                    <a href="mailto:<?php echo $footer['phone'] ?>"><i class="fas fa-envelope"></i> <?php echo $footer['email'] ?></a>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 justify-content-center align-items-center d-none d-md-flex">
            <?php
                     wp_nav_menu([
                        'theme_location'  => 'header-menu',
                        'container_class' => 'navbar-collapse d-flex h-100',
                        'container_id'    => 'main-menu-wrapper',
                        'menu_class'      => 'navbar-nav mainnav flex-row align-items-center justify-content-around w-100'
                     ]);
                  ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
