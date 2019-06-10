<?php
//connection string
include 'connecttoaws.php';

// Create a unique bucket name
$bucket = uniqid("umesh", true);

// Create our bucket using our unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));

//HTML to Create our webpage
echo "<h1 align=\"center\">PHP S3 Demo!</h1>";
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket}</h2>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Create a Object in Bucket</a></div>";
?>
