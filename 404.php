<?php get_header();?>
<!-- PAG 404 -->
<h1>404</h1>
<?php while(have_posts()): the_post();the_content();endwhile;?>  
<?php get_footer();?>