<?php
/**
 * Template Name: Event Form Page
 */

get_header(); ?>







    <section class="container-fluid pt-5 pb-5 p-2 mainSection align-items-end" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/img3.webp'); ?>');">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="d-flex gap-5 align-items-lg-end">
                <div class="w-100">
                    <div class="titleSec p-2 d-flex flex-column align-items-start">
                        <ul class="d-flex gap-4 align-items-center">
                            <li>saturday, MAY 3</li>
                            <li>8:00 am to 5 pm</li>
                        </ul>
                        <h3 class="subTitleWht-h3">Women on Target</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="container-fluid pt-5 pb-5 p-2">
        <div class="container">
            <form class="bookingFormSec">

                <h3 class="p-3 titlebar mt-5"><b>Enter Customer Information</b></h3>

                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3">Contact Information</h5>
                    
                    <div class="row w-100 mt-5">
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


                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start mb-4">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3">Add more Participants</h5>
                    
                    <div class="row w-100 mt-5">
                        <label class="col-12 mb-2"><b>*Name</b></label>
                        <div class="col-lg-5 col-12">
                            <input type="text" name="AddfName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-lg-5 col-12">
                            <input type="text" name="AddlName" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-lg-2 col-12">
                            <input type="text" name="AddmName" class="form-control" placeholder="Middle Name">
                        </div>
                        <label class="col-12 mb-2 mt-4"><b>*Email</b></label>
                        <div class="col-12">
                            <input type="email" name="AddemailAdd" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="w-50">
                            <label class="col-12 mb-2 mt-4"><b>*Phone</b></label>
                            <div class="col-12">
                                <input type="tel" name="AddPhone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="w-50">
                            <label class="col-12 mb-2 mt-4"><b>*Date</b></label>
                            <div class="col-12">
                                <input type="date" name="AddDate" class="form-control" placeholder="MM/DD/YYYY">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary">+ Add more participant</button>




                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="p-lg-4 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                            <h5 class="titlebar subTitle p-2 ps-3 pe-3">Event Cost</h5>
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
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                            <h5 class="titlebar subTitle p-2 ps-3 pe-3">Credit/Debit Card Details</h5>
                            <input type="text" name="bookcard" class="form-control mt-4 w-50" placeholder="Card">
                        </div>
                    </div>
                </div>

                


                


                <div class="p-lg-5 pt-lg-3 bookContent mt-5 d-flex flex-column align-items-start">
                    <h5 class="titlebar subTitle p-2 ps-3 pe-3 mb-4">Terms and Conditions</h5>
                    <p class="mb-3">
                        By checking this box you agree that East End Rod and Gun Club may use images taken of you during this event on their website and social media channels.
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <input type="checkbox" class="form-check-input">
                        <label>I agree to the Hold Harmless terms and conditions.</label>
                    </div>
                </div>


                <div class="d-flex align-items-center gap-3 mt-3">
                    <a type="button" href="#" class="btn btn-primary">SUBMIT</a>
                </div>


            </form>
        </div>
    </section>








<?php get_footer(); ?>