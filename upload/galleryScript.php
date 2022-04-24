<?php
session_start();
include('../includes/header.html');
?>

<!--	<html>

<head>	-->
<link rel='stylesheet' href='picStyle.css' />
<!--	</head>

<body>	-->
<?php
$image = $_GET['picture'];

echo "<img class='bigPic' src='." . $image . "'>";
?>

<h1 style="text-align:center"><a href="../app.php">Back to Hope Page</h1>

<!--	</body>

</html>	-->
<?php
include('../includes/footer.html');
?>