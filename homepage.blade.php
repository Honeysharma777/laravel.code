@extends('template')
@section('title','Infix Interior')

@section('slider')
<!-- <div class="slideshow-container"> -->
  <div class="web-banner-slider">

<div class="mySlides fade">
  <img src="{{url('image/a.jpg')}}" id="size-img-slider">
</div>

<div class="mySlides fade">
  <img src="{{url('image/b.jpg')}}"id="size-img-slider">
</div>

<div class="mySlides fade">
  <img src="{{url('image/c.jpg')}}"id="size-img-slider">

</div>
<div class="web-home-form">
  <form action="todo_submit" method="post" >
  @csrf
    <label for="form-title"><h1>Meet a designer</h1></label>
<input type="text" name="uname" placeholder="Enter your name">
<input type="text" name="uemail" placeholder="Enter your email">
<input type="tel" name="uphone" placeholder="Enter your mobile number">
<input type="text" name="upin" placeholder="Enter your current residence pincode">
<input type="submit" name="submit" value="BOOK FREE DESIGN SESSION">
  </form>
  <p>By submitting this form, you agree to the <a href="">privacy policy</a> and  <a href="">terms of use</a></p>
</div>
<!-- </div> -->
@endsection

@section('serviceContainer')
<div class="service-web-conatiner-info">

<div class="service-container-text"> 
<span><h2>End-to-end interior service</h2> </span>
<p>HomeLane, a leading provider of home interior designs in Bengaluru, offers luxury interior design services
  for homeowners who want to create opulent and sophisticated living spaces. With a team of highly skilled and experienced interior designers in Bengaluru,
  HomeLane creates personalized design plans that cater to each homeowner’s unique style and preferences</p>

</div>
@endsection

<!-- serviceslider -->
@section('serviceSlider')
<div class="slider-container">
  <div class="slider">
    <a href=""><img src="{{URL('image/model.JFIF')}}" alt=""><div id="logo1">modular kitchen</div></a>
    <a href=""><img src="{{URL('image/download (1).png')}}" alt=""><div id="logo2">TV Unit</div></a>
    <a href=""><img src="{{URL('image/downloa.JFIF')}}" alt=""><div id="logo3">crockery units</div></a>
    <a href=""><img src="{{URL('image/imgbat.JFIF')}}" alt=""><div id="logo4">bathroom</div></a>
    <a href=""><img src="{{URL('image/download (2).JFIF')}}" alt=""><div id="logo5">lights</div></a>
    <a href=""><img src="{{URL('image/images.png')}}" alt=""><div id="logo6">funiture</div></a>
    <a href=""><img src="{{URL('image/paint.JFIF')}}" alt=""><div id="logo7">wall paint</div></a>
    <a href=""><img src="{{URL('image/storag.png')}}" alt=""><div id="logo8">foyer designs</div></a>
</div>
<button class="prev">&#8249;</button>
<button class="next">&#8250;</button>
</div>
<hr>
@endsection

<!-- interiorSliserProjectSestion -->
@section('interiorSliserProjectSestion')
<div class="web-interior-slider-section">
  <span><h1>Trending Kitchen designs</h1></span>
<div class="web-interior-slider1-conatiner">
  <div class="slidersection">
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/photo-1.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/photo-15.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/photo-160.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/photo-1617.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/premium_photo-1.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/premium_photo-16.avif')}}" alt=""></a></div> 
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/istockphoto.jpg')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/istockphoto-1.jpg')}}" alt=""></a></div>

</div>
<button class="prevw">&#8249;</button>
<button class="nextt">&#8250;</button>



</div>
<!-- 2nd slider  -->
<div>
<span><h1>
Trending Wardrobe designs </h1></span>
<div class="web-interior-slider1-conatiner">
  <div class="slidersection">
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/photo-1.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/photo-15.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/photo-160.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/photo-1617.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/premium_photo-1.avif')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/premium_photo-16.avif')}}" alt=""></a></div> 
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/istockphoto.jpg')}}" alt=""></a></div>
 <div class="interior-slier-img"><a href=""><img src="{{URL('image/istockphoto-1.jpg')}}" alt=""></a></div>

</div>
<button class="prevw">&#8249;</button>
<button class="nextt">&#8250;</button>



</div>

</div> 

@endsection
<!--  -->
@section('webOffersection')
<hr>
<div class="offer-web-section">
<ul>
  <li><h1>What Infix offers ?</h1></li>
  <li><h2>home delivered </h2> <p>3304</p></li>
  <li> <h2>infix  Designers</h2> <p>124</p></li>
  <li><h2>infix Stores</h2> <p>10</p></li>
</ul>
</div>
<hr>

@endsection

@section('livingRoomsection')
<div class="livingroom-section-text"><h1>Trending Living room designs</h1></div>
<div class="living-room-container">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="">
      <img src="{{url('image/living-1.webp')}}" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Uraban sunshine living room designe</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="{{URL('image/living-2.webp')}}" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">mediterranean living room design</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="{{URL('image/living-3.webp')}}" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">artsy opulence living room design</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{URL('image/living-4.webp')}}" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">modern oasis living room design</div>
  </div>
</div>

<!-- 2nd section -->
<div class="living-room-container">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="">
      <img src="{{url('image/living-1.webp')}}" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">retro revival living room design</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="{{URL('image/living-2.webp')}}" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">pastel paradise living room designe</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="{{URL('image/living-3.webp')}}" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">bohemian jungle living room designer</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{URL('image/living-4.webp')}}" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">teal treasures living room designer</div>
  </div>
</div>
</div>
</div>


@endsection

<!-- why infix section -->
@section('animatContainer')
<div class="animat-web-conatiner">
  <span><h1>why infix?</h1></span>
  <ul>
    <li><a href=""><img src="{{URL('image/images (2).png')}}" alt=""></a></li>
    <li><a href=""><img src="{{URL('image/images (3).png')}}" alt=""></a></li>
    <li><a href=""><img src="{{URL('image/homes_completed.svg')}}" alt=""></a></li>
    <li><a href=""><img src="{{URL('image/installation_days.svg')}}" alt=""></a></li>

  </ul>

<hr>
</div>
@endsection

@section('footer')

@endsection
