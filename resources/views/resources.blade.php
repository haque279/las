@extends('layout/master')

@section('content')


<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title">Resources</h1>
            <!--BreadCrumbs area-->
            <ul class="breadcrumbs">
                <li>
                    <a href="/>Home</a><span><i class="fas fa-angle-right"></i></span>
                </li>
                <li>
                    <a href="#">Resources</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<!-- Main Content -->
<div id="Content" class="full_page">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section our_client">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix flex">

                            <div class="column one terms">
                                <br>
                                <ul>
                                    <li><a href="https://www.centralcreditregister.ie/" target="_blank">Creditcheck</a></li>
                                </ul>

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