<?php

get_header();

if ( have_posts() ) : ?>
	<div class="container">
		<div class="row">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<?php if ( has_post_thumbnail() ) : ?>
							<img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="card-img-top" alt="<?php the_title(); ?>">
						<?php endif; ?>
						<div class="card-body">
							<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<i><?php echo the_date(); ?></i>
							<p class="card-text"> <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?> </p>
						</div>
						<div class="card-footer text-center">
							<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php else : ?>
	<p class="text-center">No posts found.</p>
<?php endif; ?>

<?php get_footer(); ?>
