<?php get_header(); ?>
<!-- PAG FRONT-PAGE -->
<h1>Front-Page</h1>
<?php while(have_posts()): the_post();the_content();endwhile;?>  
<?php get_footer();  ?>
