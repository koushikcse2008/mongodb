<?php
//composer require mongodb/mongodb
require_once __DIR__ . '/vendor/autoload.php';
$client = new MongoDB\Client(
    'mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass&directConnection=true&ssl=false'
);


$client = new MongoDB\Client;
$companydb = $client->test;
$postsCollection = $companydb->posts;
$posts = $postsCollection->find();

if($posts) {
    foreach($posts as $post)
    {
        echo $post["name"]."<br />"." ".$post["title"]."<br />"." ".$post["desc"]."<br />"."<br />";
    }
}

// $document = $empcollection->findOne(
//     ['username' => 'admin']
// );
//$document = $empcollection->find();
//echo "<pre>"; var_dump($document); echo "</pre>";

// foreach($document as $doc)
// {
//     echo "<pre>"; print_r($doc);
    // if($doc["page_name"]) {
    //     echo $doc["page_name"];
    // }
    // if($doc["page_heading"]) {
    //     echo $doc["page_heading"];
    // }
    // if($doc["page_content"]) {
    //     echo $doc["page_content"];
    // }
//}

// $collection = $client->test->pages;
// $result = $collection->find();
// return $result;

// $insertManyResult = $pages->insertMany([
//     [
//        'username' => 'admin',
//        'email' => 'admin@example.com',
//        'name' => 'Admin User',
//     ],
//     [
//        'username' => 'test',
//        'email' => 'test@example.com',
//        'name' => 'Test User',
//     ],
//  ]);
 
//printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());
?>