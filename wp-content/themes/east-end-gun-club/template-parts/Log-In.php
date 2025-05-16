<?php
/**
 * Template Name: Log In Page
 */

get_header(); ?>





    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg13.webp'); ?>">
                </div>
                <div class="col-lg-6 col-12 d-flex flex-column gap-3  ps-lg-5 ps-0 justify-content-center">
                    <div class="titleSec" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg16.webp'); ?>');">
                        <h3 class="subTitle-h3 redText">Log In</h3>
                    </div>
                    <p class="mt-3">If You Request A Password Reset, Be Sure To Check Your Spam Or Junk Folder!!!</p>
                    <form class="mt-4">
                        <div class="mb-3">
                            <label>Username or Email Address</label>
                            <input type="text" class="form-control" id="lguser">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="Password" class="form-control" id="lgPassword">
                        </div>
                        <div class="mb-3 form-check d-flex align-items-center gap-2">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                          </div>
                        <div class="d-flex flex-column gap-1 align-items-start">
                            <button type="submit" class="btn btn-danger">
                                SUBMIT
                            </button>
                            <a href="#" class="lostTxt">Lost Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>







<?php get_footer(); ?>