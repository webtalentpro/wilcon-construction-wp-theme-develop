<section
    class="hero-wrap hero-wrap-2"
    style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/bg_2.jpg);"
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
                    <span><?php the_title(); ?>
                        <i class="fa
fa-chevron-right"></i>
                    </span>
                </p>
                <h1 class="mb-3 bread"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>