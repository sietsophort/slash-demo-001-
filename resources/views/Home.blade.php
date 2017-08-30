@extends('welcome')
@section('content')
    <div class="Header">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
                <li data-target="#myCarousel" data-slide-to="0" class="active" style="z-index: 10;width:5%;height: 2px;"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="z-index: 11;width: 5%;height: 2px"></li>
                <li data-target="#myCarousel" data-slide-to="2" style="z-index: 1;width: 5%;height: 2px"></li>
                <li data-target="#myCarousel" data-slide-to="3" style="z-index: 1;width: 5%;height: 2px"></li>
                <li data-target="#myCarousel" data-slide-to="4" style="z-index: 1;width: 5%;height: 2px"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="image/new-slide-1.jpg"style="width:100%;height: 600px;">
                </div>

                <div class="item">
                    <img src="image/y-slide-2.JPG" style="width:100%;height: 600px;">
                </div>

                <div class="item">
                    <img src="image/new-slide-3.jpg"  style="width:100%;height: 600px;">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="Text " style="font-family: 'Roboto Condensed', sans-serif">
            <div class="Text1 text-center" style="font-family: 'Roboto Condensed', sans-serif";>
                <p >YELLOW SEA LOGISTICS offers the supports for the foods transportation both locally
                    <br> and globally such as Rail Freight, Intermodal, Air Freight, Ocean Freight,Custom Broker and
                    <br>Warehousing /Distribution
                </p>
            </div>
        </div>
        <div class="ButtonHead">
            <button style=" font-family: Roboto Condensed,Serif;">QUOTE REQUEST</button>
          </div>
    </div>

    <div class="Body" style="font-family: 'Roboto Condensed', sans-serif" >
        <div class="jumbotron">
            <div class="container" style="font-family: 'Roboto Condensed', sans-serif" >
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <p id="b">About<span>yellowsea Logistic</span></p>
                        <p>
                            Yellow Sea Logistic offers the supports for the goods transportation both locally and globally such as Rail Freight,
                            Intermodal,Air Freight,Ocean Freight,Custom Broker,and Warehousing/ Distribution.<br>
                        </p>
                        <p>
                            Based on our strong assets and facilities,we have been motivated to start our first service providing in 2016,
                            and then with many more services from the start to the end.We would like our customer to rest assured and let us take care of the rest for you.
                            We are new in term of company, but we have a talented and experienced team here to ensure a high quality service being delivered and satisfied
                            to our customers. <br/>
                        </p>
                        <p>
                            We are doing our best as a responsible business partner and a customer focused service to bring value and solution to your business
                            develoment as well as ours.
                        </p>
                    </div>
                </div>
                <div class="Image">
                    <img src="image/new-slide-1.jpg" style="width:100%;">
                    <div class="LogoImage">
                        <span style="background-color: yellow">Y</span>
                        <span style="background-color: darkcyan">S</span>
                        <span style="background-color: darkgreen">L</span>
                        <p style="font-size:10px">YSL@Company</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature">
            <h1><p id="p">PRODUCT & SERVICE</p><hr width="15%" style=" border: 1px solid darkorange;"></h1>
            <div class="container">
                <div class="IntermodalService" style="font-family: 'Roboto Condensed', sans-serif" >
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <h3>Intermodal Service</h3>
                            <p>Our core product is to provide you the stable but qualified delivery service.
                                We have a station where you can easily drop your cargo and leave everything to us. On top of that,We have the intermodal
                                service to support you an all-in delivery to your warehouse directly.<br/>
                            <p>We have a strong product designed as we have a warehous combined with local
                                intermodal service. It will save you time, cost and security.Your cargos will delivered at the destination all at the same time.
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="IntermodalImage">
                                <img src="../image/intermodal.jpg" class="img-responsive" width="95%"  style="margin-left: 20px; margin-top:15px;">
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>

                <div class="FreightForwarding" style="font-family: 'Roboto Condensed', sans-serif" >
                    <div class="row">
                        <div class="col-md-8 col-md-push-4 col-sm-12 col-xs-12">
                            <h3> Freight Forwarding</h3>
                            <p>By Ocean or Air, FCL or LCL,we believe that we are the one for you.We focus to offer the fast
                                and premium service from Door to Door/Port to Port/Door to Port/Port to Door.<br>
                            </p>
                            <p>We desing our service as per your individual requirements from/to almost anywhere
                                you wish to ship your cargo in the globe.We handle them with Care and Responsibility.
                                Given your available time range, we will support you to present your cargos to anypalce
                                of your request with the cost effectiveness.
                            </p>
                        </div>
                        <div class="col-md-4 col-md-pull-8 col-sm-12 col-xs-12">
                            <div class="FrieghtImage">
                                <img src="../image/frieght_forward.jpg" class="img-responsive" width="95%"style="margin-left: 20px; margin-top:15px;" >
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="CustomHouseBrokerage" style="font-family: 'Roboto Condensed', sans-serif" >
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <h3>Custom House Brokerage</h3>
                            <p>For ease of doing your trading business,we urge to provide you -Custom
                                House Brokerage service supporting your imports businesses.<br>
                            </p>
                            <p>We will cover all the praparations of required documents, taxes/duties caculation and
                                payment, ensuring customs fomality completion in the fast maner, so your cargo will
                                be available as planned.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="CustomImage">
                                <img src="../image/custom-brokerage.jpg" class="img-responsive" width="95%" style="margin-left: 20px; margin-top: 15px;">
                            </div>
                        </div>
                    </div>
                    <hr/>

                </div>
                <div class="WarehousingDistibution" style="font-family: 'Roboto Condensed', sans-serif" >
                    <div class="row">
                        <div class="col-md-8 col-md-push-4 col-sm-12 col-xs-12">
                            <h3>Warehousing and Distibution</h3>
                            <p>Storage is crucially important for your cargos as it is the starting before
                                bringing your cargos to the world or to your retails shop.
                            </p>
                            <p>We keep it a priority when it comes to this. That is why we have our own
                                warehuose which is standardize, highly maintianed and ideally safe. There is also our value
                                added service to distribute your wish-list cargo to you whether it is in a small or big volume.
                            </p>
                        </div>
                        <div class="col-md-4 col-md-pull-8 col-sm-12 col-xs-12">
                            <div class="WarehousingImage">
                                <img src="../image/new-warehousing.jpg" class="img-responsive" width="95%"style="margin-left: 20px; margin-top:15px;">
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ImagenearFooter">
                    <div class="bottoom_img"id="Quote Request">
                        <div class="Contain">
                            <div class="TextnearFooter" style="font-family: 'Roboto Condensed', sans-serif" >
                                <p>YELLOW SEA LOGISTICS offers the supports for the foods transportation both
                                    <br>locally and globally such as Rail Freight, Intermodal, Air Freight, Ocean Freight,
                                    <br>Custom Broker and Warehousing /Distribution</p>
                                <button class="ButtonnearFooter">QUOTE REQUEST</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection