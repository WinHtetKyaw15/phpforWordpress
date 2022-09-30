<?php
/* This template is displaying for demo page*/

get_header();

if(have_posts()){
  while (have_posts()) {
    the_post();
  }
} else {
  //.What happens if there are no posts
}

get_sidebar();
get_footer();
