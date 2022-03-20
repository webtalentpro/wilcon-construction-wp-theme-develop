<?php get_header();
/* Template Name: home */
?>
	<?php $hero_bg=get_field('hero_banner_image', 'options'); ?>
	<section class="hero-wrap js-fullheight" style="background-image: url(<?php echo $hero_bg['url'] ?>);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-lg-6 ftco-animate">
					<div class="mt-5">
						<h1 class="mb-4"><?php the_field('hero_title', 'options'); ?></h1>

						<p class="mb-4"><?php the_field('hero_description', 'options'); ?></p>

						<p><a href="<?php the_field('btn1_link', 'options'); ?>" class="btn btn-primary"><?php the_field('btn1_text', 'options'); ?></a> <a href="<?php the_field('btn2_link', 'options'); ?>" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter"> <?php the_field('btn2_text', 'options'); ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
		<div class="container">
			<div class="row no-gutters d-flex">
				<?php if ($features = get_field('features_items', 'options')) {
    foreach ($features as $feature) {?>
				 <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-flex">
						
						<div class="icon justify-content-center align-items-center d-flex"><span> <img src="<?php echo $feature ['upload_icon']['url']; ?>"/></span></div>
						
						<div class="media-body pl-4">
							<h3 class="heading mb-3"><?php echo $feature['item_title']; ?></h3>
							<p><?php echo $feature['item_description']; ?></p>
						</div>
					</div>      
				</div>
				<?php }
} ?>
		
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/section', 'about'); ?>
	<?php get_template_part('template-parts/section', 'cta'); ?>



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
                    'posts_per_page'=> 3,
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
	<?php get_template_part('template-parts/section', 'counter'); ?>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Our Global Work Industries</span>
					<h2 class="mb-4">Latest Projects</h2>
				</div>
			</div>
			<div class="row">

			<?php $args=array(
                'post_type'=>'projects',
                'posts_per_page'=> 6,
            );
            $query=new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post(); ?>
			
				<div class="col-md-4">
					<div class="project">
					<?php $projecrpop=get_field('popup_image'); ?>
						<a href="<?php echo $projecrpop['url']; ?>" class="img image-popup d-flex align-items-center" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">
							<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
						</a>
						<div class="text">
							<span class="subheading"><?php the_field('subtitle'); ?></span>
							<h3><?php the_title(); ?></h3>
							<p><span class="fa fa-map-marker mr-1"></span> <?php the_field('project_address'); ?></p>
						</div>
					</div>
				</div>
				<?php
            } wp_reset_postdata(); ?>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/section', 'testimonial'); ?>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-10 heading-section text-center ftco-animate">
					<span class="subheading">Our Blog</span>
					<h2 class="mb-4">Latest Blog Updates</h2>
				</div>
			</div>
			<div class="row d-flex">
			
            <?php $args=array(
                'post_type'=> 'post',
                'posts_per_page'=> 3,
            );
            
            
            $query=new WP_Query($args);
               while ($query->have_posts()) {
                   $query->the_post(); ?>
				<div class="col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a href="<?php the_permalink(); ?>" class="block-20" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
						</a>
						<div class="text d-block">
							<div class="meta">
								<p>
									<a href="<?php the_permalink(); ?>"><span class="fa fa-calendar mr-2"></span><?php the_time('F j, Y'); ?></a>
									<a href="#"><span class="fa fa-user mr-2"></span><?php the_author(); ?></a>
									<a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> <?php comments_number(); ?></a>
								</p>
							</div>
							<h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><a href="<?php the_permalink(); ?>" class="btn btn-secondary py-2 px-3">Read more</a></p>
						</div>
					</div>
				</div>
		<?php
               } wp_reset_postdata(); ?>

			</div>
		</div>
	</section>
	<?php get_footer(); ?>