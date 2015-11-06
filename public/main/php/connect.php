<?php
// Config
$dbname = 'artistarc_alpha';
  
try{
 
// connect to mongodb MongoLab
//$m = new MongoClient();
$m = new MongoClient( "mongodb://karanjeet96:wazxdws123@ds052408.mongolab.com:52408/artistarc_alpha" ); // connect to a remote host at a given port

//$uri = "mongodb://karanjeet96:wazxdws123@ds052408.mongolab.com:52408";
//$options = array("connectTimeoutMS" => 30000, "replicaSet" => "replicaSetName");
//$m = new Mongo($host, array("replicaSet" => "rs"));

  echo "Connection to database successfully<br>";
//select database
$db = $m->$dbname;
//  echo "Database ". $dbname ." selected<br>";

// select the collection
$collection = $db->artist_reg;
// pull a query

$cursor = $collection->find();
 
 echo "success!<br>";

 foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "<br />";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>home</title>
    </head>
    <body>
        <br>sknsdksndk
    </body>
</html>
