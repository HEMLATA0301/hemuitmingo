@extends('layouts.app')
@section('body')

  <!-- ======= srart Breadcrumbs ======= -->
  <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
      <ol>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>Client</li>
      </ol>
      <h2 class="title">our client</h2>
      <p class="col-lg-10 col-12">
        Although, final stages of the internal network gives a complete experience of
        The Parameter of Speculative Environment
      </p>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ============== Start services section ========== -->
  <section class="container services py-5" id="services">
    <div class="heading">
      <h4 class="pretitle" data-aos="fade-up">
        our client
      </h4>
      <!--<h1 class="title col-lg-10 col-12" data-aos="fade-up" data-aos-delay="100">
        What We’re Offering?
      </h1>
      <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
      At It Mingo Web Development, we provide a comprehensive suite of services 
       designed to meet all your web development needs. Our offerings are crafted to 
       ensure your business thrives in the digital landscape.
      </p>-->
    </div>
    <div class="row gy-4 gx-4 ">
      <!-- service number 1 -->
      @foreach($customers as $customer)
      <div class="col-md-6 col-12 col-lg-3 mx-auto ">
        <div class="box box-service box-hover" data-aos="fade-right" data-aos-delay="250">
          <div class="box-icon my-2">
            
          </div>
          <p>POS Software</p>
          
          
        </div>
      </div>
      @endforeach
      <!-- service number 2 -->
      <!--<div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-down" data-aos-delay="200">       
        <div class="box box-service box-hover">
          <div class="box-icon my-2">
          
          </div>
          <p>Job Portal 75000</p>
          
          
        </div>
      </div>-->
      <!-- service number 3 -->
      <!--<div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-left" data-aos-delay="250">      
        <div class="box box-service  box-hover">
          <div class="box-icon my-2">
          
          </div>
          <p>Truckbook Management System</p>
          
          
        </div>
      </div>-->
      <!-- service number 4 -->
      <!--<div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-right" data-aos-delay="350">       
        <div class="box box-service box-hover">
          <div class="box-icon my-2">
          
          </div>
          <p>Real Estate Marketplace</p>
          
          
        </div>
      </div>-->
      <!-- service number 5 -->
      <!--<div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">        
        <div class="box  box-service box-hover">
          <div class="box-icon my-2">
          
          </div>
          <p>Resturant Management System</p>
          
          
        </div>
      </div>-->
      <!-- service number 6 -->
      <!--<div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">        
        <div class="box  box-service box-hover">
          <div class="box-icon my-2">
          
          </div>
          <p>Smart Hospital Management System</p>
          
          
        </div>
      </div>-->
      <!-- service number 7 -->
      <!--<div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">        
        <div class="box  box-service box-hover">
          <div class="box-icon my-2">
          
          </div>
          <p>School Management System</p>
          
          
        </div>
      </div>-->
      <!-- service number 8 -->
      <!--<div class=" col-md-6  col-lg-3 mx-auto ">       
        <div class="box box-service box-hover" data-aos="fade-left" data-aos-delay="350">
          <div class="box-icon my-2">
          
          </div>
          <p>Smart Coureir Management System</p>
          
         
        </div>
      </div>-->
    </div>
  </section>
  <!-- ============== End services section ========== -->

  

@endsection