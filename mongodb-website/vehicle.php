<?php
//composer require mongodb/mongodb
require_once __DIR__ . '/vendor/autoload.php';
$client = new MongoDB\Client;
$schoolDB = $client->school_website;

$pagesCollection = $schoolDB->pages;
$page = $pagesCollection->findOne(
  ['page_id' => 4]
);
?>
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
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <?php require_once("header_inner.php"); ?>
  </div>
  <!-- end header section -->


  <!-- vehicle section -->
  <section class="vehicle_section layout_padding">
    <div class="container">
      <h2 class="main-heading "><?php echo $page["page_header"]; ?></h2>
      <p class="text-center"><?php echo $page["page_content"]; ?></p>
      <div class="layout_padding-top">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="vehicle_img-box ">
                <img src="assets/images/bus.png" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="assets/images/bus.png" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="assets/images/bus.png" alt="" class="img-fluid w-100">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- vehicle section -->


  <?php require_once("footer.php"); ?>

  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <!-- progreesbar script -->

  </script>
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

      var image = 'images/maps-and-flags.png';
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