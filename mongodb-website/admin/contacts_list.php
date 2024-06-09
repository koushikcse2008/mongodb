<?php
//composer require mongodb/mongodb
require_once __DIR__ . '../../vendor/autoload.php';
$client = new MongoDB\Client;
$schoolDB = $client->school_website;
$contactsCollection = $schoolDB->contacts;

if(isset($_GET["id"]))
{
    $delete_id = $_GET["id"];   
    $contactsCollection->deleteOne( array( '_id' => new MongoDB\BSON\ObjectId($delete_id)) );
}

$contacts = $contactsCollection->find();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP MONGODB CRUD</title>
  </head>
  <body>
    
  <?php require_once("nav.php"); ?>
    
      
    <div class="container-fluid mt-4">
       
            <h2 class="mb-3 text-danger text-center fw-bold">Contacts List</h2>

            <?php
            
            if($contacts) {
            foreach($contacts as $contact)
            {
            ?>
            <div class="row">
            <div class="col-lg-3">&nbsp;</div>
            <div class="col-lg-6 mb-4">
            <ul class="list-group border border-2 border-primary">
            <li class="list-group-item"><strong>Name:</strong> <?php echo $contact["name"]; ?></li>
            <li class="list-group-item"><strong>Phone:</strong> <?php echo $contact["phone"]; ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?php echo $contact["email"]; ?></li>
            <li class="list-group-item"><strong>Message:</strong> <?php echo $contact["message"]; ?></li>
            <li class="list-group-item"><a href="contacts_list.php?id=<?php echo $contact["_id"]; ?>" class="btn btn-danger">Delete</a></li>
            </ul>
                
            </div>
            </div>
            <?php } } else { ?>
                <div class="row">
                    <div class="col-lg-3">&nbsp;</div>
                    <div class="col-lg-6 mb-4">
                    <p>No pages found</p>
                    </div>
                </div>
            <?php } ?>
           
       </div>
   </div>






    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
