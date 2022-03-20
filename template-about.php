<?php get_header();
/* Template Name:about */
?>
<?php get_template_part('lib/bread', 'crum'); ?>
<?php get_template_part('template-parts/section', 'about'); ?>
<?php get_template_part('template-parts/section', 'cta'); ?>
<?php get_template_part('template-parts/section', 'counter'); ?>

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
					<span class="subheading">Our Team</span>
					<h2 class="mb-4">Our Team</h2>
				</div>
			</div>
			<div class="row">
			<?php $args=array(
                'post_type'=> 'teams',
                'posts_per_page'=> 6,
            );
            $loop=new WP_Query($args);
            while ($loop->have_posts()) {
                $loop->the_post(); ?>
				<div class="col-lg-3 col-sm-6">
					<div class="block-2 ftco-animate fadeInUp ftco-animated">
						<div class="flipper">
						<?php $teamp1=get_field('front_image') ?>
							<div class="front" style="background-image: url(<?php echo $teamp1['url'] ?>);">
								<div class="box">
									<h2><?php the_title(); ?></h2>
									<p><?php the_field('degignation'); ?></p>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<blockquote>
									<p><?php the_content(); ?></p>
								</blockquote>
								<div class="author d-flex">
								<?php if ($teamp2=get_field('back_image')) {?>
									<div class="image align-self-center">
										<img src="<?php echo $teamp2['url']; ?>" alt="">
									</div>
									<?php } ?>
									<div class="name align-self-center ml-3"><?php the_title(); ?> <span class="position"><?php the_field('degignation'); ?></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
            } wp_reset_postdata(); ?>

			</div>
		</div>
	</section>



<?php get_template_part('template-parts/section', 'testimonial'); ?>


<?php get_footer(); ?>