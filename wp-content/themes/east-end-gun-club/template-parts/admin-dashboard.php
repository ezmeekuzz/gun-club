<?php
/**
 * Template Name: Admin Dashboard
 */



 get_header(); ?>


<style>

.navbar, .site-footer{
    display:none;
}



</style>

 

<section class="container-fluid p-4 d-flex align-item-center justify-content-center">

    <div class="d-flex sectAdminBoard w-100">
        <div class="nav-admin p-4 d-flex flex-column justify-content-between">

            
            
            <div class="cont-top">
                <img class="w-100 mb-5 mailLogo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/LogoWht.webp'); ?>">
                <div class="d-flex flex-column align-items-center gap-2 mt-4 mb-4">
                    <div class="profileInfo d-flex flex-column align-items-center gap-2">
                        <i class="bi bi-person-fill"></i>
                        <h6>John Doe</h6>
                    </div>

                    <div class="d-flex flex-column align-items-center gap-2 profileDtls">
                        <a href="#" class="text-center">13216 Southeast, 32nd Street, Bellevue, WA 98005</a>
                        <a href="#" class="text-center">+ 1223 542 343</a>
                        <a href="#" class="text-center">Johndoe@email.com</a>
                    </div>
                </div>
                <ul class="d-flex flex-column gap-2 p-0">
                    <li><a><i class="bi bi-ui-checks-grid"></i><span>Dashboard</span></a></li>
                    <li><a><i class="bi bi-people-fill"></i><span>Membership History</span></a></li>
                    <li><a><i class="bi bi-file-earmark-text-fill"></i><span>Event Registrations</span></a></li>
                    <li><a><i class="bi bi-gear"></i><span>Update Contact Info</span></a></li>
                </ul>
            </div>
            <div class="cont-bot">
                <div class="d-flex flex-column align-items-center logSec p-3">
                    <a class="d-flex align-items-center pb-3 w-100"><i class="bi bi-box-arrow-right"></i>Log out</a>
                    
                    <div class="theme-switch-wrapper mt-3">
                        <span>Light</span>
                        <label class="theme-switch">
                            <input type="checkbox" id="toggleTheme">
                            <span class="slider"></span>
                        </label>
                        <span>Dark</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="admin-board">
            <div class="board-header row align-items-center p-3">
                <h4 class="col-lg-2 col-md-10 col-9">Dashboard</h4>
                <button type="button" class="navToggle mobile col-3"><i class="bi bi-list"></i></button>
                <div class="col-lg-8 col-md-8 searchSec d-flex gap-3 align-items-center mb-lg-0 mb-3 mt-lg-0 mt-3">
                    <i class="bi bi-search"></i>
                    <input class="form-control ps-1" placeholder="Search here...." type="text" name="searchAdmin">
                </div>
                <div class="col-lg-2 col-md-4 col-12 d-flex gap-2 align-items-center">
                    <i class="bi bi-person-fill userIcon p-2"></i>
                    <div class="userSec d-flex flex-column gap-0">
                        <h5>Jane Doe</h5>
                        <span>Regular user</span>
                    </div>
                    <i class="bi bi-box-arrow-right"></i>
                </div>
            </div>
            <div class="row p-4">

                <div class="col-lg-9 col-12">

                    <div class="card w-100 mb-5">
                        <div class="card-body p-4">
                            <h2>Welcome back, John Doe !</h2>
                            <p>You’ve been a member since 2018.</p>
                        </div>
                        <div class="card-footer text-body-secondary d-flex justify-content-between p-4">
                            <p>NRA NUMBER :  2324325243</p>
                            <p>Expiry Date:  2029</p>
                        </div>
                    </div>


                    <div class="row mt-4 mb-4">
                        <div class="col-12 mb-3 d-flex flex-lg-row flex-column align-items-lg-center align-items-start gap-2 justify-content-lg-between">
                            <h5>Family Members</h5>
                            <button class="btn btn-danger">+ add member</button>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="d-flex gap-3 p-2 userSmallAv">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg2.webp'); ?>">
                                <div class="d-flex flex-column gap-1 justify-content-center">
                                    <p>Jane Doe</p>
                                    <p>Active Member Since 2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                            <div class="d-flex gap-3 p-2 userSmallAv">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg2.webp'); ?>">
                                <div class="d-flex flex-column gap-1 justify-content-center">
                                    <p>Jane Doe</p>
                                    <p>Active Member Since 2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                            <div class="d-flex gap-3 p-2 userSmallAv">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg2.webp'); ?>">
                                <div class="d-flex flex-column gap-1 justify-content-center">
                                    <p>Jane Doe</p>
                                    <p>Active Member Since 2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mt-4">
                            <div class="d-flex gap-3 p-2 userSmallAv">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg2.webp'); ?>">
                                <div class="d-flex flex-column gap-1 justify-content-center">
                                    <p>Jane Doe</p>
                                    <p>Active Member Since 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h4 class="d-none">Active Events</h4>

                    <div class="listEvents mt-4 mb-4 d-none">
                        <div class="listheader d-flex flex-lg-row flex-column justify-content-between align-items-center p-3">
                            <p>Found records <span>12</span></p>
                            <div class="listBtns mt-lg-0 mt-2">
                                <a class="btn btn-secondary"><i class="bi bi-journal-arrow-down"></i>Sort</a>
                                <a class="btn btn-danger" href="#">See More</a>
                            </div>
                        </div>

                        <div class="listContent d-flex flex-column gap-4 p-3">
                            <div class="listContItems d-flex justify-content-between align-items-lg-center align-items-start p-3 flex-lg-row flex-column gap-3">
                                <div class="listDetails">
                                    <h5>Cowboy Action</h5>
                                    <p>Register Now - FREE Admission for Shooters ages 12-17. </p>
                                </div>
                                <a class="btn btn-primary">In Progress</a>
                            </div>
                            <div class="listContItems d-flex justify-content-between align-items-lg-center align-items-start p-3 flex-lg-row flex-column gap-3">
                                <div class="listDetails">
                                    <h5>Orientation</h5>
                                    <p>Register Now - FREE Admission for Shooters ages 12-17. </p>
                                </div>
                                <a class="btn btn-primary">In Progress</a>
                            </div>
                            <div class="listContItems d-flex justify-content-between align-items-lg-center align-items-start p-3 flex-lg-row flex-column gap-3">
                                <div class="listDetails">
                                    <h5>Black Hammer 22LR Precision Rifle Shoot</h5>
                                    <p>Register Now - FREE Admission for Shooters ages 12-17. </p>
                                </div>
                                <a class="btn btn-primary">In Progress</a>
                            </div>

                            <div class="listpagination d-flex align-items-center justify-content-center">
                                <p>Showing4-10 from 12</p>
                                
                            </div>
                        </div>
                    </div>



                </div>

                <div class="col-lg-3 col-12">

                    <div class="d-flex p-3 align-items-center gap-3 blueSide mb-3">
                        <i class="bi bi-gem"></i>
                        <div class="d-flex flex-column gap-1">
                            <h5>Member Plan</h5>
                            <p>Family</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column p-4 align-items-start justify-content-between gap-4 blueSide cardAtm mb-3">
                        <h5>My Card</h5>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <p>1234-5678-0123-4567</p>
                            <i class="bi bi-sim"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between botPart w-100">
                            <p>John Doe</p>
                            <p>Exp: 08/2025</p>
                        </div>
                    </div>

                    <div class="secCol d-flex flex-column align-items-start gap-3 p-4 mb-3">
                        <h4>Membership Status</h4>
                        <p>Get interesting updates on your membership account</p>
                        <p class="redText">Valid until  08/04/ 27</p>
                        <a class="btn btn-danger" href="#">upgrade membership</a>
                    </div>

                    <div class="secCol d-none gap-3 p-3 mb-3">
                        <div class="d-flex flex-column gap-2">
                            <i class="bi bi-gem"></i>
                            <h4>Member Benefits</h4>
                            <p>Member since 2018</p>
                        </div>
                        <h3>1809 Points</h3>
                    </div>

                    <div class="secCol d-none flex-column gap-2 p-3">
                        <h4>Chat</h4>
                        <p>Active Members</p>
                        <div class="memberScroll">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img style="width:50px; object-fit:contain;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg.webp'); ?>">
                                    <div class="memberInfo">
                                        <p>Nice To Meet You!</p>
                                        <span>24 March, 5:40 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img style="width:50px; object-fit:contain;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg.webp'); ?>">
                                    <div class="memberInfo">
                                        <p>When Is The Event?</p>
                                        <span>22 March, 3:40 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img style="width:50px; object-fit:contain;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg.webp'); ?>">
                                    <div class="memberInfo">
                                        <p>Good Day!</p>
                                        <span>04 January, 8:30 Am</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img style="width:50px; object-fit:contain;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg.webp'); ?>">
                                    <div class="memberInfo">
                                        <p>Good Day!</p>
                                        <span>04 January, 8:30 Am</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img style="width:50px; object-fit:contain;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/userImg.webp'); ?>">
                                    <div class="memberInfo">
                                        <p>Good Day!</p>
                                        <span>04 January, 8:30 Am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex flex-column gap-3 p-4">
                <h4>Member Documents & Policies</h4>

                <div class="row mt-3">
                    <div class="col-lg-4 col-12">
                        <div class="d-flex flex-column gap-4 w-100 pdfCard p-4 justify-content-between" style="background-image:url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pdfImg.webp'); ?>');">
                            <i class="bi bi-filetype-pdf"></i>
                            <h4>Security/Terms of service</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                        <div class="d-flex flex-column gap-4 w-100 pdfCard p-4 justify-content-between" style="background-image:url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pdfImg.webp'); ?>');">
                            <i class="bi bi-filetype-pdf"></i>
                            <h4>Rules and regulations</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mt-lg-0 mt-3">
                        <div class="d-flex flex-column gap-4 w-100 pdfCard p-4 justify-content-between" style="background-image:url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pdfImg.webp'); ?>');">
                            <i class="bi bi-filetype-pdf"></i>
                            <h4>Terms & Conditions</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section>



<?php get_footer(); ?>