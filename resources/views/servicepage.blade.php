@extends('layouts.app')
@section('body')

  <!-- ======= srart Breadcrumbs ======= -->
  <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="150">
    <div class="container">
      <ol>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('service') }}">services</a></li>
        <li>single service</li>
      </ol>
      <h2 class="title">service</h2>
      <p class="col-lg-10 col-12">
        Although, final stages of the internal network gives a complete experience of
        The Parameter of Speculative Environment
      </p>
    </div>
  </section><!-- End Breadcrumbs -->

  <div class="single-service">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 col-12" data-aos="fade-right" data-aos-delay="200">
          <img src="{{asset('web/images/service/banner-img2.png')}}" alt="service-img">
          <h2 class="title my-2">Information about Services We Offer</h2>
          <p>
            Web development is the foundation of your online presence. A well-designed and 
            developed website acts as your digital storefront, creating the first impression 
            for potential customers. It's essential for businesses to have a responsive and 
            user-friendly website to attract and retain visitors. By utilizing modern web 
            development technologies and practices, ITMingo ensures your website is not only 
            visually appealing but also functional, secure, and optimized for performance.
          </p>
          <p class="my-2">
            Digital marketing is crucial for reaching a broader audience and 
            driving traffic to your website. It encompasses various strategies such as SEO, 
            social media management, and content marketing. SEO (Search Engine Optimization) 
            improves your website’s visibility on search engines, making it easier for potential 
            customers to find you.
          </p>
          <img src="{{asset('web/images/service/business-development-2885464-2409431.webp')}}" alt="service-img">
          <h2 class="title my-2">Information about Services We Offer</h2>
          <p>
            IT consulting provides expert advice and strategies to optimize 
            your technology infrastructure. It involves assessing your current IT 
            environment, identifying areas for improvement, and implementing solutions 
            that align with your business objectives.
          </p>
          <div class="project-steps row g-2 my-4">
            <div class="col-lg-6 col-12 mx-auto ">
              <div class="box box-service ">
                <h3 class="title-2 my-2 "><span class="unique-text">1. </span>Latest Technologies</h3>
                <p>
                  At ITMingo, we stay ahead of the curve by leveraging the latest 
                  technologies to deliver cutting-edge solutions for your business.
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-12 mx-auto ">
              <div class="box box-service">
                <h3 class="title-2 my-2 "><span class="unique-text">2. </span>Delever Just On Time</h3>
                <p>
                  At ITMingo, we understand the importance of timely project completion. 
                  Our commitment to delivering just on time ensures your business can move forward without delays.
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-12 mx-auto">
              <div class="box box-service">
                <h3 class="title-2 my-2 "><span class="unique-text">3. </span>Powerful Strategies</h3>
                <p>
                  At ITMingo, we employ powerful strategies to ensure 
                  your projects achieve maximum impact and success.
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-12 mx-auto">
              <div class="box box-service">
                <h3 class="title-2 my-2 "><span class="unique-text">4. </span>Uniqe Solutions</h3>
                <p>
                  At ITMingo, we pride ourselves on delivering unique solutions that set your business apart.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 service-side row g-2" data-aos="fade-left" data-aos-delay="200">
          <h2 class="title-2">list of services</h2>
          <div class="col-md-6 col-12 mx-auto service-box ">
            <div class="box box-service box-hover">
              <i class="bi bi-code-slash"></i>
              <h3 class="title-2 my-2 ">web developement</h3>
              <p>IT Mingo is a leading creative web developement company.</p>
            </div>
          </div>
          <div class=" col-md-6 col-12 mx-auto service-box ">
            <div class="box box-service box-hover ">
              <i class="bi bi-megaphone-fill"></i>
              <h3 class="title-2 my-2 ">digital marketing</h3>
              <p>IT Mingo is a leading creative digital marketing company.</p>
            </div>
          </div>
          <div class=" col-md-6 col-12 mx-auto service-box">
            <div class="box box-service box-hover">
              <i class="bi bi-bug-fill"></i>
              <h3 class="title-2 my-2 ">SEO Services</h3>
              <p>IT Mingo is a leading creative SEO Services company.</p>
            </div>
          </div>
          <div class=" col-md-6 col-12 mx-auto service-box">
            <div class="box box-service box-hover">
              <i class="bi bi-code-slash"></i>
              <h3 class="title-2 my-2 ">cyber security</h3>
              <p>IT Mingo is a leading creative cyber security company.</p>
            </div>
          </div>
          <div class=" col-md-6 col-12 mx-auto service-box">
            <div class="box box-service box-hover">
              <i class="bi bi-palette-fill"></i>
              <h3 class="title-2 my-2 ">graphic design</h3>
              <p>IT Mingo is a leading creative graphic design company.</p>
            </div>
          </div>
          <div class=" col-md-6 col-12 mx-auto service-box">
            <div class="box box-service box-hover">
              <i class="bi bi-android2"></i>
              <h3 class="title-2 my-2 ">apps developement</h3>
              <p>IT Mingo is a leading creative apps developement company.</p>
            </div>
          </div>
          <h2 class="title-2 mt-4">follow us</h2>
          <div class="row social">
            <div class="icon"><i class="bi bi-facebook"></i></div>
            <div class="icon mx-2"><i class="bi bi-instagram"></i></div>
            <div class="icon mx-2"><i class="bi bi-twitter "></i></div>
            <div class="icon mx-2"><i class="bi bi-youtube"></i></div>
          </div>
        </div>
      </div>

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
            <img src="{{asset('web/images/faq/customer.png')}}" alt="faq">
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
                  admin@itmingo.com For more options, visit our Contact Us page.
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
@endsection