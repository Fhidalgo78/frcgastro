<?php
/**
 * frc Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package frc Theme
 */

define('__VERSION__', 'gdfy43543');

if (!function_exists('frc_setup')): /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */ 
    function frc_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Codeskill Theme Theme, use a find and replace
         * to change 'frc' to the name of your theme in all the template files.
         */
        load_theme_textdomain('frc', get_template_directory() . '/languages');
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');
        
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        
        // Custom image sizes
        add_image_size('frc-blog-small', 320, 212, true);
        add_image_size('frc-blog-small-2x', 640, 424, true);
        add_image_size('frc-square', 190, 190, true);
        add_image_size('frc-square-2x', 380, 380, true);
        add_image_size('frc-history', 1108, 613, true);
        
        
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ));
        
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
        
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true
        ));
    }
endif;
add_action('after_setup_theme', 'frc_setup');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function frc_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'frc'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'frc'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'frc_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function frc_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), __VERSION__);
    wp_enqueue_style('load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array(), __VERSION__);
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), __VERSION__);
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), __VERSION__);
    wp_enqueue_style('animate.css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), __VERSION__);
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function scm_ajax_enqueue_scripts()
{
    
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), __VERSION__, true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), __VERSION__, true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), __VERSION__, true);
    wp_enqueue_script('timeme', get_template_directory_uri() . '/assets/js/timeme.min.js', array(), __VERSION__, true);
    wp_enqueue_script('App', get_template_directory_uri() . '/assets/js/App.js', array(
        'jquery'
    ), __VERSION__, true);
}

function load_animate_css()
{
    // Load Boostrap CSS
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
    
    // Load Css
    wp_enqueue_style('style', get_stylesheet_uri());
    
}
add_action('wp_enqueue_scripts', 'load_animate_css');

add_action('wp_enqueue_scripts', 'frc_scripts');
add_action('wp_enqueue_scripts', 'scm_ajax_enqueue_scripts');

function register_my_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer-1' => __('Footer 1 Menu'),
        'footer-2' => __('Footer 2 Menu'),
        'footer-3' => __('Footer 3 Menu')
    ));
}
add_action('init', 'register_my_menus');


add_action('login_enqueue_scripts', 'frc_login');

function frc_login()
{
?>
<style type="text/css">
   body.login div#login h1 a {
   background-image: url('http://frcgastro.com/wp-content/uploads/2022/10/Dra.-Fabila-Ri╠uos_Logo_Reverse-01-2048x1083-1.png');
   background-size: contain;
   width: 100%;
   }
   body.login div#login #wp-submit {
   background: #13a89e;
   border: 2px solid #13a89e;
   box-shadow: none;
   height: auto;
   text-shadow: none;
   }
   .login .button.wp-hide-pw .dashicons {
   color: #13a89e;  
   }
   }
</style>
<?php
}
function wpse27856_set_content_type()
{
    return "text/html";
}
add_filter('wp_mail_content_type', 'wpse27856_set_content_type');

add_action('wpcf7_mail_sent', 'contact_form_autoresponders');

function contact_form_autoresponders($contact_form)
{
$headers = array(
    'From: Fabiola Ríos Choudens <frcgastro@gmail.com>',
    'Content-Type: text/html; charset=UTF-8',
    'X-WPCF7-Content-Type: text/html',
    'Reply-To: frcgastro@gmail.com'
);
    
    
    // The contact form ID.
    if (18 === $contact_form->id) {
        $submission    = WPCF7_Submission::get_instance();
        $posted_data   = $submission->get_posted_data();
        // PRIMERA PARTE - DATOS
        $Age           = $posted_data['your-age'];
        $primera_etapa = false;
        // SEGUNDA PARTE - IMC
        $IMC           = $posted_data['your-imc'];
        $segunda_etapa = false;
        $examen        = false;
        // TERCERA PARTE - preguntas
        $Q1            = $posted_data['Q1'];
        $Q2            = $posted_data['Q2'];
        $Q3            = $posted_data['Q3'];
        $Q4            = $posted_data['Q4'];
        $Q5            = $posted_data['Q5'];
        $Q6            = $posted_data['Q6'];
        $Q7            = $posted_data['Q7'];
        $Q8            = $posted_data['Q8'];
        $Q9            = $posted_data['Q9'];
        $Q10           = $posted_data['Q10'];
        $Q11           = $posted_data['Q11'];
        $Q12           = $posted_data['Q12'];
        $tercera_etapa = false;
        
        if ($Age >= 22 && $Age <= 65) {
            $primera_etapa = true;
        }
        if ($IMC >= 30 && $IMC <= 35) {
            $examen = true;
        } elseif ($IMC >= 35 && $IMC <= 40) {
            $segunda_etapa = true;
        }
        if ($Q1[0] == 'No' && $Q2[0] == 'No' && $Q3[0] == 'No' && $Q4[0] == 'No' && $Q5[0] == 'No' && $Q6[0] == 'No' && $Q7[0] == 'No' && $Q8[0] == 'No' && $Q9[0] == 'No' && $Q10[0] == 'No' && $Q11[0] == 'No' && $Q12[0] == 'No') {
            $tercera_etapa = true;
        }
        
        $email = $posted_data['your-email'];
        if ($primera_etapa && $segunda_etapa && $tercera_etapa) {
            $title       = '¡ERES CANDIDATO PARA EL PROCEDIMIENTO!';
            $attachments = array(
                WP_CONTENT_DIR . '/uploads/2022/10/FAQ-Balon-Gastrico.docx.pdf'
            );
            ob_start();
            include("templates/emails/win.html");
            $content = ob_get_clean();
            wp_mail($email, $title, $content, $headers, $attachments);
        } elseif ($primera_etapa && $tercera_etapa) {
            if ($examen) {
                $title = 'SE REQUIERE CITA PRE EVALUCIÓN';
                ob_start();
                include("templates/emails/wait.html");
                $content = ob_get_clean();
                wp_mail($email, $title, $content, $headers);
            } else {
                $title = 'No eres elegible para el procedimiento';
                ob_start();
                include("templates/emails/fail.html");
                $content = ob_get_clean();
                wp_mail($email, $title, $content, $headers);
            }
        } else {
            $title = 'NO ERES ELEGIBLE PARA EL PROCEDIMIENTO';
            ob_start();
            include("templates/emails/fail.html");
            $content = ob_get_clean();
            wp_mail($email, $title, $content, $headers);
        }
        
    }
}