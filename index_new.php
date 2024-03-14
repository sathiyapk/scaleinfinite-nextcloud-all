
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Scale Infinite </title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- <meta name="google-signin-client_id" content="740523415320-tll2of0ajhi0qt7nfrnb4kkikfbvsnu8.apps.googleusercontent.com"> -->
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link async href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- <link  href='https://css.gg/userlane.css' rel='stylesheet'> -->
      <!-- font Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <!-- Vendor CSS Files -->
      <link async href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link async href="assets/vendor/optimized/css/bootstrap.min.css" rel="stylesheet">
      <link async href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link async href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link async href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link async href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <!-- Loading style -->
          <!-- Include Google Sign-In library -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- Include jwt-decode library -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jwt-decode@4.0.0"></script> -->

      <style>
         .loader {
         position: absolute;
         left: 50%;
         top: 50%;
         border: 10px solid #d5d7fd;
         border-radius: 50%;
         border-top: 12px solid #02075d;
         width: 100px;
         height: 100px;
         -webkit-animation: spin 2s linear infinite; /* Safari */
         animation: spin 2s linear infinite;
         }
         /* Safari */
         @-webkit-keyframes spin {
         0% { -webkit-transform: rotate(0deg); }
         100% { -webkit-transform: rotate(360deg); }
         }
         @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
      </style>
      <script src="https://accounts.google.com/gsi/client" async defer></script>
      <script src="vendor/JWT_decode/jwt-decode.js" async></script>
      <!-- Template Main CSS File -->
      <link async href="assets/css/style.css" rel="stylesheet">
      <!-- Google tag (gtag.js) for Analytics New -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-LMX1GWYDB0"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-LMX1GWYDB0');
      </script>
      <!-- Analytics End -->
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-K26KNFN');
      </script>
      <!-- End Google Tag Manager -->
      
    
   </head>
   <body>
      <!-- Google Tag Manager (noscript) -->
     

      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K26KNFN"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <!-- ======= Header ======= -->
      <div class="loader" id="loading"></div>
      <header id="header" class="header fixed-top">
         <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="Logo of scaleinfinite">
            </a>
            <nav id="navbar" class="navbar">
               <ul>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                  <li><a class="nav-link scrollto" href="https://docs.scaleinfinite.fr/" target="_blank">Tutorial</a></li>
                  <li><a class="nav-link scrollto" href="http://localhost/newcloud/index.php/apps/sociallogin/oauth/google" target="_blank">Google Login</a></li>
                  <!-- Google Login -->
                  <li>
                  <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
                  <!-- <a data-v-8f4e0666="" role="link" href="http://localhost/newcloud/index.php/apps/sociallogin/oauth/google" target="_self" rel="nofollow noreferrer noopener" class="button-vue button-vue--text-only button-vue--vue-secondary button-vue--wide">
                     <span data-v-8f4e0666="" class="button-vue__wrapper">
                        <span data-v-8f4e0666="" class="button-vue__text">Log in with Google</span> 
                     </span>
                  </a> -->
                  
                  <!-- <a data-v-8f4e0666=""  role="link" href="http://localhost/newcloud/index.php/apps/sociallogin/oauth/google" target="_self" rel="nofollow noreferrer noopener" class="button-vue button-vue--text-only button-vue--vue-secondary button-vue--wide">
                     <span data-v-8f4e0666="" class="button-vue__wrapper" >
                        <span data-v-8f4e0666="" class="button-vue__text">	Log in with Google	</span>
                     </span>
                  </a> -->
                    </li>
                  </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
         </div>
      </header>
      <!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="hero d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center">
                  <h1 data-aos="fade-up"> Self-Driving Cloud Applications</h1>
                  <h2 data-aos="fade-up" data-aos-delay="400">Put your applications on autopilot mode in our AI managed environment</h2>
                  <div data-aos="fade-up" data-aos-delay="600">
                     <div class="text-center text-lg-start">
                        <a href="#values" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Get Started</span>
                        <i class="bi bi-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                  <img src="assets/img/hero-img.png" class="img-fluid" alt="Hero image">
               </div>
            </div>
         </div>
      </section>
      <!-- End Hero -->
      <main id="main">
         <!-- ======= About Section ======= -->
         <section id="about" class="about">
            <div class="container" data-aos="fade-up">
               <div class="row gx-0">
                  <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                     <div class="content">
                        <h3>Image Creator</h3>
                        <h2>What is Image Creator</h2>
                        <p>
                           Instantly install Apps. Easily deploy production ready apps. No more tinkering with Dockerfiles and manually provisioning databases.
                        </p>
                        <div class="text-center text-lg-start">
                           <a href="https://docs.scaleinfinite.fr/" target="_blank" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                           <span>Get Started</span>
                           <i class="bi bi-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                     <img src="assets/img/my-apps.png" class="img-fluid" alt="App presentation" style="width: 100%;height: 100%;">
                  </div>
               </div>
            </div>
         </section>
         <!-- End About Section -->
         <!-- ======= Values Section ======= -->
         <section id="values" class="values">
            <div class="container" data-aos="fade-up">
               <header class="section-header">
                  <h2>Instantly install apps</h2>
                  <p>How it works ?</p>
               </header>
               <div class="row">
                  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                     <div class="box">
                        <img src="assets/img/choose.webp" class="img-fluid" alt="Women speaking" style="width: 100%;height: auto;">
                        <h3>Look for the application you are searching for</h3>
                        <p>By using the search bar, you can find +1000 applications from our database & dockerhub</p>
                     </div>
                  </div>
                  <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                     <div class="box">
                        <img src="assets/img/install1.webp" class="img-fluid" alt="Women walking" style="width: 100%;height: auto;">
                        <h3>Install application easily</h3>
                        <p>Once you have found the application, you can instantly install the app. Don't forget to specify custom name, ports & environnement variable</p>
                     </div>
                  </div>
                  <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                     <div class="box">
                        <img src="assets/img/mindful1.webp" class="img-fluid" alt="Women doing yoga" style="width: 100%;height: auto;">
                        <h3>Ready to use!</h3>
                        <p>You can now use your application peacefully. You can access it with HTTP or TCP/UDP adress.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Values Section -->
         <!-- ======= Services Section ======= -->
         <section id="services" class="services">
            <div class="container" data-aos="fade-up">
               <header class="section-header">
                  <h2>Why Use our services ?</h2>
                  <p>Our main objectives</p>
               </header>
               <div class="row gy-4">
                  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                     <div class="service-box green">
                        <img src="assets/img/secured.svg" alt="Image of secured" style="max-width: 20%; margin-bottom: 20px;">
                        <h3>Secured</h3>
                        <p>We offer different layer of security options. Users can choose the right security level that suits well for the application as well for their needs.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                     <div class="service-box orange">
                        <img src="assets/img/easy.svg" alt="Image of secured" style="max-width: 13%; margin-bottom: 20px;">
                        <h3>User Friendly</h3>
                        <p>The plateform is designed in a way that anybody from technical and most importantly the non-technical background can easily deploy and run their applications securly</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                     <div class="service-box blue">
                        <img src="assets/img/choice.png" alt="Image of thumb" style="width: 25%;height: auto;" >
                        <h3>Choice</h3>
                        <p>Your are not limited to one application from a list of applications that are supported. You choose to deploy and run any application that is publicly available on docker hub and also choose the application from your private docker registry by synchronising your account. </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Services Section -->
         <!-- ======= Counts Section ======= -->
         <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">
               <div class="row gy-4">
                  <div class="col-lg-3 col-md-6">
                     <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                           <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                           <p>Happy Clients</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                           <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                           <p>Projects</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                           <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                           <p>Hours Of Support</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                           <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                           <p>Hard Workers</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Counts Section -->
         <!-- ======= F.A.Q Section ======= -->
         <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
            <header class="section-header">
               <h2>F.A.Q</h2>
               <p>Frequently Asked Questions</p>
            </header>
            <div class="row" itemscope itemtype="https://schema.org/FAQPage">
               <div class="col-lg-6">
                  <!-- F.A.Q List 1-->
                  <div class="accordion accordion-flush" id="faqlist1" >
                     <div class="accordion-item" itemscope itemtype="https://schema.org/Question" itemprop="mainEntity">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                           How much does it cost ?
                           </button>
                        </h2>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1" itemscope itemtype="https://schema.org/Answer" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer" itemprop="acceptedAnswer">
                           <div class="accordion-body">
                              Our service is free. However, applications can be ran for 2 hours only.
                              Applications can be ran 24/7 with premium user option.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item" itemscope itemtype="https://schema.org/Question" itemprop="mainEntity">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                           How many applications can I install ?
                           </button>
                        </h2>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1" itemscope itemtype="https://schema.org/Answer" itemprop="acceptedAnswer">
                           <div class="accordion-body">
                              For now, you can install unlimited applications with our service.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item" itemscope itemtype="https://schema.org/Question" itemprop="mainEntity">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                           Are my applications endpoint is public?
                           </button>
                        </h2>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1" itemscope itemtype="https://schema.org/Answer" itemprop="acceptedAnswer">
                           <div class="accordion-body">
                              You can choose either public. In that case, you can connect with username & password from anywhere in the internet.
                              Otherwise if you want to limit the access, you can use vpn connection or limit the IP Adress from where you can connect. 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <!-- F.A.Q List 2-->
                  <div class="accordion accordion-flush" id="faqlist2">
                     <div class="accordion-item" itemscope itemtype="https://schema.org/Question" itemprop="mainEntity">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                           Are my data persistent ?
                           </button>
                        </h2>
                        <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2" itemscope itemtype="https://schema.org/Answer" itemprop="acceptedAnswer">
                           <div class="accordion-body">
                              For the free user there is no persistence, and for the premium user you can different type of persistence.
                           </div>
                        </div>
                        <div class="accordion-item" itemscope itemtype="https://schema.org/Question" itemprop="mainEntity">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                              How can I test my applications ?
                              </button>
                           </h2>
                           <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2" itemscope itemtype="https://schema.org/Answer" itemprop="acceptedAnswer">
                              <div class="accordion-body">
                                 It will only take some few clicks and choose the deployment name/port/variable. And it's done.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item" itemscope itemtype="https://schema.org/Question" itemprop="mainEntity">
                           <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                              Are my data secured ?
                              </button>
                           </h2>
                           <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2" itemscope itemtype="https://schema.org/Answer" itemprop="acceptedAnswer">
                              <div class="accordion-body">
                                 Yes they are safe & secured. we provide different security option, you can choose the security option that suits for your needs.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End F.A.Q Section -->
         <!-- ======= Contact Section ======= -->
         <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
               <header class="section-header">
                  <h2>Contact</h2>
                  <p>Contact Us</p>
               </header>
               <div class="row gy-4">
                  <div class="col-lg-6">
                     <div class="row gy-4">
                        <div class="col-md-6">
                           <div class="info-box">
                              <i class="bi bi-geo-alt"></i>
                              <h3>Address</h3>
                              <p>141 Av. Jean Jaurès,<br> 75019 Paris</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info-box">
                              <i class="bi bi-clock"></i>
                              <h3>Open Hours</h3>
                              <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info-box">
                              <i class="bi bi-telephone"></i>
                              <h3>Call Us</h3>
                              <p>+33 9 70 44 00 55</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info-box">
                              <i class="bi bi-envelope"></i>
                              <h3>Email Us</h3>
                              <p>info@scaleinfinite.fr</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">
                           <div class="col-md-6">
                              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                           </div>
                           <div class="col-md-6 ">
                              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                           </div>
                           <div class="col-md-12">
                              <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                           </div>
                           <div class="col-md-12">
                              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                           </div>
                           <div class="col-md-12 text-center">
                              <div class="loading">Loading</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Your message has been sent. Thank you!</div>
                              <button type="submit">Send Message</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
         <div class="footer-newsletter">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-12 text-center">
                     <h4>Our Newsletter</h4>
                     <p>Don't miss any updates by subscribing to our Newsletter</p>
                  </div>
                  <div class="col-lg-6">
                     <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-top">
            <div class="container">
               <div class="row gy-4">
                  <div class="col-lg-7 col-md-12 footer-info">
                     <a href="index.php" class="logo d-flex align-items-center">
                     <img src="assets/img/logo.png" alt="Image of logo of scaleinfinite" style="width: 20rem;height: 100%;">
                     </a>
                     <p>Scale Infinite is a data software company based Europe and Asia that develop, educate and offers commercial support for open-source softwares designed to manage Big Data solutions and associated processing.</p>
                     <div class="social-links mt-3">
                        <a href="https://www.instagram.com/scaleinfinite/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/scaleinfinite" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="https://scaleinfinite.fr">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="https://scaleinfinite.fr/about-us/">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="https://scaleinfinite.fr/services-scale-infinite/">Services</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
                     <h4>Contact Us</h4>
                     <p>
                        141 Av. Jean Jaurès,<br>
                        75019 Paris<br>
                        France <br><br>
                        <strong>Phone:</strong> +33 9 70 44 00 55<br>
                        <strong>Email:</strong> info@scaleinfinite.fr<br>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- End Footer -->
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <!-- Vendor JS Files -->
      <script src="assets/vendor/purecounter/purecounter.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <!-- Template Main JS File -->
      <script src="assets/js/mainLandingPage.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- <script>
        function onSignIn(googleUser) {
         var profile = googleUser.getBasicProfile();
         console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
         console.log('Name: ' + profile.getName());
         console.log('Image URL: ' + profile.getImageUrl());
         console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
         }
    
      </script> -->
      <!-- Loading script -->
      <script>
         function hideLoader() {
          $('#loading').hide();
         }
          $(window).ready(hideLoader);
         // Strongly recommended: Hide loader after 20 seconds, even if the page hasn't finished loading
         setTimeout(hideLoader, 20 * 1000);
      </script>
   </body>
</html>