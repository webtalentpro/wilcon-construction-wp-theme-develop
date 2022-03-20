<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div class="py-1 top">
            <div class="container">
                <div class="row">
                    <div
                        class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper
align-items-center">
                        <p class="mb-0 w-100">
                            <span class="fa fa-paper-plane"></span>
                            <span class="text"><?php the_field('header_email', 'options'); ?></span>
                        </p>
                    </div>
                    <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
                        <div class="social-media">
                            <p class="mb-0 d-flex">
                                <?php if ($header_icons=get_field('header_social_icons', 'options')) {
    foreach ($header_icons as $header_icon) { ?>
                                <a
                                    href="<?php echo $header_icon['icon_link']; ?>"
                                    class="d-flex align-items-center justify-content-center">
                                    <span class="fa <?php echo $header_icon['icon']; ?>">
                                        <i class="sr-only">Facebook</i>
                                    </span>
                                </a>
                                <?php }
} ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
                        <p class="mb-0 register-link">
                            <a
                                href="#"
                                class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModalCenter">Inquire Now</a>
                        </p>
                    </div>


                    
                </div>
            </div>
        </div>
        <div class="pt-4 pb-5">
            <div class="container">
                <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
                    <div class="col-md-4 d-flex mb-2 mb-md-0">
                        <?php if ($logo=get_field('header_logo', 'options')) {?>
                        <a
                            class="navbar-brand d-flex align-items-center"
                            href="<?php echo esc_url(home_url()) ?>">

                            <img class="ml-2" src="<?php echo $logo['url']; ?>">
                        </a>
                        <?php } ?>
                    </div>
                    <?php if ($header_bottom=get_field('header_info', 'options')) {
    foreach ($header_bottom as $hbottom) { ?>
                    <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fa <?php echo $hbottom['info_icon']; ?>"></span>
                        </div>
                        <div class="pr-md-4 pl-md-3 pl-3 text">
                            <p class="con">

                                <?php echo $hbottom['info_title']; ?>
                            </p>
                            <p class="con">
                                <?php echo $hbottom['info_description']; ?></p>
                        </div>
                    </div>
                    <?php }
} ?>

                </div>
            </div>
        </div>
    </div>
    <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light"
        id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#ftco-nav"
                aria-controls="ftco-nav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
                Menu
            </button>

            <?php wp_nav_menu([ 'menu' => 'primary_menu', 'theme_location' =>
            'primary_menu', 'container' => 'div', 'container_id' => 'ftco-nav',
            'container_class' => 'collapse navbar-collapse', 'menu_id' => false,
            'menu_class' => 'navbar-nav mr-auto', 'depth' => 2, 'fallback_cb' =>
            'bs4navwalker::fallback', 'walker' => new bs4navwalker() ]); ?>

            <a
                href="#"
                class="btn-custom"
                data-toggle="modal"
                data-target="#exampleModalCenter">Inquire Now</a>
        </div>
    </div>
</nav>
<!-- END nav -->