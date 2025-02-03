@include('webpage.layout.base')
@section('contain')
@include('webpage.layout.header')
<!-- ======= Hero Section ======= -->
<section id="hero">
   <div class="container-fluid container-xl d-flex align-items-center justify-content-between mt-4">
      <div class="overlay-text">
         <h4>Let's build something great together</h4>
         <h1>Leading Digital Agency Dedicated to Your Growth</h1>
         <p>TechinnoMind: A full-service digital agency crafting engaging websites, apps, and marketing solutions that attract, inspire, and convert.</p>
         <div class="mt-4" style="display: inline-block;">
            <a href="#" class="request-quate-btn scrollto">Request a Quote</a> <a href="#" class="talk-btn scrollto">Let's Talk</a>
         </div>
      </div>
      <div class="hero-img mt-4">
         <img src="assets/img/hero-img.png" alt="TechinnoMind" class="img-fluid">
      </div>
   </div>
</section>
<!-- End Hero -->
<!--<div id="request-quote-bar">
   <p><a href="#">Request a Quote</a></p>
   </div> -->
<main id="main">
   <div class="grid-container">
      <div class="home-title">
         <span>what we do</span>
         <h1>We're Full Service Digital Agency</h1>
      </div>
      <section id="services-list">
         <div class="service-banner ">
            <div class="left">
               <h3>Custom E-Commerce Websites</h3>
               <p>Tailored online stores with seamless user experiences, advanced features, and scalable solutions to drive your business growth. We create powerful platforms that enhance customer engagement and maximize conversions.</p>
            </div>
         </div>
         <div class="service-banner">
            <div class="middle">
               <h3>Custom Mobile App & Web Apps</h3>
               <p>Bespoke applications designed to deliver intuitive user experiences, robust functionality, and seamless performance. We build scalable mobile solutions that drive user engagement and business growth.</p>
            </div>
         </div>
         <div class="service-banner">
            <div class="right">
               <h3>UX/UI and Product Design Solutions</h3>
               <p>Crafting intuitive, user-centered designs that enhance usability and drive customer satisfaction. We transform ideas into compelling digital experiences that align with your business goals.</p>
            </div>
         </div>
      </section>
      <div class="mt-4 mb-4 d-flex justify-content-center align-items-center">
         <a href="#" class="portfolio-btn">Browse Our Work</a> 
      </div>
   </div>
   <!-- About Company-->
   <section id="about" class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-5 offset-md-7">
               <span> About TechinnoMind</span>
               <h1>Your All-in-One Digital Partner</h1>
               <p>At TechinnoMind, we offer a full spectrum of expertise to create the ideal digital solution for your business. From design and development to deployment and marketing, we support you in every step of your digital journey. Our reputation is built on delivering expert development and design services that empower businesses to embrace technology transformations.
                  Our mission is to craft an exceptional digital future that accelerates your growth, uniting your customers, partners, and employees to achieve your vision.
               </p>
               <a href="#" class="round-btn d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-right-short"></i></a>
            </div>
         </div>
      </div>
   </section>
   <!-- Our Services -->
   <!-- Our Services -->
   <section id="our-services" class="our-services">
    <div class="home-title"> 
      <span>OUR SERVICES</span>
      <h1>We offer a wide <br />
        variety of IT services</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="box">
            <img src="assets/img/web-development-banner.png" alt="App Development" class="image">
            <div class="text">Web Development</div>
            <div class="overlay">
              <div class="text">
                <h3>Web Development</h3>
                <p>We provide comprehensive web solutions that bring your unique vision to life. Whether you're looking to create a standout website or develop a full-scale web application, we ensure your brand and services shine online. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ">
          <div class="box">
            <img src="assets/img/app-development-banner.png" alt="App Development" class="image">
            <div class="text">App Development</div>
            <div class="overlay">
              <div class="text">
                <h3>App Development</h3>
                <p>Benefit from expert guidance and skilled professionals who manage your application design and development needs. We excel at creating market-winning solutions that are user-friendly and deliver smooth performance.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box">
            <img src="assets/img/ui-ux-banner.png" alt="UI UX Development" class="image">
            <div class="text">UI/UX Design</div>
            <div class="overlay">
              <div class="text">
                <h3>UI/UX Design</h3>
                <p>TechinnoMind specializes in crafting highly intuitive user interfaces to ensure a seamless user experience. We use a comprehensive design thinking process to deliver compelling and effective designs.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box">
            <img src="{{asset('assets/img/QA-testing-banner.png')}}" alt="QA & Testing" class="image">
            <div class="text">Startup MVPs</div>
            <div class="overlay">
              <div class="text">
                <h3>Startup MVPs</h3>
                <p>We assist startups in creating Minimum Viable Products (MVPs) and websites, providing strategy, design, and development consultancy to drive growth and success. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box">
            <img src="{{asset('assets/img/IT-consulting-banner.png')}}" alt="IT Counsultancy" class="image">
            <div class="text">IT Counsultancy</div>
            <div class="overlay">
              <div class="text">
                <h3>IT Counsultancy</h3>
                <p>As a recognized IT consulting firm, TechinnoMind offers custom-tailored consulting services for businesses of all sizes across various domains, helping you navigate and leverage technology effectively.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box">
            <img src="{{asset('assets/img/digital-marketing-banner.png')}}" alt="Digital Marketing" class="image">
            <div class="text">E-Commerce and Shopify</div>
            <div class="overlay">
              <div class="text">
                <h3>E-Commerce and Shopify</h3>
                <p>Innovate your marketing strategies with search, display, and video ads. We help increase your online visibility and drive business growth by connecting your potential customers with your offerings. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   <section id="what-we-do">
      <div class="container">
         <div class="row mt-4 mb-4">
            <div class="col-lg-10 col-xs-8 col-sm-10">
               <div class="home-sub-title">
                  <span>EXPERIENCE. EXECUTION. EXCELLENCE</span>
                  <h1>What we actually do</h1>
               </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-2 pad-desk" >
               <span style="color:#F8608F">All Service </span>  <a href="#" class="round-btn d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-right-short"></i></a>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 what-we-do-column">
               <ul>
                  <li><span >01. </span> Strategic Solutions </li>
                  <li><span >02. </span> Technical Services</li>
                  <li><span >03. </span> UX/UI Design Solutions </li>
                  <li><span >04. </span> Digital Marketing & Product Marketing Services  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section id="why-choose-us">
      <div class="container">
         <div class="row mt-4">
            <div class="col-lg-12">
               <div class="home-title1">
                  <span>why choose us</span>
                  <h1>Driving businesses with technology</h1>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-8 home-title1">
               <p>TechinnoMind gets everyone involved and collaborate, with complete transparency. This elevates the chances of building a strong relationship with your clients and customers, thus promoting exponential growth.</p>
            </div>
            <div class="col-lg-4 mt-4" >
               <a href="#" class="request-quate-btn">Get Start With Us</a>  
            </div>
         </div>
         <div class="row mt-4">
            <div class="col-lg-4 mt-2">
               <div class="box">
                  <div class="overlay">
                     <div class="text">
                        <h3>Expand Reach</h3>
                        <p>With the help of our extraordinary outreach services, expand your outreach by broadening your audience network and let more customers find you online, bringing in growth to your business.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mt-2">
               <div class="box">
                  <div class="overlay">
                     <div class="text">
                        <h3>Cost Effective</h3>
                        <p>We ensure that you get the most affordable services available in the market. With TechinnoMind, no need to worry about the plans you are opting for as we are intended towards imparting growth at a reasonable price. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mt-2">
               <div class="box">
                  <div class="overlay">
                     <div class="text">
                        <h3>Reachable</h3>
                        <p>Reach out to us anytime. With the help of our dedicated customer support team and project managers, we are always available 24*7. You can contact us anytime you need us. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mt-2">
               <div class="box">
                  <div class="overlay">
                     <div class="text">
                        <h3>Customised Web
                           Design services
                        </h3>
                        <p>Our custom web design services are intended towards creating appealing and interactive websites for you that align with your beliefs, goals, and visions. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mt-2">
               <div class="box">
                  <div class="overlay">
                     <div class="text">
                        <h3>Quick Mobile App 
                           Design
                        </h3>
                        <p>With an excellent team of designers and developers, we deliver mobile applications that are unique and highly optimized well within your timeline. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mt-2">
               <div class="box">
                  <div class="overlay">
                     <div class="text">
                        <h3>Collective 
                           Marketing
                        </h3>
                        <p>We help you with ideas, strategy, plan of action and execution along with its analysis. At TechinnoMind, you can expect rapid and lost lasting growth. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row " style="margin-top: 80px;">
            <div class="home-title" >
               <span>process</span>
               <h1 style="color:#fff">Our working process</h1>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <img src="assets/img/working-process.svg" alt="Working process" />
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12" style="text-align:center; margin-top:50px">
               <a href="#" class="request-quate-btn" style:="text-align:center;">Get Start With Us</a>  
            </div>
         </div>
      </div>
   </section>
   <section id="projects">
      <div class="container">
         <div class="home-title">
            <h1>Recent launched projects</h1>
            <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam</p>
         </div>
         <div class="row">
            <div class="col-md-6" >
               <div class="col-md-12 mt-4" style="position: relative;">
                  <img src="assets/img/project-1.jpg" alt="Latest prject 1"  />
                  <span class="latest-proj-btn"><i class="bi bi-arrow-right-short" style="font-size:30px"></i></span>
               </div>
               <div class="col-md-12 mt-4" style="position: relative;">
                  <img src="assets/img/project3.jpg" alt="Latest prject 1" />
                  <span class="latest-proj-btn"><i class="bi bi-arrow-right-short" style="font-size:30px"></i></span>
               </div>
            </div>
            <div class="col-md-6" >
               <div class="col-md-12 mt-4" style="position: relative;">
                  <img src="assets/img/project2.jpg" alt="Latest prject 1"  />
                  <span class="latest-proj-btn"><i class="bi bi-arrow-right-short" style="font-size:30px"></i></span>
               </div>
               <div class="col-md-12 mt-4" style="position: relative;">
                  <img src="assets/img/project4.jpg" alt="Latest prject 1" />
                  <span class="latest-proj-btn"><i class="bi bi-arrow-right-short" style="font-size:30px"></i></span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8" >
               <div class="col-md-12 mt-4" style="position: relative;">
                  <img src="assets/img/project5.jpg" alt="Latest prject 1"  />
                  <span class="latest-proj-btn"><i class="bi bi-arrow-right-short" style="font-size:30px"></i></span>
               </div>
            </div>
            <div class="col-md-4" >
               <div class="col-md-12 mt-4" style="position: relative;">
                  <img src="assets/img/project6.jpg" alt="Latest prject 1"  style="min-height: 315px"/>
                  <span class="latest-proj-btn"><i class="bi bi-arrow-right-short" style="font-size:30px"></i></span>
               </div>
               <div class="col-md-12 mt-4" style="position: relative;">
                  <img src="assets/img/project7.jpg" alt="Latest prject 1" style="min-height: 315px"/>
                  <span class="latest-proj-btn"><i class="bi bi-arrow-right-short" style="font-size:30px"></i></span>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="question-and-answer">
      <div class="container-fluid d-flex align-items-center justify-content-between" >
         <div class="row">
            <div class="col-md-6">
               <img src="assets/img/quetion-answer-banner.png" class="img-fluid" alt="Working process">
            </div>
            <div class="col-md-6 pl-4">
               <div class="home-title1">
                  <span>we’re here to help</span>
                  <h1>Frequently Asked Questions About Design And Tech Services</h1>
               </div>
               <p class="collapsible">Where can I get a good website?</p>
               <div class="content">
                  <p>We take pride in delivering websites that ensure intuitive customer experience and constant growth. You can connect with our expert consultants today to start discussing your business specific requirements.</p>
               </div>
               <p class="collapsible">How much startup website will cost?</p>
               <div class="content">
                  <p>A startup website costs different for distinct kinds of businesses. For a small business it may cost somewhere around $1000 to $9000 whereas for medium and large businesses, this cost may range from $10000 to $35000. However, TechinnoMind is more
                     cost effective and we may charge less than the others while maintaining the quality of services too.
                  </p>
               </div>
               <p class="collapsible">How to get develop a mobile app?</p>
               <div class="content">
                  <p>The first step to create a mobile app is to know why you are creating one. Once decided, get all the relevant information and then hire a professional mobile design and development agency like TechinnoMind to help you develop a market winning
                     solution.
                  </p>
               </div>
               <p class="collapsible">How to get a digital marketing team?</p>
               <div class="content">
                  <p>You can do a skill test on the preference of your services and screen out the candidates on the basis of their performance or you can simply incorporate with an organization like TechinnoMind who can provide digital marketing assistance in a smooth
                     and efficient manner.
                  </p>
               </div>
               <p class="collapsible">How to get a tech maintenance team?</p>
               <div class="content">
                  <p>You need to define roles and responsibilities, schedule and assign tasks along with tracking the quality of the work. In this way, you can create a tech maintenance team that is an excellent performer. However, you may need to <strong>hire a professional
                     tech support team</strong> to boost your growth charts and improve your services.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="we-offering">
      <div class="container">
         <div class="row ">
            <div class="col-md-8 d-flex align-items-center justify-content-between">
               <div class="home-title1">
                  <span>How can we help you? </span>
                  <h1>Services we're providing to our customers </h1>
               </div>
            </div>
            <div class="col-md-4 pad-top-60" >
               <p>Our wide range of services range from providing excellent product development to design to digital marketing consultation and long term tech support. You name it, we deliver it.</p>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3">
               <div class="box">
                  <div class="text">
                     <h3>Product 
                        Development
                     </h3>
                  </div>
                  <div class="overlay">
                     <div class="text">
                        <h3>Product 
                           Development
                        </h3>
                        <p>We help you design and deliver products that are of high quality and are offered at our end to meet your user&#39;s and clients expectations. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="box">
                  <div class="text">
                     <h3>Creative
                        Services
                     </h3>
                  </div>
                  <div class="overlay">
                     <div class="text">
                        <h3>Creative
                           Services
                        </h3>
                        <p>Developing creative campaigns and visuals for our clients has been our motto since the beginning thus assuring quality and efficiency along with growth. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="box">
                  <div class="text">
                     <h3>Content
                        Management
                     </h3>
                  </div>
                  <div class="overlay">
                     <div class="text">
                        <h3>Content
                           Management
                        </h3>
                        <p>Content is the king of SEO and digital growth. It is one of the most important factors in deciding your ranking in search engines. With TechinnoMind, you don&#39;t need to worry about the management and quality of your content as our
                           experts will do it for you. 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="box">
                  <div class="text">
                     <h3>SEO &   SMO</h3>
                  </div>
                  <div class="overlay">
                     <div class="text">
                        <h3>SEO &
                           SMO
                        </h3>
                        <p>Search Engine Optimization (SEO) and Social Media Optimization (SMO) are among the most vital growth factors and our digital experts help you achieve your business goals and objectives with the help of our services. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="box">
                  <div class="text">
                     <h3>Tech Support</h3>
                  </div>
                  <div class="overlay">
                     <div class="text">
                        <h3>Tech Support</h3>
                        <p>The tech support offered by us assists and advises our users and clients with issues regarding their technical product. It is also done by means of discussing with our experts and offering the required assistance. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row plan-link">
            <div class="col-lg-12" style="text-align:center; margin-top:50px">
               Explore Our <a href="#"  style="text-align:center;">All Service</a> Today! 
            </div>
         </div>
      </div>
   </section>
   <section id="latest-blog">
      <div class="container">
         <div class="row ">
            <div class="col-md-4 d-flex align-items-center justify-content-between">
               <div class="home-title1">
                  <span>Blog </span>
                  <h1>Latest news </h1>
                  <p>Stay up-to-date with the latest design and tech trends at Techinnomind by reading our blog for daily updates. </p>
               </div>
            </div>
            
         </div>
      </div>
   </section>
</main>
<!-- End #main -->
@include('webpage.layout.footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
   var coll = document.getElementsByClassName("collapsible");
   var i;
   
   for (i = 0; i < coll.length; i++) {
     coll[i].addEventListener("click", function() {
       this.classList.toggle("active");
       var content = this.nextElementSibling;
       if (content.style.display === "block") {
         content.style.display = "none";
       } else {
         content.style.display = "block";
       }
     });
   }
</script>