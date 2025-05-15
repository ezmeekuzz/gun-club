<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>






    <section class="container-fluid pt-5 pb-5 p-2 mainSection" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg.webp'); ?>');">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="d-flex flex-column gap-5">
                <div class="bnrTop">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/LogoWht.webp'); ?>">
                    <p>Established In 1947</p>
                </div>
                <a class="btnClear d-flex gap-3 align-items-center">Join Today! <img style="width: 50px;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icontarget.webp'); ?>"></a>
            </div>
        </div>
    </section>




    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h3 class="subTitle-h3">Upcoming <span class="redText">events</span></h3>
                </div>
                <div class="col-lg-9 col-12 d-flex align-items-center">
                    <p>Join us year-round for a variety of shooting events! From weekly range sessions to annual competitions, we offer opportunities for all ages and skill levels. Our calendar features activities for men, women, and youth shooters in multiple firearm disciplines throughout the year.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-3">
                    <div class="card">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg1.webp'); ?>">
                        <div class="p-3 d-flex flex-column align-items-center justify-content-between">
                            <div class="d-flex flex-column">
                                <h4 class="w-100">Cowboy Action</h4>
                                <p class="w-100">Register Now - FREE Admission for Shooters ages 12-17.</p>
                            </div>
                            <a class="btn btn-danger mt-3" href="#" role="button">register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-3">
                    <div class="card">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg2.webp'); ?>">
                        <div class="p-3 d-flex flex-column align-items-center justify-content-between">
                            <div class="d-flex flex-column">
                                <h4 class="w-100">Orientation</h4>
                                <p class="w-100">Register Now - FREE Admission for Shooters ages 12-17.</p>
                            </div>
                            <a class="btn btn-danger mt-3" href="#" role="button">register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-3">
                    <div class="card">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg3.webp'); ?>">
                        <div class="p-3 d-flex flex-column align-items-center justify-content-between">
                            <div class="d-flex flex-column">
                                <h4 class="w-100">Black Hammer 22LR Precision Rifle Shoot</h4>
                                <p class="w-100">Register Now - FREE Admission for Shooters ages 12-17.</p>
                            </div>
                            <a class="btn btn-danger mt-3" href="#" role="button">register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-3">
                    <div class="card">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg4.webp'); ?>">
                        <div class="p-3 d-flex flex-column align-items-center justify-content-between">
                            <div class="d-flex flex-column">
                                <h4 class="w-100">Women on Target</h4>
                                <p class="w-100">Register Now - FREE Admission for Shooters ages 12-17.</p>
                            </div>
                            <a class="btn btn-danger mt-3" href="#" role="button">register Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center p-5">
                <a class="btnClear redbtn d-flex gap-3 align-items-center justify-content-center">See All Events <i class="bi bi-arrow-up-right"></i></a>
            </div>
        </div>
    </section>


    <section class="container-fluid pt-0 pb-5 p-2">
        <div class="container p-lg-5 p-4 innerSec" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg6.webp'); ?>');">
            <div class="contentSection d-flex flex-column gap-5">
                <div class="titleSec" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg5.webp'); ?>');">
                    <h3 class="subTitleWht-h3"><span class="redText">Long Range</span> Rifle</h3>
                </div>
                <p>Our rifle range extends to an impressive 800 yards, offering a safe and controlled environment for all your shooting needs. Whether you’re sighting in for an upcoming hunting trip or honing your skills for competition, our well-maintained facility provides the perfect setting for precision shooting at any distance.</p>
                <div class="d-flex gap-4 align-items-center">
                    <a class="btn btn-danger">rifle range info</a>
                    <img style="width: 50px;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icontargetred.webp'); ?>">
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid p-2 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-lg-0 mb-4">
                    <div class="d-flex flex-column justify-content-between gap-5">
                        <div class="topContent d-flex flex-column gap-3">
                            <h3 class="subTitle-h3">Club <br><span class="redText">info</span></h3>
                            <p>Welcome to the East End Rod & Gun Club! Explore our essential information on safety procedures, range usage guidelines, and new member orientations to enhance your club experience.</p>
                        </div>
                        <a class="btnClear redbtn d-flex gap-3 align-items-center justify-content-start">CLUB INFORMATION <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-4">
                    <div class="clubCard" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg7.webp'); ?>');">
                        <div class="row w-100" style="position: absolute; z-index: 1; bottom:20px;">
                            <div class="col-9 d-flex flex-column justify-content-center">
                                <h5>SAFETY PROCEDURES</h5>
                                <p>Tell me more</p>
                            </div>
                            <div class="col-3">
                                <i class="bi bi-arrow-up-right-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-lg-0 mb-4">
                    <div class="clubCard" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg8.webp'); ?>');">
                        <div class="row w-100" style="position: absolute; z-index: 1; bottom:20px;">
                            <div class="col-9 d-flex flex-column justify-content-center">
                                <h5 class="w-100">RANGE USAGE</h5>
                                <p>Tell me more</p>
                            </div>
                            <div class="col-3">
                                <i class="bi bi-arrow-up-right-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="clubCard" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg9.webp'); ?>');">
                        <div class="row" style="position: absolute; z-index: 1; bottom:20px; width: 100%;">
                            <div class="col-9 d-flex flex-column justify-content-center">
                                <h5 class="w-100">ORIENTATIONS</h5>
                                <p>Tell me more</p>
                            </div>
                            <div class="col-3">
                                <i class="bi bi-arrow-up-right-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg10.webp'); ?>">
                </div>
                <div class="col-lg-6 col-12 d-flex flex-column gap-3 align-items-start justify-content-center">
                    <h3 class="subTitle-h3">COME <span class="redText">EXPERIENCE</span> the walla walla valley’s ultimate shooting range</h3>
                    <p>From our 800-yard rifle range to our pistol bays and shotgun fields, East End Rod & Gun Club offers complete facilities for shooters of all disciplines. Practice your marksmanship in a safe, well-maintained environment with fellow enthusiasts who share your passion for shooting sports.</p>
                    <a class="btn btn-danger mt-3" href="#" role="button">join Now</a>
                </div>
            </div>
        </div>
    </section>



    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-4">
                    <h3 class="subTitle-h3"><span class="redText">range</span> news</h3>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg11.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews d-flex flex-column justify-content-center">
                                <h5 class="w-100">RANGE USAGE</h5>
                                <p>As of July 25th: The range is closed due to fires.  Photos are posted under “Club News”, at the…</p>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="clubCard d-flex align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg12.webp'); ?>'); height: 500px;">
                        <div class="d-flex w-100 gap-3" style="position: relative; z-index: 1;">
                            <div class="rangNews d-flex flex-column justify-content-center">
                                <h5 class="w-100">Gun Orientation</h5>
                                <p>Participants of the August 31st 3-Gun orientation.  From the smiles, we think they…</p>
                            </div>
                            <i class="bi bi-arrow-up-right-circle rangNewsIcon"></i>
                         </div>
                    </div>
                </div>
                <div class="col-12 d-flex pt-5 pb-5 p-2 justify-content-center">
                    <a class="btnClear redbtn d-flex gap-3 align-items-center justify-content-center">See All Events <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>
        </div>
    </section>



    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center flex-column gap-2 align-items-center mb-4">
                    <h3 class="subTitle-h3"><span class="redText">Contact</span> us</h3>
                    <p class="w-lg-50 w-100 text-center">For Questions Or Suggestions About The Range, Club Membership, Events, Or To Report An Incident, Use This Form To Contact The Board.</p>
                </div>
                <div class="col-lg-5 col-12 mb-lg-0 mb-4">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg13.webp'); ?>">
                </div>
                <div class="col-lg-7 col-12">
                    <form>
                        <div class="mb-3">
                          <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                          <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                          <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                          <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">
                          SEND
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
