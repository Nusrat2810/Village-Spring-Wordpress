<footer id="footer" class="container py-5">
    <div class="d-flex align-items-center">
        <div class="flex-grow-1">
            <p class="copyright text-xs-center m-0">
                <span class="d-block text-uppercase">&copy; <?php echo date('Y'); ?> VILLAGE AT CLEAR SPRINGS</span>
                <span class="d-block">Website, plans, specification and content are subject to change during the rezoning process and are for illustrative purposes only. All Rights Reserved. Non-Discriminatory Policy. Village at Clear Springs does not and shall not discriminate on the basis of race, color, religion (creed), gender expression, age, national origin (ancestry), disability, marital status, sexual orientation, or military status in any of its activities or operations.</span>
            </p>
        </div>
        <div class="flex-shrink-0 ms-5">
            <img class="img img-fluid logo-eho" src="<?php echo get_theme_file_uri('assets/img/logo-eho.png') ?>" alt="Equal Housing Opportunity" />
        </div>
    </div>
</footer>

<div class="modal fade" id="contact-form-alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-green-dark border-secondary text-white rounded-0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close bg-transparent text-white" data-bs-dismiss="modal" aria-label="Close" style="background-image:none">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <p><img class="img" src="<?php echo get_theme_file_uri('assets/img/logo.png') ?>" alt="..." style="height:65px"></p>
                <div id="contact-form-alert-container">
                    <p>Thank you for registering with Village at Clear Springs. You will receive updated information about our rezoning as it becomes available.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>