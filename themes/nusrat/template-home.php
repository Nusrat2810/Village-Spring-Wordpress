<?php defined('ABSPATH') || die('No direct script access allowed.');

/**
 * Template Name: Home Page
 * Template Post Type: page
 */

get_header(); ?>

<main id="primary">
    <section id="home-section-1" class="text-center pt-5">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center text-green">
                    <p>Village at Clear Springs has submitted a rezoning application to Loudoun County based on the 2019 Comprehensive Plan. This website outlines our proposal to the County.</p>
                    <hr class="border-green mx-5 my-5" />
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p>Village at Clear Springs is located south of Heritage High School, between Evergreen Mills Road and the Dulles Greenway. In 2019 Loudoun County adopted a new Comprehensive Plan that designated this assemblage of properties to be part of the Transition Policy area, previously identified as rural policy area. A residential development, served by Loudoun Water, was approved for this site.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="community" class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="heading text-start">
                    <h2 class="heading-title">Village at Clear Springs is a Proposed Master Planned Community</h2>
                </div>
                <div class="content">
                    <p>Village at Clear Springs is designed to create a framework for an innovative residential community, one that is pedestrian oriented and retains the scenic character of the natural environment. The overall community design strikes a balance between nature and convenience, with miles of trails connecting the community to parks and the larger surrounding area.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/bike-trail.png'); ?>" alt="...">
            </div>
        </div>
    </section>

    <section id="benefits" class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="heading mb-5">
                    <h2 class="heading-title">Some of the community benefits include:</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-none mb-3">
                    <div class="card-img d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/carbon-footprint.png'); ?>" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">The design team is committed to reducing the overall carbon footprint with green building methods and optional Smart Homes technologies.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-none mb-3">
                    <div class="card-img d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/noun_House_3560941.png'); ?>" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Universal Design for the Active Adult Homes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-none mb-3">
                    <div class="card-img d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/forest.png'); ?>" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Every home is designed to be in close proximity to wooded, natural open spaces. The community is planned around a central core of natural wetlands, forests and meadows that preserve the designated Transition Policy Area.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-none mb-3">
                    <div class="card-img d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/people.png'); ?>" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">Attainable and Workforce Homes for young professionals, first responders, teachers, support staff, retail workers, and families in the County. Approximately 23% of the total number of residential units are proposed to be Attainable and Workforce Homes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-none mb-3">
                    <div class="card-img d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/bus.png'); ?>" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-text text-center">A planned Loudoun Transit bus stop for public transportation to key areas in the County and pick up points for trips to Metro.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-none">
                    <div class="card-img d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/school.png'); ?>" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Mitigating the impact on the County schools with approximately 40% of the proposed residential units are planned for the over 55+ community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="life-style" class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-3">
                    <div class="card h-100 bg-transparent border-0 shadow-none mb-3">
                        <img src="<?php echo get_theme_file_uri('assets/img/home/lifestyle.png'); ?>" class="img-fluid" alt="...">
                        <div class="card-body d-flex flex-column text-center p-0">
                            <div class="heading">
                                <h2 class="heading-title py-4">Lifestyle</h2>
                            </div>
                            <p class="card-text">The vision for Village At Clear Springs is to weave a variety of housing types and age groups into an accessible neighborhood that is surrounded by amenities, parks, and the natural environment. This community will be inter-connected through sidewalks and an extensive trail network including boardwalks over environmentally sensitive areas.</p>
                            <a href="lifestyle.html" class="btn my-button mx-auto mt-auto">FIND OUT MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                    <div class="card h-100 bg-transparent border-0 shadow-none mb-3">
                        <img src="<?php echo get_theme_file_uri('assets/img/home/community.png'); ?>" class="img-fluid" alt="...">
                        <div class="card-body d-flex flex-column text-center p-0">
                            <div class="heading">
                                <h2 class="heading-title py-4">Community</h2>
                            </div>
                            <p class="card-text">Village at Clear Spring's team has worked to design a community that is unique and sustainable for years to come. Homes are being designed for all families - to include first time buyers, move-up buyers, empty nesters, and those looking to age in place. The team is focused on eco-living, affordability, and sustainability.</p>
                            <a href="community.html" class="btn my-button mx-auto mt-auto">FIND OUT MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="numbers" class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading mb-5">
                        <h2 class="heading-title">Village at Clear Springs By The Numbers</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-none mb-3">
                        <div class="card-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/noun_land_3097483.png'); ?>" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text text-center">246 Acres with substantial space designated to active and passive open space.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-none mb-3">
                        <div class="card-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/noun_House_3560941.png'); ?>" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text text-center">Up to 468 Active Adult residential: single family detached, single family attached and condominiums.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-none mb-3">
                        <div class="card-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/noun_House_3560941.png'); ?>" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text text-center">Up to 436 single family detached and single family attached market rate residential homes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-none mb-3">
                        <div class="card-img d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/noun_House_3560941.png'); ?>" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text text-center">Up to 276 Attainable and Workforce Homes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="banner" class="container-fluid g-0">
        <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/img/home/Mask Group 5.png'); ?>" alt="...">
    </section>

    <section id="plan" class="py-5">
        <div class="container">
            <div class="heading">
                <h2 class="heading-title">Community Site Plan</h2>
            </div>
            <div class="content text-center">
                <p>Village at Clear Springs features diverse housing and a mix of active and passive amenities, such as pocket parks, community trails, community clubhouse, pools, and subject to zoning approval a world-class USTA Mid-Atlantic Tennis Campus.</p>
                <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/home/site-plan.jpg'); ?>" alt="...">
            </div>
        </div>
    </section>

    <section id="stay-up" class="container-fluid px-0">
        <div class="section-inner py-5">
            <div class="container">
                <div class="heading">
                    <h2 class="heading-title text-white">Stay Up To Date</h2>
                </div>
                <div class="contact-form d-flex justify-content-center">
                    <form id="form-newsletter" class="row" action="#" method="POST">
                        <div class="col-md-6 form-group my-1">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg rounded-0 shadow-none" id="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-6 my-1">
                            <button type="submit" name="btnAction" value="subscribe" class="btn btn-lg my-button w-100">Connect With Us</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="clear" class="container-fluid py-5">
        <div class="container text-center">
            <div class="logo">
                <img src="<?php echo get_theme_file_uri('assets/img/logo-footer.png'); ?>" alt="...">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>