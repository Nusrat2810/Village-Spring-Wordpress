<?php defined('ABSPATH') || die('No direct script access allowed.');

/**
 * Template Name: Contact Page
 * Template Post Type: page
 */

get_header(); ?>

<main id="primary">
    <section id="hero" class="text-center pt-5">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center text-green">
                    <p>Village at Clear Springs has submitted a rezoning application to Loudoun County based on the 2019 Comprehensive Plan. This website outlines our proposal to the County.</p>
                    <hr class="border-green mx-5 my-5" />
                </div>
            </div>
        </div>
    </section>

    <section id="connect" class="container-fluid pt-3 pb-5">
        <div class="container section-inner">
            <div id="contact" class="content-area">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <div class="contact-form">
                                <form id="contact-form" class="-was-validated" action="inc/email.php" method="POST">
                                    <div class="form-group my-3">
                                        <label for="name" class="sr-only">Name</label>
                                        <input type="text" name="name" class="form-control form-control -is-invalid" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" class="form-control form-control -is-invalid" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="message" class="sr-only">Message</label>
                                        <textarea name="message" class="form-control form-control -is-invalid" id="message" placeholder="Message" rows="6" required></textarea>
                                    </div>
                                    <button type="submit" name="btnAction" value="contact" class="btn my-button">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img img-fluid w-100" src="<?php echo get_theme_file_uri('assets/img/connect/map.jpg'); ?>" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/connect'); ?>

</main>

<?php get_footer(); ?>