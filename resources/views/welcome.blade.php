<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1.0, user-scalable=no">


    <title itemprop='name'>YSL_The Slash</title>
    <link href="http://yellowlg.demo.flexitech.io/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <link href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('../css/second.css')}}" type="text/css" rel="stylesheet">
    {{--<link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet"/>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/jquery-3.2.1.js')}}"></script>



</head>
<body>
<div class="HeaderNav">
    <nav class="navbar navbar-fixed-top">
        <div class="navbar-header navbar-default" >
            <button type="button" class="navbar-toggle hidden-md-up"
                    data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarResponsive"
                    aria-expanded="true">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class=" navbar-brand flex-1">
                <img src="image/yellow-sea-logo.png"  style="margin-top: -17px;" alt="logo" class="main_logo">
            </div>
        </div>
        <div class="collapse navbar-collapse navbar-right " id="myNavbar" style="background-color:  #ffcc00;" >
            <ul class="nav navbar-nav">
                <li id="Listitem" class="hidden-xs ">
                    <a href="#"></a>
                </li>
                <li class="nav-item" >
                    <a class="navbar-link {{  Html::clever_link('Home')  }}"  href="{{url('/Home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link" href="#b">ABOUT US</a>
                </li>

                <li class="nav-item">
                    <a class="navbar-link" href="#p">PRODUCT & SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link {{  Html::clever_link('News')  }}" href="{{url('/News')}}"> NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link {{  Html::clever_link('Request')  }}" href="{{url('/Request')}}">QUOTE REQUEST</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link {{  Html::clever_link('contactus')  }}"  href="{{url('/contactus')}}" href="/contactus">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

@yield('content')

<div class="Footer">
    <p class="text-center text-uppercase"> FOLLOW US</p>
    <div class="Social_Item">
        <a  href="#" class="fa fa-facebook-square" style="font-size: 35px"></a>
        <a href="#" class="fa fa-twitter" style="font-size: 35px"></a>
        <a href="#" class="fa fa-instagram" style="font-size: 35px"></a>
        <a href="#" class="fa fa-google-Plus" style="font-size: 35px"></a>
        <a href="#" class="fa fa-Youtube-play" style="font-size: 35px"></a>

    </div>
</div>

<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md visible-sm visible-xs text-center">
    <div class="End_footer">
        <div class="NavbarFooter" style=" font-family: Roboto Condensed,Serif;font-size: 18px;margin: auto">
            <ul>
                <li><a href="#">About US</a></li>
                <li><a href="#">Products & Service</a></li>
                <li><a href="#">Quote Request</a></li>
                <li><a href="#">Contact US</a></li>
            </ul>
        </div>
        <hr style="width: 20%;background-color: #f9c803 ">
        <div class="copyRight" style=" font-family: Roboto Condensed,Serif;font-size: 18px">
            <p>&copy; 2017 Yellow Sea Logistic. All right reserved.Designed by <strong>Flexitech</strong></p>
        </div>
    </div>
</div>

</body>
</html>