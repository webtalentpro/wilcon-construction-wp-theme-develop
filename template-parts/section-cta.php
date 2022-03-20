<section class="ftco-intro">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center">
				<?php $cta=get_field('cta_background_image', 'options'); ?>
				<div class="img"  style="background-image: url(<?php echo $cta['url'] ?>);">
					<div class="overlay"></div>
					<h2><?php the_field('cta_title', 'options')?></h2>
					<p><?php the_field('cta_subtitle', 'options')?></p>
					<p class="mb-0"><a href="<?php the_field('button_link', 'options'); ?>" class="btn btn-primary px-4 py-3"><?php the_field('button_text', 'options')?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>