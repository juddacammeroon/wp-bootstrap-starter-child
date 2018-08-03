<?php

//Template Name: Front Page

get_header();

?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>

	<div class="homepage-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>