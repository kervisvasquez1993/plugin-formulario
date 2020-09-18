<?php 
/*
    Plugin Name: Formulario Dynamics Life
    Plugin URI: 
    Description: Añadir funcionalidad para el envio de formulario 
    version:1.0
    Author: Kervis vasquez
    Autor URI: 
    License: GPL2
    License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/



function dynamics_life_recetas_shorcode()
{  
   ?> 

   <div class="container border-botones flex widt-max" style="
   background: url('<?php echo plugins_url('formulario-Dynamics-life/img/fondo.jpg') ?>');
   background-size: cover;
   ">
   <div class="div-imagen test-center ">
    <img  class="center-block"src="<?php echo plugins_url('formulario-Dynamics-life/img/logo.jpg')?>">
   </div>
   <?php 
   //echo do_shortcode ('[contact-form-7 id="9" title="Formulario de contacto 1_copy"]');

   echo do_shortcode ('[contact-form-7 id="8287" title="formulario de colaboradores"]');
   ?>
  </div>
   <?php 
}

/*agregamos sendwhatsapp
*/


/*
fin de variable de */
// Incluir Bootstrap CSS
function bootstrap_css_js() {
    wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3');
    wp_enqueue_style( 'formulario_css', plugins_url('formulario-Dynamics-life/css/style_css.css',  dirname(__FILE__) ), array(), '1.0.0'); 
    wp_enqueue_script( 'popper_js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',array(), '1.14.3', true); 
    wp_enqueue_script( 'bootstrap_js','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery','popper_js'), '4.1.3', true);
    wp_enqueue_script( 'script_formulario', plugins_url('formulario-Dynamics-life/js/script_formulario.js',  dirname(__FILE__) ) ,array('jquery'), '1.0.0', true); 
    wp_localize_script('script_formulario', 'admin_url', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css_js');
add_shortcode( 'formulario_susan', 'dynamics_life_recetas_shorcode' );



require_once plugin_dir_path(__FILE__) . 'resultado.php';