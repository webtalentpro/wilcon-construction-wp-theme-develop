<?php get_header();
/* Template Name:service-page */
?>
<?php  get_template_part('lib/bread', 'crum') ?>
<section class="ftco-section bg-half-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<span class="subheading">Our Services</span>
					<h2 class="mb-4">We Offer Services</h2>
				</div>
			</div>
			<div class="row">
				<?php $args=array(
                    'post_type'=> 'services',
                    'posts_per_page'=> -1,
                    'paged' => $paged,
                );
                $loop=new WP_Query($args);
                while ($loop->have_posts()) {
                    $loop->the_post(); ?>

				<div class="col-md-4">
					<div class="services-wrap ftco-animate">
						<div class="img" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)"></div>
						<div class="text">
							<div class="icon"><span class="flaticon-architect"></span></div>
							<h2><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="btn-custom">Read more</a>
						</div>
					</div>
				</div>
				<?php
                } wp_reset_postdata(); ?>
													

			</div>
		</div>
	</section>

<?php get_footer(); ?>