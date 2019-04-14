<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Financial & Accounting Consultant - Loan Analysis Solutions</title>

<meta name="description" content="We are an experienced team of qualified financial & accounting consultant specializing in the detection of overcharging and errors in all types of Bank accounts." />

<meta name="keywords" content= "tracker mortgage redress, mortgage audit, loan audit, bank guarantee, tracker mortgage, bank of ireland, tracker mortgage compensation, financial institutions, vulture funds, mortgage broker, financial consultant, accounting consultant" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' id='Roboto-css' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' id='Patua+One-css' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- CSS -->
    <link rel='stylesheet' id='global-css' href='/assets/css/global.css'>
    <link rel='stylesheet' id='structure-css' href='/assets/css/structure.css'>
    <link rel='stylesheet' id='local-css' href='/assets/css/estate.css'>
    <link rel='stylesheet' id='custom-css' href='/assets/css/custom.css'>


    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132196814-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132196814-1');
</script>

<meta name="google-site-verification" content="vGZAN-EDpWRqQxGRzp7YzRAfnlXqwCYg4hoXT9GCwwE" />

</head>

<body class=" layout-full-width no-content-padding header-fixed minimalist-header sticky-header sticky-white subheader-title-left">
<!-- Main Theme Wrapper -->
<div id="Wrapper">
    <!-- Header Wrapper -->
    <div id="Header_wrapper">
        <!-- Header -->

        <!-- Header -->
        <header id="Header">
            <!-- Header Top -  Info Area -->
            <div id="Action_bar">
                <div class="container">
                    <div class="column one">
                        <!-- Header - contact info area-->
                        <ul class="contact_details"></ul>
                        <!--Social info area-->
                        <ul class="social"></ul>
                    </div>
                </div>
            </div>
            <!-- Header -  Logo and Menu area -->
            <div id="Top_bar">
                <div class="container">
                    <div class="column one">
                        <div class="top_bar_left clearfix">
                            <!-- Logo-->
                            <div class="logo">
                                <a id="logo" href="/" title="Loan Analysis Solutions"><img class="logo-main scale-with-grid" src="/assets/images/logo.png" alt="Loan Analysis Solutions" /><img class="logo-sticky scale-with-grid" src="/assets/images/logo.png" alt="Loan Analysis Solutions" />
                                </a>
                            </div>
                            <!-- Main menu-->
                            <div class="menu_wrapper">
                                <nav id="menu">
                                    <ul id="menu-main-menu" class="menu">
                                        <li id="menu-item-5" class=" ">
                                            <a href="/"><span>Home</span></a>
                                            <ul>
                                                <li><a href="/our-clients"><span>Our Clients</span></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-27">
                                            <a href="/faq"><span>FAQ’s</span></a>
                                            <ul>
                                                <li><a href="/faq"><span>FAQ’s</span></a></li>
                                                <li><a href="/testimonials">Testimonials</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-34">
                                            <a href="/get-started"><span>Get Started</span></a>
                                        </li>
                                        <li id="menu-item-33">
                                            <a href="/fees"><span>Fees</span></a>
                                            <ul>
                                                <li><a href="/fees"><span>Fees</span></a></li>
                                                <li><a href="/resource"><span>Resources </span></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-33">
                                            <a href="/tracker-loan-compensation"><span>Tracker Loan Compensation</span></a>
                                        </li>
                                        <li id="menu-item-33">
                                            <a href="/contact-us"><span>Contact us</span></a>
                                        </li>
                                    </ul>
                                </nav><a class="responsive-menu-toggle " href="#"><i class="fas fa-bars"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>



        <div class="" style="position: fixed; top:150px; right: 150px; z-index: 999 ">

            @if ($message = Session::get('success'))
                <div class="alert alert_success">
                    <div class="alert_wrapper">
                        {{ $message }}
                    </div><a href="#" class="close"><i class="fas fa-times-circle"></i></a>
                </div>
            @endif


            @if ($message = Session::get('fail'))
                    <div class="alert alert_error">
                        <div class="alert_wrapper">
                            {{ $message }}
                        </div><a href="#" class="close"><i class="fas fa-times-circle"></i></a>
                    </div>
            @endif


            @foreach($errors->all() as $error)
                    <div class="alert alert_error">
                        <div class="alert_wrapper">
                            {{ $error }}
                        </div><a href="#" class="close"><i class="fas fa-times-circle"></i></a>
                    </div>
            @endforeach
        </div>

        @yield('content')


    <!-- Footer-->
        <footer id="Footer" class="clearfix">
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <!--                        <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="fas fa-chevron-up"></i></span></a>-->
                        <div class="copyright">
                            &copy; 2018 Loan Analysis Solutions, All Rights Reserved.
                        </div>
                        <div style="display: none">Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <!--Social info area-->
                        <span style="text-align: right; display:block; margin-right: 80px"><a href="terms-and-conditions" style="color: #ddd">Terms & Conditions</a></span>
                        <ul class="social"></ul>
                    </div>
                </div>
            </div>
            <?php
            if(!isset($foter_page)) { ?>
            <a href="#popup-1" rel="prettyphoto" class="popup_footer popup-link  button_js">
                <span class="button_label">Request Callback </span>
            </a>

            <?php  }  ?>

        </footer>
    </div>
    
    
    <div id="popup-1" class="popup-content ">
        <div class="popup-inner">

            <div id="contactWrapper" class="popup_footer_content">
                <div class="column one column_column ">
                    <div class="column_attr ">
                        <h3 style="text-align: center">Request Callback</h3>
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
                                        <option value="Repayment Mortgage">Repayment Mortgage</option>
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
                                    I have read and accept Loananalysissolutions  terms and conditions
                                </div>

                                {{--<div class="column one">--}}
                                {{--{!! NoCaptcha::renderJs() !!}--}}
                                {{--{!! NoCaptcha::display() !!}--}}
                                {{--</div>--}}
                                <div class="column one">
                                    <input type="submit" value="REQUEST SUBMIT" class="wpcf7-form-control wpcf7-submit" />
                                </div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div id="home" class="popup-content ">
        <div class="popup-inner">

            <div id="contactWrapper" class="popup_footer_content">
                <div class="column one column_column ">
                    <div class="column_attr ">
                        <h3 style="text-align: center">Homeowners</h3>
                        <div role="form" class="wpcf7" id="wpcf7-f35-p31-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <p>
                                <strong>Substantial refunds paid out daily:</strong> Find out if you are one of the many mortgage holders that are entitled to thousands in refunds due to overcharging on your mortgage.
                            </p>

                            <p>
                                <strong>Vulture Funds /Repossesions:</strong> If you have been overcharged and entitled to a refund before getting  into financial trouble you may be in a better negotiating position than you think when your overcharging is documented.
                            </p>

                            <p>
                                <strong>Tracker Mortgage</strong> Central Bank statistic (April 2018) on tracker Mortgage Redress Compensation cases :
                                10,759 customers have received between €10,000 and €50,000. <br>
                                2,226 customers have received between €50,000 and €100,000. <br>
                                450 customers have received more than €100,000, including 11 customers in excess of €500,000
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="business" class="popup-content ">
        <div class="popup-inner">

            <div id="contactWrapper" class="popup_footer_content">
                <div class="column one column_column ">
                    <div class="column_attr ">
                        <h3 style="text-align: center">Business owners</h3>
                        <div role="form" class="wpcf7" id="wpcf7-f35-p31-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <p>
                                Comprehensive indepth analysis of business banking facilities. The detailed appraisal focuses on all aspects of the loan facility from the initial letter of loan offer through to the present day loan arrangement. Particular emphasis will be given to rate of interest, charges, penalties, guarantee, change of terms, security, inappropriate and unsuitable loan facilities. The objective of the analysis will be to uncover overcharging, infractions and violations of Consumer Credit code. To complete the analysis, ideally, we require all correspondence relevant to the account that was issued by the bank under the freedom of info act . When inaccuracies are uncovered bank customers can use the findings to reclaim refunds, where overcharging is discovered, in addition to negotiating better facility terms and in the case of litigation strengthen the customers case. Please be advised that the analysis does not constitute legal advice and should be viewed as a precursor to legal advice.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <a href="#popup-2" rel="prettyphoto" class="popup-link button button_js">
    <span class="button_label">Click to open Popup</span>
</a>
 
<div id="popup-2" class="popup-content">
    <div class="popup-inner">
        <div class="image_frame image_item no_link scale-with-grid alignnone has_border">
            <div class="image_wrapper">
                <img class="scale-with-grid" src="images/img.jpg" alt="img">
            </div>
        </div>
        <hr class="no_line">
        Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellen tesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.
    </d

    <!-- JS -->

    <script type="text/javascript" src="/assets/js/jquery-2.1.4.min.js"></script>

    <script type="text/javascript" src="/assets/js/mfn.menu.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.plugins.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="/assets/js/animations/animations.js"></script>
    <script type="text/javascript" src="/assets/js/scripts.js"></script>

    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script type="text/javascript">
        var tpj = jQuery;
        tpj.noConflict();
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_2");
            } else {
                revapi1 = tpj("#rev_slider_1_2").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 0.7,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                    },
                    gridwidth: 1180,
                    gridheight: 800,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: "off",
                    }
                });
            }
        });
    </script>
    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "/assets/images/logo.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "/assets/images/logo.png").width(stickyLogoW).height(stickyLogoH);
            }
        });
    </script>

    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>
</body>
</html>