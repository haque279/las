@extends('layout/master')

@section('content')


    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">Blog</h1>
                <!--BreadCrumbs area-->
                <ul class="breadcrumbs">
                    <li>
                        <a href="/">Home</a><span><i class="fas fa-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Blog Details</a>
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
                    <div class="section " style="min-height: 70vh">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One Third (1/3) Column -->
                                <div class="column one column_photo_box " style="margin-top: 30px">
                                    <!-- Animated area -->

                                        <div class="animate testimonials" data-anim-type="fadeInLeft">
                                            <div class="title" style="font-size: 30px; padding: 15px">
                                                {!! $data->title !!}
                                            </div>

                                            <div class="desc">
                                                {!! $data->text !!}
                                                <p>

                                                    <strong style="display: block; text-align: right">
                                                        @if($data->author)
                                                            {!! $data->author !!},
                                                        @endif
                                                        Published: {!!  date('Y-M-d', strtotime($data->created_at)); !!}</strong>
                                                </p>
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