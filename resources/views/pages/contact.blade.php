@extends('layout.app')
	@section('content')


		<!-- Page Breadcrumbs Start -->
  <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
    <div class="container"> 

      <h1>Contact Us</h1>
      <div class="breadcrumbs-description">
        Please go ahead if you want to know anything about us or our service. We will response you as soon as possible. 
      </div>
    </div>
  </div>
  <!-- Page Breadcrumbs End -->

  <!-- Main Body Content Start -->
  <main id="body-content">
<section>
  <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
    <h1 style="margin-top: 70px; margin-bottom: 0" class="heading-main">
      Find us here
    </h1>
  </div>
</section>
    <!-- Google Map Start -->
	<section class="map-bg">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7295.820403681863!2d90.38259166726353!3d23.892802744444598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c465526a2441%3A0xc024fdb974bb278f!2sRd%2023%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1576084537009!5m2!1sen!2sbd" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>    
    <!-- Google Map Start -->

    <!-- Contact Details Start -->
    <section class="wide-tb-100 pos-rel">
      <div class="container">
        <div class="contact-map-bg option">
          <img src="images/map-bg.png" alt="">
        </div>

        <div class="row">
          <div class="col-md-4">
            <h2 class="h2-md mb-4 fw-7 txt-blue">Our Address</h2>
            <!-- Contact Detail Left -->
            <div class="contact-detail-shadow no-shadow mb-5 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
              <h4>Bnagladesh</h4>
              <div class="d-flex align-items-start items">
                <i class="icofont-google-map"></i> <span>House:02(3rd floor), Road:23, Sector:10, Uttara, Dhaka - 1230</span>
              </div>
              <div class="d-flex align-items-start items">
                <i class="icofont-phone"></i> <span>01686968411<br>01919117000</span>
              </div>
              <div class="text-nowrap d-flex align-items-start items">
                <i class="icofont-email"></i> <a href="#">info@zexfashionbangladesh.com</a>
              </div>
            </div>
            <!-- Contact Detail Left -->
          </div>


          <div class="col-md-8 col-sm-12">
            <h2 class="h2-md mb-4 fw-7 txt-blue">Say Hello! Its Free</h2>
            <div class="">
          
              <div class="free-quote-form contact-page-option wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">                  
                  <form action="#" method="post" id="contactoption" novalidate="novalidate" class="rounded-field">
                      <div class="form-row mb-4">
                        <div class="col">
                          <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col">
                          <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-row mb-4">
                        <div class="col">
                          <select title="Please choose a package" required="" name="Transport_Package" id ="Transport_Package" class="custom-select" aria-required="true" aria-invalid="false">
                              <option value="">Transport Type</option>
                              <option value="Type 1">Type 1</option>
                              <option value="Type 2">Type 2</option>
                              <option value="Type 3">Type 3</option>
                              <option value="Type 4">Type 4</option>
                          </select>
                        </div>
                        <div class="col">
                          <select title="Please choose a package" required="" name="Freight_Package" id="Freight_Package" class="custom-select" aria-required="true" aria-invalid="false">
                              <option value="">Type of freight</option>
                              <option value="Type 1">Type 1</option>
                              <option value="Type 2">Type 2</option>
                              <option value="Type 3">Type 3</option>
                              <option value="Type 4">Type 4</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row mb-4">
                        <div class="col">
                          <textarea name="cment" rows="7" placeholder="Message" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-row text-center">

                          <button name="contactoption" id="contactoption" type="submit" class="form-btn mx-auto btn-theme bg-orange">Submit Now <i class="icofont-rounded-right"></i></button>
                      </div>
                  </form>                
              </div>
              
              </div>
          </div>
        </div>
      </div>        
    </section>
    <!-- Contact Details End -->   
  </main>


	@endsection