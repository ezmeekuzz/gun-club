<?php
/**
 * Template Name: Booking Summary Page
 */

get_header(); ?>



 <style>
    .calendar th, .calendar td {
      width: 14.28%;
      text-align: center;
      vertical-align: top;
      height: 50px;
      border: 1px solid #eee;
      position: relative;
    }
    .event {
      position: absolute;
      bottom: 5px;
      left: 5px;
      right: 5px;
      background-color: #e60023;
      color: white;
      padding: 2px 5px;
      font-size: 0.75rem;
      border-radius: 3px;
      cursor: pointer;
      display: none!important;
    }
    .event-popup {
      position: absolute;
      top: 100%;
      right: 0;
      z-index: 10;
      background: white;
      border: 1px solid #ccc;
      padding: 15px;
      display: none;
      flex-direction: column;
      gap:10px;
      width: 300px;
      font-size: 0.9rem;
      text-align: left;
      border-radius: 10px;
    }
    .today {
      background-color: #00000018!important;
      font-weight: bold;
    }

    .dayNum{
        font-size: 20px!important;
    }

    #calendarTabs .nav-link{
        color:#000;
    }

    @media screen and (max-width:500px) {
        #calendarTabs .nav-link{
            font-size: 15px;
            padding:5px 10px;
        }

        .event{
            font-size: 6px;
            line-height: 1;
        }
    }
  </style>





    <section class="container-fluid pt-5 pb-5 p-2 mainSection align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/img3.webp'); ?>');">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="d-flex gap-5 align-items-lg-end">
                <div class="w-100">
                    <div class="titleSec" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg16.webp'); ?>');">
                        <h3 class="subTitleWht-h3">Events</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <form class="bookingFormSec">
                <div class="row mb-lg-5 mb-3">
                    <div class="col-lg-3 col-12 d-flex align-items-center">
                        <div class="d-flex gap-3 align-items-center">
                            <a type="button" class="btn btn-danger">Change</a>
                            <img style="width:50px; height: 50px; object-fit: contain;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icontargetred.webp'); ?>">
                        </div>
                    </div>

                    <div class="col-lg-9 col-12 mt-lg-0 mt-3">
                        <p style="text-align: right;">Save time!  Log In or Create Profile</p>
                        <h3 style="text-align: right;"><b>Black Hammer 22LR Precision Rifle Shoot</b></h3>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-4 my-5 calendar">
                        <!-- Tab Content -->
                        <div class="tab-content" id="calendarTabContent">
                            <!-- Month View -->
                            <div class="tab-pane fade show active" id="month" role="tabpanel">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <button class="btn btn-light" id="prevMonth"><i class="bi bi-chevron-left"></i></button>
                                <h3 id="monthTitle">May 2025</h3>
                                <button class="btn btn-light" id="nextMonth"><i class="bi bi-chevron-right"></i></button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
                                </tr>
                                </thead>
                                <tbody id="calendarBody">
                                <!-- JS will render calendar -->
                                </tbody>
                            </table>
                            </div>

                            <!-- Week View Placeholder -->
                            <div class="tab-pane fade" id="week" role="tabpanel">
                            <p class="text-center my-5">[Week View Placeholder]</p>
                            </div>

                            <!-- Day View Placeholder -->
                            <div class="tab-pane fade" id="day" role="tabpanel">
                            <p class="text-center my-5">[Day View Placeholder]</p>
                            </div>

                            <!-- Youth View Placeholder -->
                            <div class="tab-pane fade" id="youth" role="tabpanel">
                            <p class="text-center my-5">[Youth View Placeholder]</p>
                            </div>

                            <!-- Women View Placeholder -->
                            <div class="tab-pane fade" id="women" role="tabpanel">
                            <p class="text-center my-5">[Women View Placeholder]</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 ps-lg-5 col-12">
                        <h3 class="mb-3"><b>Participants</b></h3>
                        <div class="input-group mb-lg-4" style="max-width: 160px;">
                            <button class="btn btn-outline-secondary btn-minus" type="button">−</button>
                            <input type="number" class="form-control text-center quantity-input" value="1" min="1">
                            <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                        </div>

                        <h4 class="mt-4">Date Selected:  <span class="dateRed">Sun, May 25</span></h4>

                        <div class="datesec d-flex justify-content-between p-3 align-items-center gap-3 mt-5">
                            <div class="d-flex flex-column gap-2">
                                <p>Tue, December 24, 4 PM to 11:55 PM</p>
                                <p style="color:#C9283A;"><b>Availability : Full. Please make a different selection.</b></p>
                            </div>
                            <a type="button" class="btn btn-danger">Select</a>
                        </div>
                        
                    </div>
                </div>

            </form>
        </div>
    </section>



<?php get_footer(); ?>