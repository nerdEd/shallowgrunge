<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<p class="meta">Posted by <?php the_author() ?> on <?php the_time('F jS, Y') ?> under <?php the_category(', ') ?>
					<?php the_tags('Tags: ', ', ', ''); ?>
					&nbsp;&bull;&nbsp;
					<?php edit_post_link('Edit', '', '&nbsp;&bull;&nbsp;'); ?>
					<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	</div>
	<!-- end #content -->

<?php get_footer(); ?>
