@extends('layout/master')

@section('content')


<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title">Who are our clients</h1>
            <!--BreadCrumbs area-->
            <ul class="breadcrumbs">
                <li>
                    <a href="/">Home</a><span><i class="fas fa-angle-right"></i></span>
                </li>
                <li>
                    <a href="#">Our Clients</a>
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
            <div class="entry-content" >
                <div class="section our_client">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- One Third (1/3) Column -->
                            <div class="column one-fourth column_photo_box ">
                                <div class="photo_box ">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="fadeInLeft">
                                        <h4>Homeowners</h4>
                                        <div class="image_frame">
                                            <div class="image_wrapper">
                                                <a href="#popup-1" rel="prettyphoto" class="popup-link">
                                                    <div class="mask"></div><img class="scale-with-grid" src="assets/images/house.png" alt="Home managers" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            Almost 40,000 Irish Mortgage Customers have been recognised by the Central Bank as being victims of overcharging by Irish Banks. Loan Analysis Solutions are helping many of these victims to quantify exactly the overcharging that has occurred.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-fourth column_photo_box ">

                                <div class="photo_box ">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="fadeInUp">
                                        <h4>Business Owners</h4>
                                        <div class="image_frame">
                                            <div class="image_wrapper">
                                                <a href="#popup-1" rel="prettyphoto" class="popup-link">
                                                    <div class="mask"></div><img class="scale-with-grid" src="assets/images/bar-chart.png" alt="Realtor" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            Business and commercial Bank accounts through the myriad of conditions for interest,  fees, penalties and charges are very often prone to substantial overcharging by Banks. Over a number of years these overcharges, with the impact of compound interest can result in huge refunds due to the client.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-fourth column_photo_box ">
                                <div class="photo_box ">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="fadeInUp">
                                        <h4>Accountants/ Financial Consultants</h4>
                                        <div class="image_frame">
                                            <div class="image_wrapper">
                                                <a href="#popup-1" rel="prettyphoto" class="popup-link">
                                                    <div class="mask"></div><img class="scale-with-grid" src="assets/images/accounting.png" alt="Realtor" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            We offer a specialised service to accountants and Financial Consultants who wish to have their clients bank accounts forensically appraised. We liaise directly with the accountancy office without the need for contact with the client.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="column one-fourth column_photo_box ">
                                <div class="photo_box ">
                                    <!-- Animated area -->
                                    <div class="animate" data-anim-type="fadeInUp">
                                        <h4>Solicitors</h4>
                                        <div class="image_frame">
                                            <div class="image_wrapper">
                                                <a href="#popup-1" rel="prettyphoto" class="popup-link">
                                                    <div class="mask"></div><img class="scale-with-grid" src="assets/images/hand-shake.png" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            Where a bank customer is legally seeking redress for compensation for overcharging through a solicitor we can provide audited forensic reports of the overcharging by the bank. When needed we can arrange to provide the solicitor with expert witness testimony for court appearances.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section the_content no_content">
                    <div class="section_wrapper">
                        <div class="the_content_wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection