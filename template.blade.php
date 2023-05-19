<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL('css/style.css')}}">

</head>
<body>
<div class="navbar-container">
<div class="web-logo-image"> <img src="{{URL('image/download.png')}}" alt="logo" id="web-home-logo"> 
<span>infix</span>
</div> 
<!-- <div style="background-image: url(); background-size: ;"></div> -->
<!-- web-navbar-menu -->
<div class="web-nabar-menu">
<ul>
    <li><a href="./design-gallery">design gallery</a></li>
    <li><a href="./modular-kitchen">modular kitchen</a></li>
    <li><a href="./Warbrobe ">warbrobe</a></li>
    <li><a href="./view">view</a></li>
    <li><a href="./delete">delete</a></li>
    <li><a href="">bathroom</a></li>
    
</ul>
<div id="web-freeEstimate-btn"><a href="#"><button>get free estimate</button></a></div>

</div>
<!-- nav-nenu -->

</div>    
<div class="web-navbar-subHeader">
    <div class="web-subheader-left-container">
        <ul>
            <li><a href="">partner with infix</a></li>
            <li><a href="">join us</a></li>
            <li><a href="">cities</a></li>
        </ul>
    </div>
    <div class="web-subheader-right-container">
<ul>
    <li><a href="">customer support</a></li>
    <li><a href="">visit us</a></li>
    <li><a href="">login/register</a></li>
</ul>
    </div>
</div>
<!-- nav-bar -->

<!-- web-banner-slider -->
<div class="web-banner-slider-image">
@section('slider')

@show
</div>
<!-- third section -->
<div>  
@section('serviceContainer')

@show
<!-- sider-service-container.
 -->
@section('serviceSlider')
@show


</div>

<!-- interiors slider project-slider section -->
@section('interiorSliserProjectSestion')

@show

<!-- offer web conatiner  -->

@section('webOffersection')

@show

@section('livingRoomsection')
@show

<!-- why nifix section -->
@section('animatContainer')

@show

<!-- image grid -->
@section('footer')

@show
<script src="{{Url('js/app.js')}}"></script>

@section('todoView')

@show
</div>
</body>
</html>