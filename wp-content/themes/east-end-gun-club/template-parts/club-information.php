<?php
/**
 * Template Name: Club Information Page
 */

get_header(); ?>



    <style>
        .table-header {
            background-color: #1a1447!important; /* Deep navy blue */
            color: white!important;
        }

        .search-container {
            display: flex;
            justify-content: end;
            margin-bottom: 1rem;
        }

        .search-input {
            max-width: 300px;
        }
    </style>




    <section class="container-fluid pt-5 pb-5 p-2 mainSection align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg15.webp'); ?>');">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="d-flex gap-5 align-items-lg-end">
                <div class="w-100">
                    <div class="titleSec" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg5.webp'); ?>');">
                        <h3 class="subTitleWht-h3">Club Information</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-4">
                    <h3 class="subTitle-h3 text-center">Click on the title to Learn More</h3>
                    <p class="text-center">Explore our diverse shooting ranges, designed to enhance your marksmanship in a safe, professional atmosphere.</p>
                </div>
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg17.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews exploreRange d-flex flex-column justify-content-center">
                                <h5 class="w-100">Club News</h5>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg55.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews exploreRange d-flex flex-column justify-content-center">
                                <h5 class="w-100">Safety</h5>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg56.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews exploreRange d-flex flex-column justify-content-center">
                                <h5 class="w-100">Emergency Procedures</h5>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-3">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg57.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews exploreRange d-flex flex-column justify-content-center">
                                <h5 class="w-100">Usage</h5>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-3">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg58.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews exploreRange d-flex flex-column justify-content-center">
                                <h5 class="w-100">Orientations</h5>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-3">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg59.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews exploreRange d-flex flex-column justify-content-center">
                                <h5 class="w-100">Scheduled Events</h5>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mt-3">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg60.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews exploreRange d-flex flex-column justify-content-center">
                                <h5 class="w-100">Scheduled Events</h5>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <!-- Search Bar -->
            <!-- <div class="search-container">
                <div class="input-group search-input">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div> -->
            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-header" >
                        <tr style="background-color: #141346!important;">
                            <th scope="col">Elected Position</th>
                            <th scope="col">Current</th>
                            <th scope="col">Term</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr><td>President</td><td>Dan Norton</td><td>2024</td></tr>
                    <tr><td>Vice President</td><td>Gentry Thorpe</td><td>2024–2025</td></tr>
                    <tr><td>Treasurer</td><td>Katherine Autry-Schiffgens</td><td>2023–2024</td></tr>
                    <tr><td>Secretary</td><td>Bill DeWeber</td><td>2024–2025</td></tr>
                    <tr><td>Director, Position 1</td><td>Buddy Birdwell</td><td>2023–2024</td></tr>
                    <tr><td>Director, Position 2</td><td>Gina DeWeber</td><td>2023–2024</td></tr>
                    <tr><td>Director, Position 3</td><td>Jerrod Propeck</td><td>2023–2024</td></tr>
                    <tr><td>Director, Position 4</td><td>Curtis Mitchel</td><td>2024</td></tr>
                    <tr><td>Director, Position 5</td><td>Diane Sisler</td><td>2024–2025</td></tr>
                    <tr><td>Director, Position 6</td><td>James Ziska</td><td>2024–2025</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <!-- Search Bar -->
            <!-- <div class="search-container">
                <div class="input-group search-input">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div> -->
            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-header" >
                        <tr style="background-color: #141346!important;">
                            <th scope="col">Appointed Position</th>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr><td>Range Marshal</td><td>Jerrod Propeck</td></tr>
                    <tr><td>Event Coordinator</td><td>VACANT</td></tr>
                    <tr><td>Maintenance Manager</td><td>Dan Carney</td></tr>
                    <tr><td>Media & Public Relations</td><td>Vacant</td></tr>
                    <tr><td>Armorer</td><td>Vacant</td></tr>
                    </tbody>
                    <thead class="table-header" >
                        <tr style="background-color: #141346!important; text-align: center;">
                            <th scope="col">Showing 1 to 5 of 5 entries</th>
                            <th scope="col">For past years officers, click here.</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>



    


    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="subTitle-h3">Affiliations</h3>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-5ths">
                    <div class="afflImg">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg38.webp'); ?>">
                    </div>
                    <p class="text-center">Civilian Marksmanship Program (CMP)</p>
                </div>
                <div class="col-5ths">
                    <div class="afflImg">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg39.webp'); ?>">
                    </div>
                    <p class="text-center">National Rifle Association (NRA)</p>
                </div>
                <div class="col-5ths">
                    <div class="afflImg">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg40.webp'); ?>">
                    </div>
                    <p class="text-center">National Shooting Sports Foundation (NSSF)</p>
                </div>
                <div class="col-5ths">
                    <div class="afflImg">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg41.webp'); ?>">
                    </div>
                    <p class="text-center">Oregon State Shooting Association (OSSA)</p>
                </div>
                <div class="col-5ths">
                    <div class="afflImg">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg42.webp'); ?>">
                    </div>
                    <p class="text-center">Single Action Shooting Society (SASS)</p>
                </div>
            </div>
        </div>
    </section>






<?php get_footer(); ?>