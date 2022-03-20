<?php
/* Template Name:full width */
get_header(); ?>


<section id="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
<?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'wilcon'),
                    'after'  => '</div>',
                )
            );
            ?>

            </div>
        </div>
    </div>
</section>


<?php get_footer()?>