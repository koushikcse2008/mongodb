<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP MONGODB ADMIN</title>
  </head>
  <body>
    
  <?php require_once("nav.php"); ?>
    
      
    <div class="container-fluid mt-4">
       <div class="row">
            <h2 class="mb-5 text-danger text-center fw-bold">Necessary Information</h2>

            <div class="col-lg-3">&nbsp;</div>
            <div class="col-lg-6 mb-4">
                <h4 class="fw-bold text-primary">Pre-Requisite:</h4>
                <ul class="list-group">
                    <li class="list-group-item"><strong>PHP version:</strong> 7.4+</li>
                    <li class="list-group-item"><strong>Mongo DB version:</strong> 5.0</li>
                    <li class="list-group-item"><strong>Table (collection in mongodb) Name:</strong> posts</li>
                    <li class="list-group-item"><strong>Table (collection in mongodb) fields:</strong> name, title, desc </li>
                </ul>
            </div>
            <div class="col-lg-3">&nbsp;</div>           
           
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
