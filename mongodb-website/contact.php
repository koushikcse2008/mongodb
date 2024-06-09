<?php
//composer require mongodb/mongodb
require_once __DIR__ . '/vendor/autoload.php';
$client = new MongoDB\Client;
$schoolDB = $client->school_website;
$contactsCollection = $schoolDB->contacts;
$inserted = 0;
if(isset($_POST["btnSend"]))
{
    //echo "<pre>"; print_r($_REQUEST); die();
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    $insertCount = $contactsCollection->insertMany([
        [
           'name' => $name,
           'phone' => $phone,
           'email' => $email,
           'message' => $message,
        ]
    ]);

    if($insertCount->getInsertedCount() > 0)
    {
        $inserted = 1;
    }    
}

$pagesCollection = $schoolDB->pages;
$page = $pagesCollection->findOne(
  ['page_id' => 5]
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
<?php require_once("header_inner.php"); ?>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <h2 class="main-heading"> <?php echo $page["page_header"]; ?> </h2>
      <p class="text-center"><?php echo $page["page_content"]; ?></p>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                <?php if($inserted == 1) { ?>
                    <div class="alert alert-success">Successfully sent.</div>
                <?php } ?>
                <form action="contact.php" method="post">
                  <div>
                    <input type="text" name="name" id="name" value="" placeholder="Name" class="bg-dark text-white" />
                  </div>
                  <div>
                    <input type="text" name="phone" id="phone" value="" placeholder="Phone Number" class="bg-dark text-white" />
                  </div>
                  <div>
                    <input type="email" name="email" id="email" value="" placeholder="Email" class="bg-dark text-white" />
                  </div>
                  <div>
                    <textarea name="message" id="message" placeholder="Message" cols="33" rows="4" class="bg-dark text-white resize-none" style="resize: none;"></textarea>
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="btnSend" id="btnSend" class="btn btn-success"> Send </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- end contact section -->

  <!-- footer section -->
  <?php require_once('footer.php'); ?>
  <!-- footer section -->

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