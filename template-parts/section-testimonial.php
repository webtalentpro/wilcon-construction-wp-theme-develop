<section class="ftco-section ftco-no-pt ftco-no-pb testimony-section img">
		<div class="overlay"></div>
		<div class="container">
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
					<div class="heading-section heading-section-white">
						<span class="subheading" style="color:#fff;">Read Testimonials</span>
						<h2 class="mb-4" style="font-size: 50px;">It's always a joy to hear that the work we do has positively reviews</h2>
					</div>
				</div>
				<div class="col-md-6 pl-md-5 py-4 py-md-5 aside-stretch-right">
					<div class="carousel-testimony owl-carousel ftco-owl">
					<?php $args=array(
                        'post_type'=> 'testimonials',
                        'posts_per_page'=>3,
                    );
                    $loop=new WP_Query($args);
                    while ($loop-> have_posts()) {
                        $loop->the_post(); ?>
						<div class="item">
							<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
								<div class="user-img" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4"><?php the_content(); ?></p>
									<p class="name"><?php the_title(); ?></p>
									<span class="position"><?php the_field('degignation'); ?></span>
								</div>
							</div>
						</div>	
						<?php
                    } wp_reset_postdata(); ?>																						
					</div>
				</div>
			</div>
		</div>
	</section>
