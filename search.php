<?php get_header(); ?>

<section
    class="hero-wrap hero-wrap-2"
    style="background-image: url(<?php echo esc_url(get_template_directory_uri())?>/images/bg_2.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="<?php echo esc_url(home_url()); ?>">Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </span>
                    <span> Search results
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </p>
                <h1 class="mb-3 bread"><?php the_search_query(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
            <div class="col-lg-4 ftco-animate mb-4">
                <div class="blog-entry ">
                    <a
                        href="<?php the_permalink(); ?>"
                        class="block-20"
                        style="background-image: url(<?php echo the_post_thumbnail_url()?>);"></a>
                    <div class="text d-block">
                        <div class="meta">
                            <p>
                                <a href="#">
                                    <span class="fa fa-calendar mr-2"></span><?php the_time('M,d Y'); ?></a>
                                <a href="<?php the_permalink()?>">
                                    <span class="fa fa-user mr-2"></span><?php the_author(); ?></a>
                                <a href="<?php the_permalink()?>" class="meta-chat">
                                    <span class="fa fa-comment mr-2"></span>
                                    <?php comments_number(); ?></a>
                            </p>
                        </div>
                    </div>
                    <h3 class="heading">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary py-2 px-3">Read more</a>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            <div class="row mt-5">
      <div class="col-md-12">
          <div class="block-27">
			<nav class="blog-pagination justify-content-center mr-auto">
      <?php the_posts_pagination(array(
        
        'prev_text' => __('<', 'wilcon'),
        'next_text' =>__('>', 'wilcon'),
        ))?>
                           
                           
        
				</nav>
          </div>
      </div>
  </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>