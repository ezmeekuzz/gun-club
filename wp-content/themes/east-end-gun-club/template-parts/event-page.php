<?php
/**
 * Template Name: Event Page
 */

get_header(); ?>







    <section class="container-fluid pt-5 pb-5 p-2 mainSection align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/img3.webp'); ?>');">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="d-flex gap-5 align-items-lg-end">
                <div class="w-100">
                    <div class="titleSec p-2" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg16.webp'); ?>');">
                        <h3 class="subTitleWht-h3">Events</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <h3 class="subTitle-h3">Upcoming <br><span class="redText">events</span></h3>
                </div>
                <div class="col-lg-5 col-12 d-flex align-items-start flex-column justify-content-center">
                    <h5>FILTER BY</h5>
                    <ul class="nav nav-tabs" id="tabSet1" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="tab1-Year" data-bs-toggle="tab" data-bs-target="#tab1-Year-pane"
                                type="button" role="tab">Year</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="tab1-Month" data-bs-toggle="tab" data-bs-target="#tab1-Month-pane"
                                type="button" role="tab">Month</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="tab1-Week" data-bs-toggle="tab" data-bs-target="#tab1-Week-pane"
                                type="button" role="tab">Week</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="tab1-Day" data-bs-toggle="tab" data-bs-target="#tab1-Day-pane"
                                type="button" role="tab">Day</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="tab1-Youth" data-bs-toggle="tab" data-bs-target="#tab1-Youth-pane"
                                type="button" role="tab">Youth</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="tab1-Women" data-bs-toggle="tab" data-bs-target="#tab1-Women-pane"
                                type="button" role="tab">Women</button>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mt-5">
                    <div class="tab-content" id="tabSet1Content">
                        <div class="tab-pane fade show active" id="tab1-Year-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Cowboy Action</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17. </p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg1.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Orientation</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg2.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Black Hammer 22LR Precision Rifle Shoot</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg3.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg4.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg5.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg6.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg7.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-3 col-md-6 col-12 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg8.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-3 col-md-6 col-12 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg9.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-3 col-md-6 col-12 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg10.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab1-Month-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Cowboy Action</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17. </p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg1.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Orientation</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg2.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Black Hammer 22LR Precision Rifle Shoot</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-lg-0 mt-3">
                                    <div class="card w-100" style="width: 18rem;">
                                        <span class="btn btn-danger date">saturday, MAY 3</span>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newEventImg3.webp'); ?>" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <div class="cardCont">
                                                <h5 class="card-title mb-3">Women on Target</h5>
                                                <p class="card-text">Register Now - FREE Admission for Shooters ages 12-17.</p>
                                            </div>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="#" class="btn btn-primary">Sign up now</a>
                                                <a href="#" class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






<?php get_footer(); ?>