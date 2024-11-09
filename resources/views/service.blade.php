@extends('layouts.app')
@section('body')

  <!-- ======= srart Breadcrumbs ======= -->
  <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
      <ol>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>services</li>
      </ol>
      <h2 class="title">our services</h2>
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

  <!-- ============== Start FAQ section ========== -->
  <section class="container faq py-5">
    <div class="heading">
      <h4 class="pretitle" data-aos="fade-up">
        FAQ
      </h4>
      <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
        Frequently Asked Questions
      </h1>
      <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
        As a matter of fact the unification of the coherent software provides a strict control over
        The Accomplishment of Intended Estimation
      </p>
    </div>
    <div class="row justify-content-center align-items-center  gx-4 ">
      <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <img src="{{('web/images/faq/customer.png')}}" alt="faq">
      </div>
      <div class="col-12 col-lg-6  ">
        <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="250">
          <div class="box">
            <div class="d-flex w-100 justify-content-between">
              <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon1')" href="#answer1" role="button"
                aria-expanded="false">
                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                What does ITMingo do?
                      <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon1"></i>
                    </h4>
                  </a>
                </div>
                <p id="answer1" class="collapse">
                  ITMingo is a web development and digital marketing company that 
                  specializes in creating custom websites, optimizing digital presence, 
                  and providing IT consulting services.
                </p>
              </div>
            </div>
            <div class="col-12 my-4 " data-aos="fade-up" data-aos-delay="300">
              <div class="box">
                <div class="d-flex w-100 justify-content-between">
                  <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon2')" href="#answer2" role="button"
                    aria-expanded="false">
                    <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                      Where is ITMingo located?
                      <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon2"></i>
                    </h4>
                  </a>
                </div>
                <p id="answer2" class="collapse">
                  Our headquarters are located at IT Mingo, 2nd Floor in Front of kamakhya.
                </p>
              </div>
            </div>
            <div class="col-12 my-4 " data-aos="fade-up" data-aos-delay="350">
              <div class="box">
                <div class="d-flex w-100 justify-content-between">
                  <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon3')" href="#answer3" role="button"
                    aria-expanded="false">
                    <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                      How can I contact ITMingo?
                      <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon3"></i>
                    </h4>
                  </a>
                </div>
                <p id="answer3" class="collapse">
                  You can reach us by phone at +91 78129 91993 or email us at 
                  admin@itmingo.com. For more options, visit our Contact Us page.
                </p>
              </div>
            </div>
            <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="400">
              <div class="box">
                <div class="d-flex w-100 justify-content-between">
                  <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon4')" href="#answer4" role="button"
                    aria-expanded="false">
                    <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                      Do you provide customer support?
                      <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon4"></i>
                    </h4>
                  </a>
                </div>
                <p id="answer4" class="collapse">
                  Yes, we provide dedicated customer support to address any inquiries or issues 
                  you may have. Our support team is available to assist you during business hours.
                </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End FAQ section ========== -->

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
        As a matter of fact the unification of the coherent software provides a strict control over
        The Accomplishment of Intended Estimation
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
          <h5><i class="bi bi-phone-fill mx-4"></i>+91 78129 91993</h5>
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