@include('layouts.header')
{{-- Css --}}
<style>
 .product {
            display: none;
        }

        .show {
            display: block;
        }
    .sel{
      text-decoration:underline;
    }
    .line1{
        height:2px;
        display:none;
        width:240px;
        background-color:red;
        position:relative;
        bottom:53px;
        left:220px;
           }
    .line{
    height:2px;
        display:none;
        width:170px;
        background-color:red;
        position:relative;
        bottom:53px;
        right:50px;
        left:10px;
    }
      .line2{
    height:2px;
        display:none;
        width:180px;
        background-color:red;
        position:relative;
        bottom:53px;
        right:50px;
        left:480px;
    }
    .card{
          transition: box-shadow 0.3s ease;
    }
    .card:hover{
  box-shadow: 0 0 5px 5px rgba(4, 84, 6, 0.5);
    }
     .line3{
    height:2px;
        display:none;
        width:200px;
        background-color:red;
        position:relative;
        bottom:53px;
        right:50px;
        left:690px;
    }
    .clr{
        width:100%;
        height:300px;
          background: #33CCCC; /* Fallback */
      animation: color 9s infinite linear;
    }
    @keyframes color {
  0%   { background: #33CCCC; }
  20%  { background: #33CC36; }
  40%  { background: #B8CC33; }
  60%  { background: #FCCA00; }
  80%  { background: #33CC36; }
  100% { background: #33CCCC; }
}
body {

}

</style>
{{-- kitt Icons --}}
<script src="https://kit.fontawesome.com/6bdbd6157c.js" crossorigin="anonymous"></script>
 <!-- ======= Intro Section ======= -->


 <div class="intro intro-carousel swiper position-relative">
  <div class="swiper-wrapper">
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(img/banner-1.png)"
          id="ho">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
              <div class="table-cell">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8">
                              <div class="intro-body">
                                  <p class="intro-title-top">Punjab,Rawalpindi
                                      <br> 46000
                                  </p>
                                  <h1 class="intro-title mb-4 ">
                                      <span class="color-b">Id-2019 </span> Satellite Town
                                      <br> Furnished
                                  </h1>
                                  <p class="intro-subtitle intro-price">
                                      <a href="#"><span class="price-a">rent | Rs 25000-40000</span></a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(img/banner-2.png)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
              <div class="table-cell">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8">
                              <div class="intro-body">
                                  <p class="intro-title-top">Punjab, Rawalpindi
                                      <br> 44000
                                  </p>
                                  <h1 class="intro-title mb-4">
                                      <span class="color-b">ID-2020 </span> Furnished
                                      <br>Fifth Road
                                  </h1>
                                  <p class="intro-subtitle intro-price">
                                      <a href="#"><span class="price-a">rent | Rs 12000-40000</span></a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(img/c1.jpg)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
              <div class="table-cell">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8">
                              <div class="intro-body">
                                  <p class="intro-title-top">Punjab, Islamabad
                                      <br> 44900
                                  </p>
                                  <h1 class="intro-title mb-4">
                                      <span class="color-b">Id-7890 </span> Furnished
                                      <br> Blue Area
                                  </h1>
                                  <p class="intro-subtitle intro-price">
                                      <a href="#"><span class="price-a">rent | Rs 12.000</span></a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(img/Astate2.jpg)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
              <div class="table-cell">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8">
                              <div class="intro-body">
                                  <p class="intro-title-top">Doral, Florida
                                      <br> 78345
                                  </p>
                                  <h1 class="intro-title mb-4">
                                      <span class="color-b">204 </span> Islamabad <br>Expressway Flats, Penthouse
                                  </h1>
                                  <p class="intro-subtitle intro-price">
                                      <a href="#"><span class="price-a">rent | Rs 12.000</span></a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(img/c3.jpg)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
              <div class="table-cell">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8">
                              <div class="intro-body">
                                  <p class="intro-title-top">Doral, Florida
                                      <br> 78345
                                  </p>
                                  <h1 class="intro-title mb-4">
                                      <span class="color-b">204 </span> Alira
                                      <br> Roan Road One
                                  </h1>
                                  <p class="intro-subtitle intro-price">
                                      <a href="#"><span class="price-a">rent | Rs 12.000</span></a>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

{{-- Available Offices --}}
<div class="clr">
<p>...</p>
<h1 class="container my-5 fs-2">Flexible Workspace Designed  Around Your Needs</h1>
    <div class="filter-buttons my-5 container ">
        <button class="btn btn-light mx-2 fs-4 " id="btn" data-filter="category1">Office Spcae2</button>
        <button class="btn btn-light mx-2 fs-4 " id="btn1" data-filter="category2">Co-working Space</button>
        <button class="btn btn-light mx-2 fs-4 " id="btn2" data-filter="category3">Virtual Offices</button>
        <button class="btn btn-light mx-2 fs-4 " id="btn3" data-filter="category4">Meeting Offices</button>
    </div>
        <div  class="container d-flex">
        <div class="line" id="line"></div>
        <div class="line1" id="line1"></div>
        <div class="line2" id="line2"></div>
        <div class="line3" id="line3"></div>
    </div>
    </div>
    <div id="container" class="container">
        <div class="main" id="main">
         <h5 class="fs-6 text-success my-4"> Bring Teams Together</h5>
        <p class="fs-6 my-5">Our meeting rooms are the perfect setting for your next pitch, interview, workshop, or board meeting. They come with the latest technology, a friendly support team to ensure everything runs smoothly, and catering if you need it.</p>
           <p class="text-danger">Find Out More<i class="fa-solid mx-2 fa-arrow-right"></i></p>
        <div class="d-flex">
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body">
  <div class="fs-1">
<i class="fa-regular fa-calendar-check"></i>
  </div>
    <h3 class="card-title my-5">Private Offices</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Get a quote</strong></a>
      </div>

  </div>
</div>
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body">
    <div class="my-2 fs-1">
 <i class="fa-sharp fa-solid fa-people-group"></i>
  </div>
    <h3 class="card-title my-5">Office Membership</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
  <div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>
Private offices available by the day, or choose 5, 10 or unlimited days per month</li>
  <li>
On-demand, fully serviced and available at thousands of locations worldwide</li>
  <li>
For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Buy Now</strong></a>
      </div>
  </div>
</div>
     <div class="card mx-1" style="width: 25rem;">
  <div class="card-body">
    <div class="my-3 fs-1">
 <i class="fa-solid fa-calendar-days"></i>
  </div>
    <h3 class="card-title my-5">Day Offices</h3>
    <p class="card-text my-4">From PKR 7,900 per day</p>
   <div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>
Your very own space in a shared office—available by the hour, or the day</li>
  <li>
Includes everything you need to get to work, from WiFi to ergonomic furniture</li>
  <li>
For teams of all sizes
</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Book Now</strong></a>
      </div>
  </div>
</div>
</div>

</div>
 </div>
        <div class="product container" data-category="category1">
        <h5 class="fs-6 text-success my-4">Connect & Collaborate</h5>
        <p class="fs-6 my-5">Our coworking spaces are designed with collaboration in mind. They're a great place to connect with colleagues, clients and other like-minded businesses. Reserve a permanent desk in your favorite space, or simply drop in and hot desk at thousands of locations worldwide.

</p>
        <div class="my-2">
           <p class="text-danger">Find Out More<i class="fa-solid mx-2 fa-arrow-right"></i></p>
       </div>
         <div class="d-flex">
     <div class="card mx-2" style="width: 25rem;">
<div class="card-body">
  <div class="fs-1">
<i class="fa-regular fa-calendar-check"></i>
  </div>
    <h3 class="card-title my-5">Private Offices</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong> Get a quote</strong></a>
      </div>

  </div>
</div>
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body bg-body-tertiary rounded">
    <div class="fs-1">
 <i class="fa-sharp fa-solid fa-people-group"></i>
  </div>
    <h3 class="card-title my-5">Office Membership</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>
Private offices available by the day, or choose 5, 10 or unlimited days per month
</li>
  <li>

On-demand, fully serviced and available at thousands of locations worldwide</li>
  <li>Enjoy exclusive member discounts and benefits</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Buy Now</strong> </a>
      </div>
  </div>
</div>
     <div class="card mx-1" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
 <i class="fa-solid fa-calendar-days"></i>
  </div>
    <h3 class="card-title my-5">Day Offices</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>

Includes everything you need to get to work, from WiFi to ergonomic furniture</li>
  <li>
Make use of our breakout areas to meet others and collaborate</li>
  <li>
Available at thousands of locations worldwide</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Book Now</strong> </a>
      </div>
  </div>
</div>
</div>
        </div>
        <div class="product container" data-category="category2">
        <h5 class="fs-6 text-success my-4">Build Your Presence</h5>
        <p class="fs-6 my-5">Our virtual office services help you build a credible presence anywhere in the world, with a professional business address and phone number. They're fully supported by a range of additional services, like mail forwarding, call handling, meeting rooms, office space, and business lounge access. </p>
         <div class="my-2">
           <p class="text-danger">Find Out More<i class="fa-solid mx-2 fa-arrow-right"></i></p>
       </div>
       <div class="d-flex">
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
<i class="fa-solid fa-desktop"></i>
  </div>
    <h3 class="card-title my-5">Permanent Desk</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
  <div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>
Give your business the professional address it needs in a premier location</li>
  <li>
Use the address on your documents and have mail forwarded there</li>
  <li>
Available at thousands of locations worldwide</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Buy Now</strong></a>
      </div>
  </div>
</div>
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
 <i class="fa-solid fa-people-group"></i>
  </div>
    <h4 class="card-title my-5">Coworking Membership</h4>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
 <div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>
Everything included in our "Business Address" solution plus:</li>
  <li>
Access to our global business lounge network when you're on the move</li>
  <li>
Call handling services are also available</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Buy Now</strong></a>
      </div>
  </div>
</div>
     <div class="card mx-1" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
<i class="fa-regular fa-calendar-check"></i>
  </div>
    <h3 class="card-title my-5">Day Coworking</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
  <div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Get a quote</strong></a>
      </div>
  </div>
</div>
</div>
        </div>
        <div class="product container" data-category="category3">
        <h5 class="fs-6 text-success my-4"> Bring Teams Together</h5>
        <p class="fs-6 my-5">Our meeting rooms are the perfect setting for your next pitch, interview, workshop, or board meeting. They come with the latest technology, a friendly support team to ensure everything runs smoothly, and catering if you need it.</p>
                  <div class="my-2">
           <p class="text-danger">Find Out More<i class="fa-solid mx-2 fa-arrow-right"></i></p>
       </div>
         <div class="d-flex">
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
<i class="fa-solid fa-chart-simple"></i>
  </div>
    <h3 class="card-title my-5">Business Address</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Get a quote</strong></a>
      </div>
  </div>
</div>
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
<i class="fa-solid fa-warehouse"></i>
  </div>
    <h3 class="card-title my-5">Virtual Office</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
   <div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Get a quote</strong></a>
      </div>
  </div>
</div>
     <div class="card mx-1" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
  <i class="fa-solid fa-shop"></i>
  </div>
    <h3 class="card-title my-5">Virtual Office Plus</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Get a quote</strong></a>
      </div>
  </div>
</div>
</div>
        </div>
        <div class="product container" data-category="category4">
        <h5 class="fs-6 text-success my-4"> Bring Teams Together</h5>
        <p class="fs-6 my-5">Our meeting rooms are the perfect setting for your next pitch, interview, workshop, or board meeting. They come with the latest technology, a friendly support team to ensure everything runs smoothly, and catering if you need it.</p>
         <div class="my-5">

         </div>
                    <div class="my-2">
           <p class="text-danger">Find Out More<i class="fa-solid mx-2 fa-arrow-right"></i></p>
       </div>
          <div class="d-flex">
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
  <i class="fa-regular fa-handshake"></i>
  </div>
    <h3 class="card-title my-5">Meeting Room</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong> Get a quote</strong></a>
      </div>
  </div>
</div>
     <div class="card mx-2" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
<i class="fa-solid fa-house-crack"></i>
  </div>
    <h3 class="card-title my-5">Conference Room</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong> Get a quote</strong></a>
      </div>
  </div>
</div>
     <div class="card mx-1" style="width: 25rem;">
  <div class="card-body">
    <div class="fs-1">
<i class="fa-solid fa-person-shelter"></i>
  </div>
    <h3 class="card-title my-5">Training Room</h3>
    <p class="card-text my-4">From PKR 25,500 per person per month</p>
<div class="bg-success-subtle text-emphasis-danger">
  <ul class="my-5">
  <li>Fully furnished offices for individuals,<br> teams, or entire companies</li>
  <li>Customizable to match your brand with company<br> logos and color schemes</li>
  <li>For teams of all sizes</li>
  </ul>
    <a href="#" class="card-link mx-4 text-info"><strong>Get a quote</strong></a>
      </div>
  </div>
</div>
</div>
        </div>
    </div>
    {{-- fisrt --}}
<div class="container my-5">
<h2>Office space your way</h2>
<p class="fs-6">From a single desk to a whole building. The choice is yours.</p>
</div>
    <div class="container d-flex">
    <div class="card" style="width: 25rem; height:130px">
  <div class="card-body">
  <div class="d-flex">
<h2><i class="fa-solid fa-magnifying-glass"></i></h2>
    <h6 class="card-title mx-3 text-danger text-decoration-underline my-2">Our Solution</h6>
    </div>
<p class="fs-6 my-2">Broswes our full Range of Product and Services </p>
  </div>
</div>
<div class="card mx-4" style="width: 25rem; height:130px">
  <div class="card-body">
  <div class="d-flex">
<h2><i class="fa-solid fa-headphones"></i></h2>
    <h6 class="card-title mx-3 text-danger text-decoration-underline my-2">TalK To Us</h6>
    </div>
<p class="fs-6 my-2">Get Advice One of our Expert 24/7 </p>
  </div>
</div>
<div class="card mx-5" style="width: 25rem; height:130px">
  <div class="card-body">
  <div class="d-flex">
<h2><i class="fa-regular fa-calendar-minus"></i></h2>
    <h6 class="card-title mx-3 text-danger text-decoration-underline my-2">Book WorkSpace</h6>
    </div>
<p class="fs-6 my-2">Book Meeting Rooms and Day Offices Now</p>
  </div>
</div>
</div>
    </div>
    <div class="container d-flex my-5">
    <div class="card" style="width: 25rem; height:130px">
  <div class="card-body">
  <div class="d-flex">
<h2><i class="fa-regular fa-address-book"></i></h2>
    <h6 class="card-title mx-3 text-danger text-decoration-underline my-2">Setup Our Virtual Offices</h6>
    </div>
<p class="fs-6 my-2">Start Building a real Presnce Today </p>
  </div>
</div>
<div class="card mx-4" style="width: 25rem; height:130px">
  <div class="card-body">
  <div class="d-flex">
<h2><i class="fa-solid fa-people-carry-box"></i></h2>
    <h6 class="card-title mx-3 text-danger text-decoration-underline my-2">Buy A MemberShip</h6>
    </div>
<p class="fs-6 my-2">Access a thousend of Location on Demand </p>
  </div>
</div>
<div class="card mx-5" style="width: 25rem; height:130px">
  <div class="card-body">
  <div class="d-flex">
<h2><i class="fa-solid fa-mobile-screen-button"></i></h2>
    <h6 class="card-title mx-3 text-danger text-decoration-underline my-2">Exploer Your App</h6>
    </div>
<p class="fs-6 my-2">Download Our App and Started Today </p>
  </div>
</div>
</div>
    </div>
    <div class="container-fluid">
    <div class="card" style="height:400px">
  <div class="card-body my-5">
   <h2>Work better. Save bigger. 25% off*</h2>
      <p class="my-4">This May, We reduce the price of selected WorkSpace, So Book Now and Save more<br>TS&Cs apply, Partcipating Location Only</p>
      <p class="text-danger my-5" style="position:relative;top:100px">Apply Now <i class="fa-solid mx-1 fa-arrow-right"></i></p>
    <img src="img/meeting1.webp" style="height:370px; width:500px; position:relative; left:750px; bottom:280px"  alt="Property Image">  </div>
</div>
    </div>
@include('layouts.footer')

{{-- Javascript  --}}
<script>
        const buttons = document.querySelectorAll('.btn');
        const products = document.querySelectorAll('.product');
        let main = document.getElementById("main");

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const category = button.getAttribute('data-filter');

                // Hide all products
                products.forEach(product => {
                    product.classList.remove('show');
                    main.classList.add("product");
                });

                // Show products with matching category
                products.forEach(product => {
                    const productCategory = product.getAttribute('data-category');
                    if (productCategory === category) {
                        product.classList.add('show');
                    }
                });
            });
        });
        let btn = document.getElementById("btn");
        let btn1 = document.getElementById("btn1");
        let btn2 = document.getElementById("btn2");
        let btn3 = document.getElementById("btn3");
        let line=  document.getElementById("line");
        let line1= document.getElementById("line1");
        let line2= document.getElementById("line2");
        let line3= document.getElementById("line3");
     btn.onclick = function() {
        line.style.display="block";
        line1.style.display="none";
        line2.style.display="none";
        line3.style.display="none";
  };
     btn1.onclick = function() {
    line.style.display="none";
    line1.style.display="block";
    line2.style.display="none";
    line3.style.display="none";

  };
    btn2.onclick = function() {
     line.style.display="none";
    line1.style.display="none";
    line2.style.display="block";
    line3.style.display="none";

  };
    btn3.onclick = function() {
 line.style.display="none";
    line1.style.display="none";
    line2.style.display="none";
    line3.style.display="block";
  };
</script>
