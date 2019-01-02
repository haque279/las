@extends('layout/master')

@section('content')

<?php $foter_page = 1; ?>

<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title">Contact Us</h1>
            <!--BreadCrumbs area-->
            <ul class="breadcrumbs">
                <li>
                    <a href="/">Home</a><span><i class="fas fa-angle-right"></i></span>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<!-- Main Content -->

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section " style="padding-top:50px; padding-bottom:0px; ">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One full width row-->

                            <div class="column two-third column_column ">
                                <div class="column_attr ">
                                    <!--                                   <h3 style="text-align: center">Request Callback</h3>-->
                                    <div role="form" class="wpcf7" id="wpcf7-f35-p31-o1" lang="en-US" dir="ltr">


                                        <div class="screen-reader-response"></div>

                                            <form id="" method="post" action="{{ url('/') }}" class="wpcf7-form">
                                                {{ csrf_field() }}


                                            <div class="column one-second">
                                                <input type="text" name="name" placeholder="Name" required>
                                            </div>
                                            <div class="column one-second">
                                                <select name="you_are" id="" required>
                                                    <option value="" disabled selected>You are</option>
                                                    <option value="Homeowner">Homeowner</option>
                                                    <option value="Business Owner">Business Owner</option>
                                                    <option value="Solicitor/Accountant/Broker">Solicitor/Accountant/Broker</option>
                                                </select>
                                            </div>
                                            <div class="column one" >
                                                <input type="text" name="address" placeholder="Address" required>
                                            </div>
                                            <div class="column one-second">
                                                <select name="status" id="">
                                                    <option value="" disabled selected>Status</option>
                                                    <option value="Paye">Paye</option>
                                                    <option value="Self Employed">Self Employed</option>
                                                </select>
                                            </div>
                                            <div class="column one-second">
                                                <input type="text" name="telephone" placeholder="Telephone" required>
                                            </div>
                                            <div class="column one-second">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="column one-second">
                                                <input type="text" name="bank" placeholder="Bank" >
                                            </div>
                                            <div class="column one-second">
                                                <select name="type_of_loan" id="" required>
                                                    <option value="" disabled selected>Type of Loan</option>
                                                    <option value="Investment Mortgage">Investment Mortgage</option>
                                                    <option value="Interest Only">Interest Only</option>
                                                    <option value="Endowment">Endowment</option>
                                                    <option value="Tracker Mortgage">Tracker Mortgage</option>
                                                    <option value="Business/Commercial">Business/Commercial</option>
                                                    <option value="Current Account">Current Account</option>
                                                </select>
                                            </div>
                                            <div class="column one-second">
                                                <input type="number" name="loan_amount" placeholder="Loan Amount">
                                            </div>
                                            <div class="column one">
                                                <select name="year_taken_out" id="">
                                                    <option value="" disabled selected>Year Taken Out</option>
                                                    <option value="Pre 2000">Pre 2000</option>
                                                    <option value="2000-2005">2000-2005</option>
                                                    <option value="2005-2010">2005-2010</option>
                                                    <option value="2010-2015">2010-2015</option>
                                                    <option value="After 2015">After 2015</option>
                                                </select>
                                            </div>
                                            <div class="column one">
                                                <textarea name="message" id="" cols="30" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <div class="column one">
                                                <input type="checkbox" value="" required>
                                                I have read and accept Loananalysissolutions  <a href="terms-and-conditions">terms and conditions.</a>
                                            </div>



                                            <div class="column one">
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                                <input type="hidden" name="contact_page" value="contact_page">
                                            </div>
                                            <div class="column one">
                                                <input type="submit" value="REQUEST SUBMIT" class="wpcf7-form-control wpcf7-submit" />
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-third column_column ">
                                <div class="column_attr ">
                                    <h3>Our address</h3>
                                    <p class="big">
                                        Loan Analysis Solutions <br>
                                        Unit W10G Ladytown Business Park, <br> Naas, Co. Kildare.
                                    </p>
                                    <hr class=" hr_color hrmargin_b_30" />

                                    <p class="hrmargin_b_4 big">
                                        <a class="arrow_link" href="#">Email: contact@loananalysissolutions.ie</a>
                                    </p>
                                    <p class="hrmargin_b_4 big">
                                        <a class="arrow_link" href="#">Telephone: 045 832 863</a>
                                    </p>
                                    <br>
                                    <h4>Keep in touch</h4>
                                    <div class="links">
                                        <a target="_blank" href="#" class="icon_bar icon_bar_small"><span class="t"><i class="fab fa-facebook-f"></i></span><span class="b"><i class="fab fa-facebook-f"></i></span></a>
                                        <a target="_blank" href="#" class="icon_bar icon_bar_small"><span class="t"><i class="fab fa-twitter"></i></span><span class="b"><i class="fab fa-twitter"></i></span></a>
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

@endsection