<?php
require_once("mail.php");
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>prit ladani</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>

  <!-- bootstrep css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!--aos animation css -->

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- bootstrep js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <!-- bootstrap icon cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!--  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"
    integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
    crossorigin="anonymous"></script>

</head>

<body class="bg-light">
  <!-- navbar start here -->
  <nav class="shadow-sm  navbar-expand-md nav1">
    <div class="container-fluid ">
      <div class="row py-3">
        <div class="col-md-2 col-3 text-center">
          <a href="#" class="nav-link navbar-brand text-danger fs-3 fw-bold">Prit</a>
        </div>
        <div class="col-md-8 col-6" >
          <div class="nav" id="btt-togg">
          <div class="collapse navbar-collapse  d-flex justify-content-center" >
            <ul class="navbar-nav mb-auto d-flex justify-content-center">
              <li class="nav-item ">
                <a class="nav-link text-dark text-center" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark text-center" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark text-center" href="#service">Service</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-dark text-center" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-dark text-center" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        </div>
        <div class="col-md-2 col-3 text-center pt-1">
          <button type="button" class="btn btn-danger" data-bs-target="#btt-togg" data-bs-toggle="collapse">
            <i class="bi bi-list text-white"></i>
          </button>
        </div>
      </div>
    </div>
  </nav> 
 

  <!-- home start here -->
  <section id="hero" class="hero pt-5 pb-3 ">
    <div class="container-lg" >
      <div class="row align-items-center align-content-center min-vh-100">
        <div class="col-md-6 mt-5 mt-md-0"data-aos="fade-up" data-aos-duration="1500">
          <div class="image text-center">
            <img src="image/2.jpg" class="rounded-circle mw-100 img-fluid" alt="Portfolio">
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0 order-md-first"data-aos="fade-up" data-aos-duration="1500">
          <div class="heading-text ">
            <h1 class="text-danger fw-bold text-uppercase fs-1 ">Prit Ladani</h1>
            <div class="d-flex">
              <div class="iam">hello I'm &nbsp;</div>
              <div class="text text-danger"></div>
            </div>
            <a href="#portfolio" class="btn btn-danger px-4 mt-4">My Work</a>
          </div>
        </div>
      </div>
    </div>
    <!-- home end here -->
  </section>

  <!-- about start here -->
  <section class="about py-5" id="about">
    <div class="container-lg py-3">
      <div class="row py-3 ">
        <div class="section-titel text-center py-3">
          <h2 class="fw-bold "data-aos="fade-up" data-aos-duration="1500" >About Me</h2>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500" >
          <div class="about">
            <h2 class="fs-3 ">i'm working for the last nine months in TOPS Technologies, i have exprience of given
              projects by company</h2>
            <p class="text-muted mt-3">The work I provide is of highest quality, fully responsive, and tested in a wide
              range of devices.</p>
            <p class=" mt-3"><span class="fw-bold"> skill -</span> i have
              knowledge
              in HTML, CSS ,bootstrap ,javascript,jquery,Reactjs.</p>
          </div>
          <div class="row text-center text-uppercase py-3">
            <div class="col-sm-6" data-aos="fade-up" data-aos-duration="1500">
              <div class="project">
                <h4 class="fs-1 fw-bold">03</h4>
                <p class="text-muted">PROJECT COMPLETE</p>
              </div>
            </div>
            <div class="col-sm-6" data-aos="fade-up" data-aos-duration="1500">
              <div class="project">
                <h4 class="fs-1 fw-bold">9/10</h4>
                <p class="text-muted">POSITIVE REVIEW</p>
              </div>
            </div>
          </div>
          <div class="row align-items-lg-center d-flex">
            <div class="col-6 col-sm-4 " data-aos="fade-up" data-aos-duration="1500">
              <a href="pdf/prit resume.pdf" download="resume" class="btn btn-danger">Download Resume</a>
            </div>
            <div class="col-6 col-sm-4">
              <div class="icon text-dark "data-aos="fade-up" data-aos-duration="1500">
                <a href="https://wa.me/9099525868?text=hello%20i'm%20prit%20ladani%20%0A" class="text-dark me-2 "><i
                    class="bi bi-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/prit-ladani-28a229248/" class="text-dark me-2"><i
                    class="bi bi-linkedin"></i></a>
                <a href="https://instagram.com/prit_ladani_?igshid=ZDdkNTZiNTM=" class="text-dark me-2"><i
                    class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/ladani.prit.5?mibextid=ZbWKwL" class="text-dark me-2"><i
                    class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>
        </div>
    <div class="col-md-6"  >
          <div class="row py-3">
            <div class="labels mt-1" data-aos="fade-up" data-aos-duration="1500">
              <p class="mb-0 fs-5">Html</p>
              <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-danger fw-bold " role="progressbar" style="width: 90%;" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
            </div>
            <div class="labels mt-3" data-aos="fade-up" data-aos-duration="1500">
              <p class="mb-0 fs-5">Css</p>
              <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-danger fw-bold" role="progressbar" style="width: 85%;" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100">85%</div>
              </div>
            </div>
            <div class="labels mt-3" data-aos="fade-up" data-aos-duration="1500">
              <p class="mb-0 fs-5">Bootstrap</p>
              <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-danger fw-bold" role="progressbar" style="width: 95%;" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100">95%</div>
              </div>
            </div>
            <div class="labels mt-3" data-aos="fade-up" data-aos-duration="1500">
              <p class="mb-0 fs-5">Javascript</p>
              <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-danger fw-bold" role="progressbar" style="width: 60%;" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
            </div>
            <div class="labels mt-3" data-aos="fade-up" data-aos-duration="1500">
              <p class="mb-0 fs-5">React js</p>
              <div class="progress" style="height: 10px;">
                <div class="progress-bar bg-danger fw-bold" role="progressbar" style="width: 60%;" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- about end here -->
  </section>

  <!-- service start here -->
  <section id="service" class="service py-3">
    <div class="container py-5">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
        <div class=" section-titel text-center py-5">
          <h2 class="fw-bold">Service</h2>
        </div>
      </div>
      <div class="row ">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1500">
          <div class="service-text shadow-sm p-3 bg-white rounded my-3">
            <div class="icon-text text-center py-2 ">
              <i class="bi bi-code-slash text-danger fs-2 fw-bold"></i>
              <h5 class="py-3">Web Development</h5>
              <P class="text-muted">I offer both design and development.</P>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4"data-aos="fade-up" data-aos-duration="1500">
          <div class="service-text shadow-sm p-3 bg-white rounded my-3">
            <div class="icon-text text-center py-2 ">
              <i class="bi bi-lightbulb-fill text-danger fs-2 fw-bold"></i>
              <h5 class="py-3">Creative Design</h5>
              <P class="text-muted">I design from PSD to HTML.</P>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4"data-aos="fade-up" data-aos-duration="1500">
          <div class="service-text shadow-sm p-3 bg-white rounded my-3">
            <div class="icon-text text-center py-2 ">
              <i class="bi bi-filetype-js text-danger fs-2 fw-bold"></i>
              <h5 class="py-3">Platforms</h5>
              <P class="text-muted">ReactJs, AngularJs, Bootstrap.</P>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- service end here -->
  </section>

  <!-- portfolio start here -->
  <section id="portfolio" class="portfolio py-3">
    <div class="container-lg" >
      <div class="row justify-content-center"data-aos="fade-up" data-aos-duration="1500">
        <div class=" section-titel text-center py-5">
          <h2 class="fw-bold">Latest work</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-4"data-aos="fade-up" data-aos-duration="1500">
          <div class="portfoli-img py-3">
            <img class="img-thumbnail" src="image/3.png">
            <h4>Baber salun (responsive)
            </h4>
            <a class="text-danger text-decoration-none fs-5 mt-0 ms-0" href="http://pritladani021.byethost15.com/">Live
              Demo</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-4"data-aos="fade-up" data-aos-duration="1500">
          <div class="portfoli-img py-3">
            <img class="img-thumbnail" src="image/4.png">
            <h4>Apani dukan</h4>
            <a class="text-danger text-decoration-none fs-5 mt-0 ms-0" href="http://pritladani.byethost14.com/">Live
              Demo</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-4"data-aos="fade-up" data-aos-duration="1500">
          <div class="portfoli-img py-3">
            <img class="img-thumbnail" src="image/5.png">
            <h4>Digital Watch</h4>
            <a class="text-danger text-decoration-none fs-5 mt-0 ms-0" href="http://ladaniprit.byethost6.com/">Live
              Demo</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-4"data-aos="fade-up" data-aos-duration="1500">
          <div class="portfoli-img py-3">
            <img class="img-thumbnail " src="image/6.png">
            <h4>Private holiday</h4>
            <a class="text-danger text-decoration-none fs-5 mt-0 ms-0" href="image/6.png">Live Demo</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-4"data-aos="fade-up" data-aos-duration="1500">
          <div class="portfoli-img py-3">
            <img class="img-thumbnail " src="image/7.png">
            <h4>Private holiday</h4>
            <a class="text-danger text-decoration-none fs-5 mt-0 ms-0" href="image/7.png">Live Demo</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-4"data-aos="fade-up" data-aos-duration="1500">
          <div class="portfoli-img py-3">
            <img class="img-thumbnail" src="image/8.png">
            <h4>Private holiday</h4>
            <a class="text-danger text-decoration-none fs-5 mt-0 ms-0" href="image/8.png">Live Demo</a>
          </div>
        </div>
      </div>
    </div>
    <!-- portfolio end here -->
  </section>
  <!-- contact start here -->
  <section id="contact" class="contact py-3">
    <div class="container-lg py-4"  >
      <div class="row justify-content-center">
        <div class="section-titel text-center py-5"data-aos="fade-up" data-aos-duration="1500">
          <h2 class="fw-bold">Contact</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5"data-aos="fade-up" data-aos-duration="1500">
          <div class="contact-text d-flex mb-3 py-3">
            <div class="icon-item">
              <i class="bi bi-envelope-check-fill text-danger fs-3"></i>
            </div>
            <div class="contact-text ps-4"data-aos="fade-up" data-aos-duration="1500">
              <h4 class="">Email</h4>
              <a href="mailto:pritladani07@gmail.com" class="text-muted text-decoration-none">pritladani07@gmail.com</a>
            </div>
          </div>
          <div class="contact-text d-flex mb-3 py-3"data-aos="fade-up" data-aos-duration="1500">
            <div class="icon-item">
              <i class="bi bi-telephone-fill text-danger fs-3"></i>
            </div>
            <div class="contact-text ps-4">
              <h4 class="">Phone</h4>
              <a href="tel:+9199525868" class="text-muted text-decoration-none">(+91)9099525868</a>
            </div>
          </div>
          <div class="contact-text d-flex mb-3 py-3"data-aos="fade-up" data-aos-duration="1500">
            <div class="icon-item">
              <i class="bi bi-geo-alt-fill text-danger fs-3"></i>
            </div>
            <div class="contact-text ps-4 ">
              <h4 class="">visit</h4>
              <a href="https://goo.gl/maps/hc6RMqokpWvc8Ve69" class="text-muted text-decoration-none">Rajkot</a>
            </div>
          </div>
        </div>
        <div class="col-md-7"data-aos="fade-up" data-aos-duration="1000">
          <form class="myfrom" method="post" action="mail.php">
            <div class="row">
              <div class="form-group mt-2 col-md-6">
                <input type="text" name="fname" placeholder="FirstName *" required class="form-control">
              </div>
              <div class="form-group mt-2 col-md-6">
                <input type="text" name="lname" placeholder="LastName *" required class="form-control">
              </div>
            </div>
            <div class="input-group mt-2">
              <input type="text" name="email" placeholder="Email *" required class="form-control">
            </div>
            <div class="input-group mt-2">
              <input type="text" name="phone" placeholder="Phone *" required class="form-control">
            </div>
            <div class="input-group mt-2">
              <textarea name="message" placeholder="Message *" required class="form-control"></textarea>
            </div>

            <div class="row">
              <div class="form-group mt-2 col-sm-2">
                <input type="submit" name="register" value="Send" class="btn btn-danger text-white">
              </div>
              <div class="form-group mt-2 col-sm-2">
                <input type="reset" value="reset" class="btn btn-danger text-white">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer border-top py-4">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-12"data-aos="fade-up" data-aos-duration="1500">
          <p class="m-0 text-center text-muted fw-light">Developed by <span class="fw-bold text-dark">@Prit Ladani</span></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- aos animation js -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

</body>
<script>
  var typing = new Typed(".text", {
    strings: ["Front-end developer", "React Developer", "Web Designer",],
    typeSpeed: 100,
    backSpeed: 30,
    loop: true,
  });
</script>



</html>