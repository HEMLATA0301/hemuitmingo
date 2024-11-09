@extends('layouts.app')
@section('body')
<style>
  #price{
    margin-top: 40px;
}
</style>
<!-- ============== Start Pricing section ========== -->
 <section class="container pricing py-5" id="pricing" >
    <div class="heading">
     <!-- <h4 class="pretitle" data-aos="fade-up" >
        pricing
      </h4>-->
      <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100" id="price">
        our pricing
      </h1>
      <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
        As a matter of fact the unification of the coherent software provides a strict control over
        The Accomplishment of Intended Estimation
      </p>
      <div class="row  gy-4 gx-4 ">
        <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
          <i class="bi bi-cash my-4"></i>
            <h1 class="my-2 title-2 ">-</h1>
            <h2 class="price">#</h2>
            <h3>Silver Package</h3>
            <ul class="my-4">
              <li class="my-1"><i class="bi bi-check2-circle"></i>Static page</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>5 page design</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>No admin control panel</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>100MB hosting space</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>No webmail ID</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>normal desing</li>
            </ul>
            <a href="#" class="btn my-4">start now</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="250">
          <div class="box">
          <i class="bi bi-cash my-4"></i>
            <h1 class="my-2 title-2 ">-</h1>
            <h2 class="price">#</h2>
            <h3>Gold Package</h3>
            <ul class="my-4">
              <li class="my-1"><i class="bi bi-check2-circle"></i>Dynamic page</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>10 page design</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Admin control panel</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>5 GB Hosting Space</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>2 Webmail ID</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>2 Responsive Design</li>
            </ul>
            <a href="#" class="btn my-4">start now</a>
          </div>
        </div>
        <div class="  col-md-6  col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">
          <div class="box" id="table3">
            <i class="bi bi-cash my-4"></i>
            <h1 class="my-2 title-2 ">-</h1>
            <h2 class="price">#</h2>
            <h3>Platinum Package</h3>
            <ul class="my-4">
              <li class="my-1"><i class="bi bi-check2-circle"></i>Dynamic page</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>20 page design</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Admin control panel</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Unlimited Hosting Space</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>5 Webmail ID</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Responsive Design</li>
            </ul>
            <a href="#" class="btn my-4">start now</a>
          </div>
        </div>
        <div class="  col-md-6  col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="350">
          <div class="box">
            <i class="bi bi-cash my-4"></i>
            <h1 class="my-2 title-2 ">-</h1>
            <h2 class="price">#</h2>
            <h3>Diamond Package</h3>
            <ul class="my-4">
              <li class="my-1"><i class="bi bi-check2-circle"></i>Dynamic page</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Unlimited page design</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Admin control panel</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Unlimited Hosting Space</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>10 Webmail ID</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Responsive Design</li>
              <li class="my-1"><i class="bi bi-check2-circle"></i>Basic SEO</li>
            </ul>
            <a href="#" class="btn my-4">start now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End Pricing section ========== -->
   @endsection