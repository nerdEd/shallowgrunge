<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">
  
  <ul class="postList">
    <?php $myposts = get_posts('numberposts=-1&offset=$debut'); foreach($myposts as $post) :?>
      <li><?php the_time('m/d/y') ?> >> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; ?>
  </ul>

</div>

<?php get_footer(); ?>
