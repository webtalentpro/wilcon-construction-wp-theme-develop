<?php get_header();
/* Template Name:projects */
?>
<?php get_template_part('lib/bread', 'crum'); ?>
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Our Global Work Industries</span>
                <h2 class="mb-4">Latest Projects</h2>
            </div>
        </div>
        <div class="row">
            <?php $args=array( 'post_type'=>'projects', 'posts_per_page'=>9, 'paged' =>
            $paged); $query=new WP_Query($args); while ($query->have_posts()) {
                $query->the_post(); ?>

            <div class="col-md-4">
                <div class="project">
                    <?php $projecrpop=get_field('popup_image'); ?>
                    <a
                        href="<?php echo $projecrpop['url']; ?>"
                        class="img image-popup d-flex align-items-center"
                        style="background-image:url(<?php echo the_post_thumbnail_url() ?>)">
                        <div class="icon d-flex align-items-center justify-content-center mb-5">
                            <span class="fa fa-plus"></span>
                        </div>
                    </a>
                    <div class="text">
                        <span class="subheading"><?php the_field('subtitle'); ?></span>
                        <h3><?php the_title(); ?></h3>
                        <p>
                            <span class="fa fa-map-marker mr-1"></span>
                            <?php the_field('project_address'); ?></p>
                    </div>
                </div>
            </div>
            <?php
            } wp_reset_postdata(); ?>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="block-27">
					<nav class="blog-pagination justify-content-center mr-auto">

                        <?php global $wp_query; $big = 999999999; // need an unlikely integer //echo
                        esc_url(get_pagenum_link()); echo paginate_links(array( 'base' =>
                        str_replace($big, '%#%', esc_url(get_pagenum_link($big))), 'format' =>
                        '?paged=%#%', 'current' => max(1, get_query_var('paged')), 'total' =>
                        $query->max_num_pages, 'type'=>'list', 'prev_text' => __('<', 'wilcon'), 'next_text' =>
                        __('>', 'wilcon'), )); ?>
						</nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>