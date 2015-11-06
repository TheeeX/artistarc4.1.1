<?php
ini_set("display_errors", "On");
 
try{
    $mongo = new Mongo("mongodb://karanjeet96:wazxdws123@ds052408.mongolab.com:52408/artistarc_alpha");
    //$registrations = $db->selectCollection('artistarc_alpha', 'registrations');
        echo "sucess!<br />";
        $db = $mongo->artistarc_alpha;
        $collection = $db->artist_reg;
        $cursor = $collection->find();
 
 echo "success!<br>";

}catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "<br />";
}

 foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>testyo</title>
    </head>
    <body>
        
    </body>
</html>
