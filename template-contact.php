<?php get_header();
/* Template Name:contact */
?>
<?php get_template_part('lib/bread', 'crum'); ?>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact us</span>
                <h2 class="mb-4">Message us for more details</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia</p>
            </div>
        </div>

        <div class="row block-9">
            <div class="col-md-8">
                <?php echo do_shortcode('[contact-form-7 id="196"
                title="wilcon-contact-form"]'); ?>

            </div>

            <div class="col-md-4 d-flex pl-md-5">
                <div class="row">

                    <?php if ($contactinfos=get_field('contact_info', 'options')) {
    foreach ($contactinfos as $contactinfo) { ?>

                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa <?php echo $contactinfo['icon']; ?>"></span>
                        </div>
                        <div class="text">
                            <p>
                                <span><?php echo $contactinfo['title']; ?></span>
                                <?php echo $contactinfo['subtitle']; ?></p>
                        </div>
                    </div>

                    <?php
    }
} ?>

                </div>
            </div>
            <div class="col-md-12 mt-5">
                <?php the_field('google_map', 'options'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>