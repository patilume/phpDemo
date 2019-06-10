<?php
//Connection string
include 'connecttoaws.php';

/*
Files in Amazon S3 are called "objects" and are stored in buckets. A specific
object is referred to by its key (or name) and holds data. In this file
we create an object called phpdemo.txt that contains the data 
'Welcome to object phpdemo.txt!'
and we upload/put it into our newly created bucket.
*/

//get the bucket name
$bucket = $_GET["bucket"];

//create the file name
$key = 'phpdemo.txt';

//put the file and data in our bucket
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "'Welcome to object phpdemo.txt!!"
));

//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded to $bucket</h2>";
echo "<div align = \"center\"><a href=\"readfile.php?bucket=$bucket&key=$key\">Click Here To Read Your File</a></div>";
?>
