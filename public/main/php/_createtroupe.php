<?php

include 'connect.php';

session_start(); // Start the session

// select the collection
$art_troupe = $db->art_troupe;

// echo "wtf";

// if (!empty($_POST['user'])) {
//   // do stuff
// }

$troupe_members=explode(',', $_POST['troupe_members']);

$document = array( 
      "troupe_name" => $_POST['troupe_name'],
      "troupe_admin" => $_SESSION['UserName'],
//       "troupe_username" => $_SESSION['id'],
      "troupe_time" =>  date('j-m-y h-i-s'),
      "troupe_members" => $troupe_members
   );
    
$art_troupe->insert($document);
   
//  echo "success!<br>";
 
/*
 $cursor = $collection->find();
 
 foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
 */
?>