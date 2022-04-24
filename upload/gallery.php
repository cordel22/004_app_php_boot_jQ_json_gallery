<!--	<html>

<head>	-->
<link rel='stylesheet' href='upload/picStyle.css' />
<h1>gallery with own css, link it to its own page perhaps</h1>
<div class="galleryDiv">
  <?php
  $filelist = glob("./pics/*");

  foreach ($filelist as $filename) {
    echo "<a href='upload/galleryScript.php?picture=" .
      $filename . "'><img class='galleryPic' src='" .
      $filename . "'></a>";
  }
  ?>
</div>


<!--	</body>

</html>	-->