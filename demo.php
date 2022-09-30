<?php
/* This template is displaying for demo page*/

get_header();

if(have_posts()){
  while (have_posts()) {
    the_post();
    ?>
    <article id="<?php the_ID()?>" <?php post_class()?>>
      <?php the_content(); ?>
    </article>
    <!-- // echo '<article id="'. the_ID() . '"' . post_class() . '>'; -->
      <!-- // the_content(); -->
    <!-- // echo '</article>'; -->
    <?php
  }
} else {
  //.What happens if there are no posts
}

get_sidebar();
get_footer();
