<?php
$saveDir = "../pics/";
$saveFile = $saveDir . basename($_FILES['fileToUpload']['name']);

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $saveFile)) {
  echo "<h1>Picture Uploaded</h1><br />" .
    $_FILES['fileToUpload']['name'] . " was saved<br />";
  echo "<img src='" . $saveFile . " '><br /><br />";
} else {
  echo "Upload Did Not Work<a href=' ../app.php'>Go Back</a>";
}

echo "<h3>Diagnostic Info:</h3>";
echo "<br />Tmp File Name: " . $_FILES['fileToUpload']['tmp_name'] . "<br />";
echo "saveFile.Variable Valuable: " . $saveFile;
?>

<h1><a href="http://localhost:3000/app.php">Back to Hope Page</a></h1>