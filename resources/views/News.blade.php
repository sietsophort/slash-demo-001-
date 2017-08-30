@extends('welcome')
@section('content')
    <div class="img_news">
                <img src="image/y-quotation.JPG"style="width:100%;">

    <div class="Text row" style="font-family: 'Roboto Condensed', sans-serif";>
        <div class="col-lg-3 hidden-sm hidden-md  hidden-xs">
        <div class="Text1 text-center" style="font-family: 'Roboto Condensed', sans-serif";>
            <p style="color: #f9c803;font-size: 25px" >
                News And Event
            </p>
        </div>
        </div>
    </div>
    </div>
    <div class="jumbotron">
        <div class="contain-news" id="titleNews">
            <div class="news-title">
                <p>News &amp; Events</p><br>
            </div>
        </div>
        <div class="container" id="newscontent">
            <h4 style="color:green">Dev Tool News</h4>
            <div class="row  makemargin">
                <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 ">
                    <div class="img-item">
                        <a href="#" >
                            <img src="{{asset('image/air-logistic.jpg')}}" class="box-shadow-on-img news-img">
                            <div class="overlay-img-box"></div>
                        </a>

                    </div>
                    <p class="pcolor">Air Logistic service</p>
                    <div class="row">
                        <div class="col-xs-6">
                   <span class="post-time">
                       <span class="glyphicon glyphicon-time"></span>
                       1 month ago
                   </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 ">
                    <div class="img-item">
                        <a href="#" >
                            <img src="{{asset('image/sea-port.jpg')}}" class="box-shadow-on-img news-img">
                            <div class="overlay-img-box"></div>
                        </a>

                    </div>
                    <p class="pcolor">sea port service</p>
                    <div class="row">
                        <div class="col-xs-6">
                   <span class="post-time">
                       <span class="glyphicon glyphicon-time"></span>
                       1 month ago
                   </span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 ">
                    <div class="img-item">
                        <a href="#" >
                            <img src="{{asset('image/y-quotation.JPG')}}" class="box-shadow-on-img news-img" >
                            <div class="overlay-img-box"></div>
                        </a>

                    </div>
                    <p class="pcolor">yellow quotation service</p>
                    <div class="row">
                        <div class="col-xs-6">
                   <span class="post-time">
                       <span class="glyphicon glyphicon-time"></span>
                       4 month ago
                   </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 ">
                    <div class="img-item">
                        <a href="#" >
                            <img src="{{asset('image/port-logistic-2.jpg')}}" class="box-shadow-on-img news-img">
                            <div class="overlay-img-box"></div>
                        </a>
                    </div>
                    <p class="pcolor">Port Logistic service</p>
                    <div class="row">
                        <div class="col-xs-6">
                   <span class="post-time">
                       <span class="glyphicon glyphicon-time"></span>
                       7 month ago
                   </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4  col-md-4col-sm-12 col-xs-12 ">
                    <div class="img-item">
                        <a href="#" >
                            <img src="{{asset('image/container-sea-port.jpg')}}" class="box-shadow-on-img news-img">
                            <div class="overlay-img-box"></div>
                        </a>

                    </div>
                    <p class="pcolor"> Look at Warehouse </p>
                    <div class="row">
                        <div class="col-xs-6">
                   <span class="post-time">
                       <span class="glyphicon glyphicon-time"></span>
                       2 month ago
                   </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 ">
                    <div class="img-item">
                        <a href="#" >
                            <img src="{{asset('image/air-logistic.JPG')}}" class="box-shadow-on-img news-img">
                            <div class="overlay-img-box"></div>
                        </a>

                    </div>
                    <p class="pcolor">Export brokerage </p>
                    <div class="row">
                        <div class="col-xs-6">
                   <span class="post-time">
                       <span class="glyphicon glyphicon-time"></span>
                       5 month ago
                   </span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- end News section-->
    </div>



    @endsection