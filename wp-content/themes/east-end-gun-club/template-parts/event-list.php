<?php
/**
 * Template Name: Event List Page
 */

get_header(); ?>


<style>
    .calendar th, .calendar td {
      width: 14.28%;
      text-align: center;
      vertical-align: top;
      height: 100px;
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
            <div class="container my-5 calendar">
                <!-- Navigation Tabs -->
                <ul class="nav nav-tabs justify-content-end mb-3" id="calendarTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="month-tab" data-bs-toggle="tab" data-bs-target="#month" type="button" role="tab">Month</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="week-tab" data-bs-toggle="tab" data-bs-target="#week" type="button" role="tab">Week</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="day-tab" data-bs-toggle="tab" data-bs-target="#day" type="button" role="tab">Day</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="youth-tab" data-bs-toggle="tab" data-bs-target="#youth" type="button" role="tab">Youth</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="women-tab" data-bs-toggle="tab" data-bs-target="#women" type="button" role="tab">Women</button>
                    </li>
                </ul>

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
        </div>
    </section>






<?php get_footer(); ?>