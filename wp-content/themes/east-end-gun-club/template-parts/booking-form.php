<?php
/**
 * Template Name: Booking Page Page
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
                            <p>Tue, December 24, 4 PM to 11:55 PM</p> <p><b>Availability : </b>Available</p><a type="button" class="btn btn-danger">Select</a>
                        </div>
                        <div class="datesec d-flex justify-content-between p-3 align-items-center gap-3 mt-3">
                            <p>Tue, December 24, 4 PM to 11:55 PM</p> <p><b>Availability : </b>Available</p><a type="button" class="btn btn-danger">Select</a>
                        </div>
                    </div>
                </div>

                <h3 class="p-3 titlebar"><b>Confirm Booking Details</b></h3>
                    
                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3">Booking Details</h5>
                    <table class="w-100 mt-4">
                        <tbody>
                            <tr>
                                <td class="col-lg-3">Date</td>
                                <td class="col-lg-9">Sun, May 25, 2025, 9:10 PM</td>
                            </tr>
                            <tr>
                                <td>Event</td>
                                <td>Black Hammer 22LR Precision Rifle Shoot<br>Tue, December 31, 4 PM to 11:55 PM</td>
                            </tr>
                            <tr>
                                <td>People</td>
                                <td>1 Participant</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <h3 class="p-3 titlebar mt-5"><b>Enter Customer Information</b></h3>

                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3">Contact Information</h5>
                    <div class="d-flex gap-3 mt-5 w-100 justify-content-start align-items-center">
                        <label>Contact info is same as</label>
                        <select class="form-select w-50" id="Contact-info">
                            <option selected>-- Select --</option>
                            <option value="Contactinfo1">Contact info 1</option>
                            <option value="Contactinfo2">Contact info 2</option>
                            <option value="Contactinfo3">Contact info 3</option>
                        </select>
                    </div>
                    <div class="row w-100">
                        <label class="col-12 mb-2"><b>*Name</b></label>
                        <div class="col-lg-5 col-12">
                            <input type="text" name="bookfName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-lg-5 col-12">
                            <input type="text" name="booklName" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-lg-2 col-12">
                            <input type="text" name="bookmName" class="form-control" placeholder="Middle Name">
                        </div>
                        <label class="col-12 mb-2 mt-4"><b>*Email</b></label>
                        <div class="col-12">
                            <input type="email" name="bookemailAdd" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="w-50">
                            <label class="col-12 mb-2 mt-4"><b>*Phone</b></label>
                            <div class="col-12">
                                <input type="tel" name="bookPhone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="w-50">
                            <label class="col-12 mb-2 mt-4"><b>*Date</b></label>
                            <div class="col-12">
                                <input type="date" name="bookDate" class="form-control" placeholder="MM/DD/YYYY">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3">Address</h5>
                    
                    <div class="row w-100 mt-4">
                        <label class="col-12 mb-2"><b>*Street Address</b></label>
                        <div class="col-lg-6 col-12">
                            <input type="text" name="bookAddress1" class="form-control" placeholder="Address 1">
                        </div>
                        <div class="col-lg-6 col-12">
                            <input type="text" name="bookAddress2" class="form-control" placeholder="Address 2">
                        </div>
                        <div class="w-50">
                            <label class="col-12 mb-2 mt-4"><b>*City</b></label>
                            <div class="col-12">
                                <input type="text" name="bookCity" class="form-control" placeholder="City">
                            </div>
                        </div>
                        <div class="w-50">
                            <label class="col-12 mb-2 mt-4"><b>*State/Province</b></label>
                            <div class="col-12">
                                <input type="text" name="bookStateProvince" class="form-control" placeholder="State/Province">
                            </div>
                        </div>
                        <div class="w-50">
                            <label class="col-12 mb-2 mt-4"><b>*Zip/Postal</b></label>
                            <div class="col-12">
                                <input type="text" name="bookZipPostal" class="form-control" placeholder="Zip/Postal">
                            </div>
                        </div>
                        <div class="w-50">
                            <label class="col-12 mb-2 mt-4"><b>*Country</b></label>
                            <div class="col-12">
                                <input type="text" name="bookCountry" class="form-control" placeholder="Country">
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="p-3 titlebar mt-5"><b>Complete Your Booking</b></h3>

                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3">Booking Price</h5>
                    <table class="w-100 mt-4 mb-3">
                        <tbody>
                            <tr>
                                <td class="col-lg-3"><b>Sub-Total</b></td>
                                <td class="col-lg-9">$140.00USD</td>
                            </tr>
                            <tr>
                                <td class="col-lg-3"><b>Tax</b></td>
                                <td class="col-lg-9">$14.28USD</td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="color:#C9283A;"><b>Payment Now Due : $154.28USD</b></p>
                </div>


                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3">Credit/Debit Card Details</h5>
                    <input type="text" name="bookcard" class="form-control mt-4 w-50" placeholder="Card">
                </div>


                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3 mb-4">Terms and Conditions</h5>
                    <p class="mb-3">On rare occasion we may be required to cancel courses due to low participation, or other unforeseen circumstances. Unfortunately, you will likely receive very little notice. In these situations you will be able to reschedule or receive a full refund.</p>
                    <p class="mb-3">For classes/sessions lasting 3 hours or less:</p>
                    <ul class="mb-3">
                        <li>Receive a full refund or reschedule for free: Request must be received at least 2 days/48 hours prior to scheduled start of the course/private lesson/event.</li>
                        <li>Receive a 50% refund or reschedule for $35 change fee: Request must be received at least 24 hours prior to scheduled start of the course/private lesson/event.</li>
                        <li>Reschedule for 50% course value (no refund offered or given): Request must be received prior to scheduled start of the course/private lesson/event.</li>
                    </ul>
                    <p class="mb-3">For classes/sessions lasting over 3 hours:</p>
                    <ul class="mb-3">
                        <li>Receive a full refund or reschedule for free: Request must be received at least 2 days/48 hours prior to scheduled start of the course/private lesson/event.</li>
                        <li>Receive a 50% refund or reschedule for $35 change fee: Request must be received at least 24 hours prior to scheduled start of the course/private lesson/event.</li>
                        <li>Reschedule for 50% course value (no refund offered or given): Request must be received prior to scheduled start of the course/private lesson/event.</li>
                    </ul>
                    <p class="mb-3">Call: (541) 203-0124 (M-F, 8am-5pm) – DO NOT LEAVE A VOICE MESSAGE</p>
                    <div class="d-flex align-items-center gap-3">
                        <input type="checkbox" class="form-check-input">
                        <label>I Agree</label>
                    </div>
                </div>


                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3 mb-4">Create Optional Profile</h5>
                    <div class="d-flex align-items-center gap-3">
                        <input type="checkbox" class="form-check-input">
                        <label>Save time booking your next class, event, or purchase! Create an optional Express Online Profile.</label>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 mt-5">
                    <a type="button" href="#" class="btn btn-secondary">Back</a>
                    <a type="button" href="#" class="btn btn-danger">Complete Booking</a>
                </div>


            </form>
        </div>
    </section>








<?php get_footer(); ?>
