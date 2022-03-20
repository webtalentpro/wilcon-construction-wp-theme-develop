<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
<?php $countbg=get_field('counter_background', 'options'); ?>
	<div class="img image-overlay" style="background-image: url(<?php echo $countbg['url'] ?>);"></div>
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-6 py-5 bg-secondary aside-stretch">
				<div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
					<span class="subheading"><?php the_field('counter_subtitle', 'options'); ?></span>
					<h2 class="mb-4"><?php the_field('counter_title', 'options'); ?></h2>
					<?php the_field('description', 'options'); ?>
					
				</div>
			</div>
			<div class="col-md-6 d-flex align-items-center">
				<div class="row">
				<?php if ($countrep=get_field('counter_number_count', 'options')) {
    foreach ($countrep as $rep) { ?>
					<div class="col-md-12 d-flex counter-wrap ftco-animate">
						<div class="block-18 bg-primary d-flex align-items-center justify-content-between">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-engineer"></span></div>
							<div class="text">
								<strong class="number" data-number="<?php echo $rep['number']; ?>">0</strong>
								<span><?php echo $rep['title']; ?></span>
							</div>
						</div>
					</div>
					<?php }
}?>
				</div>
			</div>
		</div>
	</div>
</section>