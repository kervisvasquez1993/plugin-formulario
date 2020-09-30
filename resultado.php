<?php 

function whatsap_resultado()
{
   $respuesta = array(
       'respuesta' => $_POST
   );
   header('Content-type : application/json');
   echo json_encode($respuesta);
   die();

}

add_action('wp_ajax_nopriv_whatsap_resultado', 'whatsap_resultado');
add_action('wp_ajax_whatsap_resultado', 'whatsap_resultado');

