<footer class="ftco-footer">
    <div class="container mb-5 pb-4">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('column-1'); ?>
                <ul class="ftco-footer-social list-unstyled mt-4">
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
				</ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('column-2'); ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('column-3'); ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('column-4'); ?>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aside-stretch py-3">

                    <p class="mb-0">
                        <?php the_field('copyright_text', 'options'); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div
    class="modal fade"
    id="exampleModalCenter"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button
                    type="button"
                    class="close d-flex align-items-center justify-content-center"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <?php echo do_shortcode('[contact-form-7 id="204" title="wilcon inqure form"]'); ?>
            </div>
        </div>
    </div>
</div>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px"><circle
        class="path-bg"
        cx="24"
        cy="24"
        r="22"
        fill="none"
        stroke-width="4"
        stroke="#eeeeee"/><circle
        class="path"
        cx="24"
        cy="24"
        r="22"
        fill="none"
        stroke-width="4"
        stroke-miterlimit="10"
        stroke="#F96D00"/></svg>
</div>

<?php wp_footer(); ?>
</body>
</html>