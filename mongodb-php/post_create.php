<?php
//composer require mongodb/mongodb
require_once __DIR__ . '/vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client->test;
$postsCollection = $companydb->posts;
$inserted = 0;
if(isset($_POST["postCreate"]))
{
    //echo "<pre>"; print_r($_REQUEST); die();
    $post_name = $_REQUEST['post_name'];
    $post_title = $_REQUEST['post_title'];
    $post_desc = $_REQUEST['post_desc'];

    $insertCount = $postsCollection->insertMany([
        [
           'name' => $post_name,
           'title' => $post_title,
           'desc' => $post_desc,
        ]
    ]);

    if($insertCount->getInsertedCount() > 0)
    {
        $inserted = 1;
    }
    
}

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
    
      
    <div class="container mt-4">
       <div class="row">
            <h2 class="mb-3 text-danger text-center fw-bold">Create Post</h2>

            <div class="col-lg-3">&nbsp;</div>
            <div class="col-lg-6 mb-4 border border-3 border-primary p-4 rounded">
                <?php if($inserted == 1) { ?>
                    <div class="alert alert-success">Successfully created.</div>
                <?php } ?>

                <form method="post" action="post_create.php">
                <div class="mb-3">
                    <label for="post_name" class="form-label fw-bold text-success">Post Name:</label>
                    <input type="text" class="form-control" id="post_name" name="post_name" value="" />
                </div>
                <div class="mb-3">
                    <label for="post_title" class="form-label fw-bold text-success">Post Title:</label>
                    <input type="text" class="form-control" id="post_title" name="post_title" value="" />
                </div>
                <div class="mb-3">
                    <label for="post_desc" class="form-label fw-bold text-success">Post Details:</label>
                    <textarea class="form-control" id="post_desc" name="post_desc" rows="10" style="resize: none;"></textarea>
                </div>
                <div class="mb-3">                    
                    <button type="submit" id="postCreate" name="postCreate" class="btn btn-success">Create Post</button>
                    <a class="btn btn-danger" href="post_list.php"> Back </a>
                </div>
                </form>
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
