<section class="ftco-section" id="about-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex align-items-stretch">
				<?php $about_img=get_field('about_image', 'options'); ?>
				<div class="about-wrap img w-100" style="background-image: url(<?php echo $about_img['url'] ?>)">
				<?php $about_second=get_field('about_icon_upload', 'options'); ?>
					<div class="icon d-flex align-items-center justify-content-center"><span><img src="<?php echo $about_second['url']; ?>" 
alt=""></span></div>
				</div>
			</div>
			<div class="col-md-6 py-5 pl-md-5">
				<div class="row justify-content-center mb-4 pt-md-4">
					<div class="col-md-12 heading-section ftco-animate">
						<span class="subheading"><?php the_field('about_subtitle', 'options'); ?></span>
						<h2 class="mb-4"><?php the_field('title', 'options'); ?></h2>
						<div class="d-flex about">
							<div class="icon"><span class="flaticon-hammer"></span></div>
							<h3><?php the_field('short_title', 'options'); ?></h3>
						</div>
						<p><?php the_field('big_description', 'options'); ?></p>
						<div class="d-flex video-image align-items-center mt-md-4">
							<?php $vthumbnail=get_field('video_image_thumbnail', 'options'); ?>
							<a href="<?php the_field('video_link', 'options'); ?>" class="video img d-flex align-items-center 
justify-content-center" style="background-image: url(<?php echo $vthumbnail['url'] ?>);">
								<span class="fa fa-play-circle"></span>
							</a>
							<h4 class="ml-4"><?php the_field('video_text', 'options'); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>