<?php 
/* Template Name: Formulario-plugin */
?>
<head>
<?php wp_head();?>
</head>
<body class="formulario">
<?php the_title('<h3 class="titulo-formulario text-center">', '</h3>');?>
<div class="container padding-top">
<?php while(have_posts()): the_post();?>
    
 <div>
    <?php the_content();?>
 </div>


<?php endwhile;?>
</div>
<?php
wp_footer();
?>
</body>


