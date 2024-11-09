@extends('layouts.app')
@section('body')
<style>
  .breadcrumbs {
    background: var(--dark-brand-color);
    min-height: 40px;
    margin-top: 100px;
    color: var(--bodyColor);
}

</style>
  <!-- ======= srart Breadcrumbs ======= -->
  <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
      <ol>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>about</li>
      </ol>
      <h2 class="title">about us</h2>
      <p class="col-lg-10 col-12">
      We create dynamic and responsive websites that not only look stunning but also deliver robust functionality and security.
      </p>
    </div>
  </section><!-- End Breadcrumbs -->

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
          At IT Mingo, we are passionate about leveraging technology to drive
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
        <div class="col-12 my-4 " data-aos="fade-up" data-aos-delay="400">
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