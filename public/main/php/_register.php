<?php

include 'connect.php';

// select the collection
$collection = $db->artist_reg;

echo "wtf";

$document = array( 
      "name" => $_POST['input_fname'], 
      "lname" => $_POST['input_lname'],  
      "email" => $_POST['input_email'], 
      "username" => $_POST['input_username'], 
      "pass" => $_POST['input_password'],
      "dob" => $_POST['input_dob'], 
      "class" => $_POST['input_class']
   );
   
    
$collection->insert($document);
   
 $cursor = $collection->find();
 
 echo "success!<br>";

 foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
  
   

?>