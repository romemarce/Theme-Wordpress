<?php get_header(); ?>

<!-- PAG PAGE -->
<h1>Pag-Page</h1>
<?php while(have_posts()): the_post();the_content();endwhile;?>  
<?php get_footer(); ?>
