<?php
/**
 * Template Name: Member Login Page
 */

get_header(); ?>






    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg98.webp'); ?>">
                </div>
                <div class="col-lg-6 col-12 d-flex flex-column gap-3  ps-lg-5 ps-0 justify-content-center">
                    <div class="titleSec" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg5.webp'); ?>');">
                        <h3 class="subTitle-h3 redText">Member Login</h3>
                    </div>
                    <p class="mt-3">This Content Is For East End Rod And Gun Club Members Only.</p>
                    <div class="d-flex gap-3 align-items-center">
                        <a class="btn btn-danger" href="#">Join Now</a>
                        <img style="width:40px;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icontargetred.webp'); ?>">
                    </div>

                    <p class="mt-3">Already A Member?</p>
                    <div class="d-flex gap-3 align-items-center">
                        <a class="btn btn-danger" style="background-color:#141346!important; border-color:#141346!important;" href="#">Log in here</a>
                        <img style="width:40px;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icontargetred.webp'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>







<?php get_footer(); ?>