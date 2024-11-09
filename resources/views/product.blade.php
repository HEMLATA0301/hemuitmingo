@extends('layouts.app')
@section('body')

  <!-- ======= srart Breadcrumbs ======= -->
  <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
      <ol>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>Product</li>
      </ol>
      <h2 class="title">our product</h2>
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
        our product
      </h4>
      <h1 class="title col-lg-10 col-12" data-aos="fade-up" data-aos-delay="100">
        What We’re Offering?
      </h1>
      <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
      At It Mingo Web Development, we provide a comprehensive suite of services 
       designed to meet all your web development needs. Our offerings are crafted to 
       ensure your business thrives in the digital landscape.
      </p>
    </div>
    <div class="row gy-4 gx-4 ">

    @foreach($products as $product) 
      <!-- service number 1 -->
      <div class="col-md-6 col-12 col-lg-3 mx-auto ">
        <div class="box box-service box-hover" data-aos="fade-right" data-aos-delay="250">
          <div class="box-icon my-2">
            <img src="{{asset('image/'.$product->image)}}" alt="Product Image" loading="lazy">
          </div>
          <h5>{{ $product->title }}</h5>
          <p>{{ $product->short_description }}</p>
          
        </div>
      </div>
      @endforeach

      <!-- service number 3 -->
      <!-- <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-left" data-aos-delay="250">      
        <div class="box box-service  box-hover">
          <div class="box-icon my-2">
          <img src="{{asset('assets/admin/images/c.jpeg')}}" alt="">
          </div>
          <p>Truckbook Management System</p>
          
          
        </div>
      </div> -->
      <!-- service number 4 -->
      <!-- <div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-right" data-aos-delay="350">       
        <div class="box box-service box-hover">
          <div class="box-icon my-2">
          <img src="{{asset('assets/admin/images/d.jpeg')}}" alt="">
          </div>
          <p>Real Estate Marketplace</p>
          
          
        </div>
      </div> -->
      <!-- service number 5 -->
      <!-- <div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">        
        <div class="box  box-service box-hover">
          <div class="box-icon my-2">
          <img src="{{asset('assets/admin/images/e.jpeg')}}" alt="">
          </div>
          <p>Resturant Management System</p>
          
          
        </div>
      </div> -->
      <!-- service number 6 -->
      <!-- <div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">        
        <div class="box  box-service box-hover">
          <div class="box-icon my-2">
          <img src="{{asset('assets/admin/images/f.jpeg')}}" alt="">
          </div>
          <p>Smart Hospital Management System</p>
          
          
        </div>
      </div> -->
      <!-- service number 7 -->
      <!-- <div class=" col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">        
        <div class="box  box-service box-hover">
          <div class="box-icon my-2">
          <img src="{{asset('assets/admin/images/g.jpeg')}}" alt="">
          </div>
          <p>School Management System</p>
          
          
        </div>
      </div> -->
      <!-- service number 8 -->
      <!-- <div class=" col-md-6  col-lg-3 mx-auto ">       
        <div class="box box-service box-hover" data-aos="fade-left" data-aos-delay="350">
          <div class="box-icon my-2">
          <img src="{{asset('assets/admin/images/h.jpeg')}}" alt="">
          </div>
          <p>Smart Coureir Management System</p>
          
         
        </div>
      </div> -->
    </div>
  </section>
  <!-- ============== End services section ========== -->

  

@endsection