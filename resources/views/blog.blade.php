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
                        <a href="#">Blog</a>
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
                                    @foreach($datas as $data)
                                    <div class="animate testimonials" data-anim-type="fadeInLeft">
                                        <a href="/blog/{{$data->link}}">
                                        <div class="title">
                                            {!! $data->title !!}
                                        </div>
                                        </a>

                                        <div class="desc">
                                            <p>
                                                {!!  str_limit($data->text, $limit = 200, $end = '...') !!}
                                                <a href="/blog/{{$data->link}}" style="color: #999; color: rgba(41, 128, 185, 1); font-weight: bold">Read More</a>
                                            </p>

                                            <p>
                                                <strong style="display: block; text-align: right">
                                                    @if($data->author)
                                                    {!! $data->author !!},
                                                    @endif
                                                    Published: {!!  date('Y-M-d', strtotime($data->created_at)); !!}</strong>
                                            </p>
                                        </div>
                                    </div>
                                   @endforeach
                                    <p style="overflow: hidden;  width: 100%">
                                        {!! $datas->links() !!}
                                    </p>

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