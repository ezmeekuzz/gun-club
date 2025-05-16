<?php
/**
 * Template Name: Contact Us Page
 */

get_header(); ?>









    <section class="container-fluid pt-5 pb-5 p-2 mainSection align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/contactImg.webp'); ?>');">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="d-flex gap-5 align-items-lg-end">
                <div class="w-100">
                    <div class="titleSec" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg5.webp'); ?>');">
                        <h3 class="subTitleWht-h3">Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="container-fluid pt-5 pb-5 p-2 contactUsSec">
        <div class="container">
            <div class="d-flex flex-column gap-3 align-items-center mb-5">
                <h3 class="subTitle-h3 text-center" >GET STARTED</h3>
                <p class="text-center">Our Inventory Is Constantly Expanding And Changing So Make Sure You Swing By Or Drop Us An Email With A Wish List. For Special Quotes Please Use The Form Below And Include All Makes And Model Numbers In Addition To Any Other Relevant Information That Will Help Us Locate The Exact Item You Are Looking For.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-flex flex-column gap-3">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/telephone.webp'); ?>">
                    <div class="d-flex flex-column gap-2 p-lg-4 p-2">
                        <h5 class="text-center"><b>Telephone</b></h5>
                        <p class="text-center">(541) 203-0124</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex flex-column gap-3">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/physicalAddress.webp'); ?>">
                    <div class="d-flex flex-column gap-2 p-lg-4 p-2">
                        <h5 class="text-center"><b>Physical Address</b></h5>
                        <p class="text-center">Range: 251 County 564 Road, Milton-Freewater, OR 97862</p>
                        <p class="text-center"><b>Service Area</b></p>
                        <p class="text-center">Southeast Washington <br>Northeast Oregon</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-3 d-flex flex-column gap-3">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mailAddress.webp'); ?>">
                    <div class="d-flex flex-column gap-2 p-lg-4 p-2">
                        <h5 class="text-center"><b>Mailing Address</b></h5>
                        <p class="text-center">Mail: East End Rod & Gun Club, PO Box 251, Milton-Freewater, OR 97862</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-3 d-flex flex-column gap-3">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/emailDivChair.webp'); ?>">
                    <div class="d-flex flex-column gap-2 p-lg-4 p-2">
                        <h5 class="text-center"><b>E-mail a Division Chair</b></h5>
                        <p class="text-center">
                            ARCHERY RANGE<br>
                            MUZZLELOADER RANGE<br>
                            PISTOL BAYS<br>
                            ACTION SHOOTING<br>
                            RIFLE RANGE<br>
                            Trap/5 Stand
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-3 d-flex flex-column gap-3">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/emailBrdMbr.webp'); ?>">
                    <div class="d-flex flex-column gap-2 p-lg-4 p-2">
                        <h5 class="text-center"><b>E-mail a Board Member</b></h5>
                        <p class="text-center">
                            President<br>
                            Vice President<br>
                            Executive Officer<br>
                            Treasurer<br>
                            Secretary<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-3 d-flex flex-column gap-3">
                    <img class="w-100" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Emaileegc.webp'); ?>">
                    <div class="d-flex flex-column gap-2 p-lg-4 p-2">
                        <h5 class="text-center"><b>E-mail the EER&GC</b></h5>
                        <p class="text-center">Mail: East End Rod & Gun Club, PO Box 251, Milton-Freewater, OR 97862</p>
                        <form class="mt-4">
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
        </div>
    </section>






<?php get_footer(); ?>