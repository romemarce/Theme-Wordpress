<?php get_header(); ?>

<!-- PAG INDEX -->
<h1>Pag-Index</h1>
<?php while(have_posts()): the_post();the_content();endwhile;?>  
<?php get_footer();  ?>
