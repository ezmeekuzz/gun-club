<?php
/**
 * Template Name: Admin Dashboard
 */



 get_header(); ?>


<style>

.navbar, .site-footer{
    display:none;
}

.container-fluid{
    height: 100vh;
}




</style>

 

<section class="container-fluid p-4 d-flex align-item-center justify-content-center">

    <div class="d-flex sectAdminBoard w-100">
        <div class="nav-admin p-4 d-flex flex-column justify-content-between">
            
            <div class="cont-top">
                <img class="w-100 mb-5 mailLogo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/LogoWht.webp'); ?>">
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
                    <div class="userDetails d-flex flex-column gap-2 p-3 mb-4 align-items-start">
                        <h2>Welcome back, John Doe !</h2>
                        <p>You’ve been a member since 2018.</p>
                        <p>You Have 9 upcoming event this month </p>
                        <a class="btn btn-danger">See schedules</a>
                    </div>



                    <h4>Active Events</h4>

                    <div class="listEvents mt-4">
                        <div class="listheader d-flex justify-content-between align-items-center p-3">
                            <p>Found records <span>12</span></p>
                            <div class="listBtns">
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
                    <div class="secCol d-flex flex-column gap-2 p-3 mb-3">
                        <h4>Renew Membership</h4>
                        <p>Get interesting updates on your membership account</p>
                        <a class="btn btn-danger" href="#">Renew Membership</a>
                    </div>

                    <div class="secCol d-flex gap-3 p-3 mb-3">
                        <div class="d-flex flex-column gap-2">
                            <i class="bi bi-gem"></i>
                            <h4>Member Benefits</h4>
                            <p>Member since 2018</p>
                        </div>
                        <h3>1809 Points</h3>
                    </div>

                    <div class="secCol d-flex flex-column gap-2 p-3">
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
        </div>
    </div>

<section>



<?php get_footer(); ?>