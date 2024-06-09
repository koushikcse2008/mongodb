<?php
//composer require mongodb/mongodb
require_once __DIR__ . '../../vendor/autoload.php';
$client = new MongoDB\Client;
$schoolDB = $client->school_website;
$pagesCollection = $schoolDB->pages;
$updated = 0;

$edit_id = $_GET["id"];
$pages = $pagesCollection->findOne(
    ['_id' => new MongoDB\BSON\ObjectId($edit_id)]
);

if(isset($_POST["pageEdit"]))
{
    //echo "<pre>"; print_r($_REQUEST); die();
    $page_id = $_REQUEST["page_id"];
    $page_header = $_REQUEST['page_header'];
    $page_content = $_REQUEST['page_content'];

    $insertCount = $pagesCollection->updateOne(
        [ '_id' => new MongoDB\BSON\ObjectId($page_id)],
        [ '$set' => [ 'page_header' => $page_header, 'page_content' => $page_content]]
    );

    if($insertCount->getModifiedCount() > 0) { $updated = 1; }

    $pages = $pagesCollection->findOne(
        ['_id' => new MongoDB\BSON\ObjectId($page_id)]
    );
    
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
            <h2 class="mb-3 text-danger text-center fw-bold">Update Page: <?php echo $pages->page_name; ?></h2>

            <div class="col-lg-3">&nbsp;</div>
            <div class="col-lg-6 mb-4 border border-3 border-primary p-4 rounded">
                <?php if($updated == 1) { ?>
                    <div class="alert alert-success">Successfully updated.</div>
                <?php } ?>

                <form method="post" action="pages_edit.php?id=<?php echo $edit_id; ?>" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="page_header" class="form-label fw-bold text-success">Page Header:</label>
                    <input type="text" class="form-control" id="page_header" name="page_header" value="<?php echo $pages->page_header; ?>" />
                </div>
                <div class="mb-3">
                    <label for="page_content" class="form-label fw-bold text-success">Page Content:</label>
                    <textarea class="form-control" id="page_content" name="page_content" rows="10" style="resize: none;"><?php echo $pages->page_content; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="page_image" class="form-label fw-bold text-success">Page Image:</label><br />
                    <input type="file" id="page_image" name="page_image" />
                </div>
                <div class="mb-3">                    
                    <button type="submit" id="pageEdit" name="pageEdit" class="btn btn-success">Update Page</button>
                    <input type="hidden" name="page_id" id="page_id" value="<?php echo $edit_id; ?>" />
                    <a class="btn btn-danger" href="pages_list.php"> Back </a>
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
