<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <?php require_once("head.php"); ?>


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->

    <?php require_once("header.php"); ?>

    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Welcome to <br>
            Best educations
          </h3>
          <h1>
            school
          </h1>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised
          </p>
          <div class="hero_btn-continer">
            <a href="" class="call_to-btn btn_white-border">
              <span>
                Contact
              </span>
              <img src="assets/images/right-arrow.png" alt="">
            </a>
          </div>
        </div>
        <div class="assets/hero_img-container">
          <div>
            <img src="assets/images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  
  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
        Our Students Feedback
      </h2>
      <p class="text-center">
        There are many variations of passages of Lorem Ipsum available, but the majority hThere are many variations of
        passages of Lorem Ipsum available, but the majority h
      </p>
      <div class="layout_padding2">
        <div class="client_container d-flex flex-column">
          <div class="client_detail d-flex align-items-center">
            <div class="client_img-box ">
              <img src="assets/images/student.png" alt="">
            </div>
            <div class="client_detail-box">
              <h4>
                Veniam Quis
              </h4>
              <span>
                (exercitation)
              </span>
            </div>
          </div>
          <div class="client_text mt-4">
            <p>
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
              anim id est laborum."


            </p>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- client section -->

  <!-- admission section -->
  <section class="admission_section ">
    <div class="container-fluid position-relative">
      <div class="row h-100">
        <div id="map" class="h-100 w-100 ">
        </div>
        <div class="container">
          <div class="admission_container position-absolute">
            <div class="admission_img-box">
              <img src="assets/images/kidss.jpg" alt="">
            </div>
            <div class="admission_detail">
              <h3>
                Apply for Admission
              </h3>
              <p class="mt-3 mb-4">
                There are many variations of passages of Lorem Ipsum available, but the majority h
              </p>
              <div class="">
                <a href="" class="admission_btn btn_on-hover">
                  Read More
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  <!-- admission section -->


  <!-- landing section -->
  <section class="landing_section layout_padding">
    <div class="container">
      <h2 class="main-heading">
        Free Multipurpose Responsive

      </h2>
      <h2 class="main-heading number_heading">
        Landing Page 2019

      </h2>
      <p class="landing_detail text-center">
        There are many variations of passages of Lorem Ipsum available, but the majority There are many variations of
        passages of Lorem Ipsum available, but the majority h

      </p>
    </div>
  </section>

  <!-- end landing section -->

  <?php require_once("footer.php"); ?>

  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'assets/images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>