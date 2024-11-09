@extends('layouts.app')
@section('body')
  <!-- ============== Start Hero section ========== -->
  <section class="hero d-flex flex-column justify-content-center align-items-center mt-5 pt-5" id="hero">
    <div id="particles-js"></div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="hero-text col-12 col-lg-5">
          <div class="row">
            <div class="col-12 ">
              <h1 class="title col-12" data-aos="fade-up" data-aos-delay="150">Excellent IT <span
                  class="unique-text">solutions</span> for your success </h1>
            </div>
            <div class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="200">
              <p>
               At It Mingo Web Development, we provide cutting-edge IT solutions designed
               to propel your business forward. Our expertise in web development, design,
               and digital marketing ensures that your online presence is not only visually 
               appealing but also highly functional and optimized for success.
              </p>
            </div>
            <div class="col-10" data-aos="fade-up" data-aos-delay="250">
              <a href="#" class="btn" style="display:none;">join now</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-7 mx-md-auto text-center" data-aos="fade-left" data-aos-delay="100">
          <div class="hero-image">
            <div class="hero-img">
              <img class="img-fluid " alt="hero-img"
                src="{{ asset('web/images/hero/bodigmas_IT_solutions_company_illustrationvectorflat_designmini_942ad818-e3f4-47af-a5e8-78e030aff9c9-removebg.png') }}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End Hero section ========== -->

  <!-- ============== Start services section ========== -->
  <section class="container services py-5" id="services">
    <div class="heading">
      <h4 class="pretitle" data-aos="fade-up">
        our services
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
      <!-- service number 1 -->
      <div class="col-md-6 col-12 col-lg-4 mx-auto ">
        <div class="box box-service box-hover" data-aos="fade-right" data-aos-delay="250">
          <div class="box-icon my-2">
            <i class="bi bi-code-slash"></i>
          </div>
          <h2 class="title-2 my-2 ">web developement</h2>
          <p>At It Mingo Web Development, we specialize in creating bespoke 
            websites that are tailored to meet the unique needs of your business. 
          </p>
          <a href="{{ route('servicepage') }}" class="my-2 learn-more">learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class=" col-md-6 col-lg-4 mx-auto" data-aos="fade-down" data-aos-delay="200">
        <!-- service number 2 -->
        <div class="box box-service box-hover">
          <div class="box-icon my-2">
            <i class="bi bi-megaphone-fill"></i>
          </div>
          <h2 class="title-2 my-2 ">digital marketing</h2>
          <p>
            At It Mingo, we provide comprehensive digital marketing services 
            designed to elevate your brand and drive business growth. 
          </p>
          <a href="{{ route('servicepage') }}" class="my-2 learn-more">learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-left" data-aos-delay="250">
        <!-- service number 3 -->
        <div class="box box-service  box-hover">
          <div class="box-icon my-2">
            <i class="bi bi-search"></i>
          </div>
          <h2 class="title-2 my-2 ">SEO Services</h2>
          <p>
            At It Mingo, our expert SEO services are designed to enhance your
            website’s visibility, drive organic traffic, and improve your search engine rankings.
          </p>
          <a href="{{ route('servicepage') }}" class="my-2 learn-more">learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class=" col-md-6 col-lg-4 mx-auto" data-aos="fade-right" data-aos-delay="350">
        <!-- service number 4 -->
        <div class="box box-service box-hover">
          <div class="box-icon my-2">
            <i class="bi bi-bug-fill"></i>
          </div>
          <h2 class="title-2 my-2 ">cyber security</h2>
          <p>
            At It Mingo, we offer comprehensive cyber security services 
            to safeguard your business from online threats.
          </p>
          <a href="{{ route('servicepage') }}" class="my-2 learn-more">learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class=" col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="300">
        <!-- service number 5 -->
        <div class="box  box-service box-hover">
          <div class="box-icon my-2">
            <i class="bi bi-palette-fill"></i>
          </div>
          <h2 class="title-2 my-2 ">graphic design</h2>
          <p>
            At It Mingo, we offer top-notch graphic design services that bring your brand to life. 
          </p>
          <a href="{{ route('servicepage') }}" class="my-2 learn-more">learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class=" col-md-6  col-lg-4 mx-auto ">
        <!-- service number 6 -->
        <div class="box box-service box-hover" data-aos="fade-left" data-aos-delay="350">
          <div class="box-icon my-2">
            <i class="bi bi-android2"></i>
          </div>
          <h2 class="title-2 my-2 ">apps developement</h2>
          <p>
            At It Mingo, we specialize in developing custom mobile applications that drive business success.
          </p>
          <a href="{{ route('servicepage') }}" class="my-2 learn-more">learn more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End services section ========== -->

  <!-- ============== Start About section ========== -->
  <section class="about py-5 mt-5" id="about">
    <div class="container">
      <div class="row mt-5 justify-content-center align-items-center">
        <div class="col-12 col-lg-6">
          <h4 class="pretitle" data-aos="fade-up" data-aos-delay="200">
            about us
          </h4>
          <h1 class="title col-12" data-aos="fade-up" data-aos-delay="250">
          Welcome to IT Mingo!
          </h1>
          <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="300">
           At IT Mingo, we are passionate about leveraging techno/y to drive
           innovation and create value for our clients. Founded on the principles Of
           excellence and integrity, we specialize in delivering cutting-edge software 
           solutions that empower businesses to reach new heights.
          </p>
          <a href="#" class="btn" data-aos="fade-up" data-aos-delay="350" style="display:none;">join now</a>
        </div>
        <!-- image -->
        <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
          <img src="{{('web/images/about/1.png')}}" alt="about-img">
        </div>
      </div>
      <div class="row mt-5 py-4 justify-content-center align-items-center">
        <!-- image -->
        <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          <img src="{{('web/images/about/2.png')}}" alt="about-img">
        </div>
        <div class="col-12 col-lg-6">
          <h1 class="title col-12" data-aos="fade-up" data-aos-delay="200">
            We Deal With The Aspects Of Professional <span class="unique-text">IT Services</span>
          </h1>
          <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="250">
            Although, final stages of the internal network gives a complete experience of
            The Parameter of Speculative Environment
          </p>
          <div class="row gx-2 gy-2 col-12">
            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
              <div class="box box-hover">
                <i class="bi bi-map-fill"></i>
                <h5 class="mx-4 title-2 fw-bold">Worldwide Services</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="350">
              <div class="box box-hover">
                <i class="bi bi-headset"></i>
                <h5 class="mx-4 title-2 fw-bold">Support 24h*7</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
              <div class="box box-hover">
                <i class="bi bi-controller"></i>
                <h5 class="mx-4 title-2  fw-bold">Easy To Reach</h5>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="450">
              <div class="box box-hover">
                <i class="bi bi-star-fill"></i>
                <h5 class="mx-4 title-2 fw-bold">First On Field</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5 py-4 justify-content-center align-items-center">
        <div class="col-12 col-lg-6">
          <h1 class="title col-12" data-aos="fade-up" data-aos-delay="200">
            We Are Here To IT Solution With 5 Years Of <span class="unique-text">Experience</span>
          </h1>
          <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="250">
            Although, final stages of the internal network gives a complete experience of
            The Parameter of Speculative Environment
          </p>
          <ul class="col-12 bars">
            <li class="py-3" data-aos="fade-up" data-aos-delay="300">
              <div class="justify-content-between d-flex">
                <h5>App Development</h5>
                <h6>70%</h6>
              </div>
              <div class="progress-bar">
                <div class="progress-bar-fill progress-bar-fill-1 "></div>
              </div>
            </li>
            <li class="py-3" data-aos="fade-up" data-aos-delay="350">
              <div class="justify-content-between d-flex">
                <h5>UI/UX Design</h5>
                <h6>50%</h6>
              </div>
              <div class="progress-bar">
                <div class="progress-bar-fill progress-bar-fill-2 "></div>
              </div>
            </li>
            <li class="py-3" data-aos="fade-up" data-aos-delay="400">
              <div class="justify-content-between d-flex">
                <h5>Web Development</h5>
                <h6>65%</h6>
              </div>
              <div class="progress-bar">
                <div class="progress-bar-fill progress-bar-fill-3 "></div>
              </div>
            </li>
          </ul>
        </div>
        <!-- image -->
        <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
          <img src="{{('web/images/about/3.png')}}" alt="about-img">
        </div>
      </div>

    </div>
  </section>
  <!-- ============== End About section ========== -->

  <!-- ============== Start numbers section ========== -->
  <section class="counter-up my-5" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-12 mt-5 mt-lg-0" data-aos="fade-right" data-aos-delay="200">
          <i class="ri-discuss-line icon"></i>
          <h1 class="counter">+80</h1>
          <h2 class="title-2">happy clients</h2>
        </div>
        <div class="col-lg-3 col-12 mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="250">
          <i class="ri-discuss-line icon"></i>
          <h1 class="counter">+20</h1>
          <h2 class="title-2">hard worker</h2>
        </div>
        <div class="col-lg-3 col-12 mt-5 mt-lg-0" data-aos="fade-down" data-aos-delay="250">
          <i class="ri-discuss-line icon"></i>
          <h1 class="counter">+120</h1>
          <h2 class="title-2">complete project</h2>
        </div>
        <div class="col-lg-3 col-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
          <i class="ri-discuss-line icon"></i>
          <div class="counter">+5</div>
          <div class="title-2">Years Of Exprience</div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End numbers section ========== -->

  <!-- ============== Start Why us section ========== -->
  <section class="container why-choose-us py-5">
    <div class="heading">
      <h4 class="pretitle" data-aos="fade-up">
        why choose us
      </h4>
      <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
        why our clients choose us
      </h1>
      <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
       Our team consists of seasoned professionals with a passion for technology
       and a commitment to delivering the best results.
      </p>
    </div>
    <div class="row  gy-4 gx-4 ">
      <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-right" data-aos-delay="250">
        <div class="box">
          <h1 class="my-4">01.</h1>
          <h2 class="title-2 my-2 ">Latest Technologies</h2>
          <p>
            At It Mingo, we harness the latest technologies to deliver 
            innovative and effective solutions for your business. 
          </p>
        </div>
      </div>
      <div class="col-md-6  col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
          <h1 class="my-4">02.</h1>
          <h2 class="title-2 my-2 ">Unique Solutions</h2>
          <p>
            At It Mingo, we understand that every business is unique. 
            That's why we offer customized solutions designed to meet 
            your specific needs and challenges. 
          </p>
        </div>
      </div>
      <div class="col-md-6  col-lg-4 mx-auto" data-aos="fade-left" data-aos-delay="250">
        <div class="box">
          <h1 class="my-4">03.</h1>
          <h2 class="title-2 my-2 ">Powerful Strategies</h2>
          <p>
            At It Mingo, we develop powerful strategies that propel your business forward.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End Why us section ========== -->

  <!-- ============== start team section ========== -->
  <div class="container team">
    <div class="heading">
      <h4 class="pretitle" data-aos="fade-up">
        team
      </h4>
      <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
        our team
      </h1>
      <!-- <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
        As a matter of fact the unification of the coherent software provides a strict control over
        The Accomplishment of Intended Estimation
      </p> -->
    </div>
    <div class="row gy-4 gx-4 ">
      <div class="col-lg-3 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="200">
        <div class="box">
          <div class="team-img">
            <img src="images/team/team-1.jpg" alt="team-img"style="display:none;">
          </div>
          <h3 class="my-2 title-2 ">Mr. Amit Jaiswal</h3>
          <h6>Director and Co-founder</h6>
          <div class="social-icons d-flex">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class=" col-lg-3 col-md-6 col-12 mx-auto" data-aos="fade-up" data-aos-delay="250">
        <div class="box">
          <div class="team-img">
            <img src="images/team/team-2.jpg" alt="team-img"style="display:none;">
          </div>
          <h3 class="my-2 title-2 ">Mr. Kunal Soni</h3>
          <h6>Director and Co-founder</h6>
          <div class="social-icons d-flex">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class=" col-lg-3 col-md-6 col-12 mx-auto" data-aos="fade-down" data-aos-delay="300">
        <div class="box">
          <div class="team-img">
            <img src="images/team/team-3.jpg" alt="team-img"style="display:none;">
          </div>
          <h3 class="my-2 title-2 ">Mr. Tarachand Patel</h3>
          <h6>Director and Co-Founder</h6>
          <div class="social-icons d-flex">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class=" col-lg-3 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="200">
        <div class="box">
          <div class="team-img">
            <img src="images/team/team-4.jpg" alt="team-img"style="display:none;">
          </div>
          <h3 class="my-2 title-2 ">Mr. Daneshwar Sahu</h3>
          <h6>Software Engineer</h6>
          <div class="social-icons d-flex">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class=" col-lg-3 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="200">
        <div class="box">
          <div class="team-img">
            <img src="images/team/team-4.jpg" alt="team-img"style="display:none;">
          </div>
          <h3 class="my-2 title-2 ">Mr. Kamlesh Patel</h3>
          <h6>Software Engineer</h6>
          <div class="social-icons d-flex">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============== end team section ========== -->

  <!-- ============== Start Blog section ========== 
  <section class="container blog py-5" id="blog">
    <div class="heading">
      <h4 class="pretitle" data-aos="fade-up">
        blog
      </h4>
      <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
        our blog
      </h1>
      <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
        As a matter of fact the unification of the coherent software provides a strict control over
        The Accomplishment of Intended Estimation
      </p>
    </div>

    <div class="row  gy-4 gx-4 ">
      <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="250">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/1.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/05/2023</h3>
              <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
            </div>
            <h1 class="title-2">
              how to learn javascript easily with this method
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-up" data-aos-delay="200">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/2.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/03/2023</h3>
              <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
            </div>
            <h1 class="title-2">
              why you should learn this new javascript framework
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="250">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/3.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>20/04/2023</h3>
              <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>marketing</h3>
            </div>
            <h1 class="title-2">
              What is digital marketing and why is important ?
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
   ============== End Blog section ========== -->

  

  <!-- ============== Start contact section ========== -->
  <section class="container contact py-5" id="contact">
    <div class="heading ">
      <h4 class="pretitle" data-aos="fade-up">
        contact
      </h4>
      <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
        contact us for Any Questions
      </h1>
      <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
       Ready to take your online presence to the next level? Contact us today to 
       discuss your project and discover how Mingo Web Development can help your 
       business thrive in the digital world.
      </p>
    </div>
    <div class="row  gx-4 ">
      <div class="col-12 col-lg-6 gy-3">
        <h2 class="title-2 " data-aos="fade-right" data-aos-delay="200">
          contact info :
        </h2>
        <div class="info d-flex my-4 " data-aos="fade-right" data-aos-delay="250">
          <h5 style="text-transform: lowercase;"><i class="bi bi-envelope-fill mx-4"></i> admin@itmingo.com</h5>
        </div>
        <div class="info d-flex my-4 " data-aos="fade-up" data-aos-delay="300">
          <h5><i class="bi bi-phone-fill mx-4"></i>+91 78129 91993 </h5>
        </div>
        <div class="info d-flex my-4 " data-aos="fade-up" data-aos-delay="350">
          <h5><i class="bi bi-geo-alt-fill mx-4"></i>IT Mingo, 2nd Floor in Front of kamakhya</h5>
        </div>
        <div class="info d-flex my-4 " data-aos="fade-up" data-aos-delay="400">
          <h5><i class="bi bi-instagram mx-4"></i>IT Mingo LLP</h5>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <!--Form To have user messages-->
        <form class="main-form" id="contact-us-form" action="{{ route('enquiry.store') }}" method="POST">
          @csrf
          <div class="col-12">
            <div class="row g-3 mb-1">
              <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="200">
                <input placeholder="name" type="text" id="name" name="name" required class="text-input" required>
              </div>
              <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="200">
                <input placeholder="subject" type="text" id="subject" name="subject" required class="text-input" required>
              </div>
            </div>
          </div>
          <div class="col-12" data-aos="fade-up" data-aos-delay="250">
            <input placeholder="email" type="email" id="email" name="email" required class="text-input my-2" required>
          </div>
          <div class="col-12" data-aos="fade-up" data-aos-delay="300">
            <textarea placeholder="message" class="text-input my-2" rows="7" cols="30" id="message" name="message"
              required></textarea>
          </div>
          <input type="hidden" name="ip" value="{{ request()->ip() }}">
          <div class="col-12" data-aos="fade-up" data-aos-delay="350">
            <button type="submit" value="Submit" class="btn">send now</button>
          </div>
        </form>
      </div>
    </div>
    <div>
        <iframe class="contact-map" data-aos="fade-up" data-aos-delay="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.0124805494183!2d81.60051627471984!3d21.23135368079041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x69e8a5e415dc30f5%3A0x6ffd726076928b21!2sIT%20MINGO!5e0!3m2!1sen!2sin!4v1719493388787!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>    
    </section>
  <!-- ============== end contact section ========== -->

@endsection
