<?php
/*  tento fle je included...
Notice: session_start(): Ignoring session_start() because a session is already active in C:\Users\Sisi\Desktop\akcia_14_07_21\php-14-07-21\wa4e_php_mysql_jquery\002_app_php_boot_jQ_json_chat\chat\chat.php on line 2
*/
//  session_start();
//  include('../includes/header.html');
/* asi tiez do <>
if (isset($_POST['reset'])) {
  $_SESSION['chats'] = array();
  header("Location:  http://localhost:3000/app.php");
  return;
}
if (isset($_POST['message'])) {
  if (!isset($_SESSION['chats'])) $_SESSION['chats'] = array();
  $_SESSION['chats'][] = array($_POST['message'], date(DATE_RFC2822));
  header("Location:  http://localhost:3000/app.php");
  return;
} */
?>

<!-- 
<h2 class="red-text text-center">Engines App</h2>
 -->

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-8">
      <h2 class="text-primary text-center">Engines App</h2>
      <p>Click here for <a href="#gallery">engines photos</a>.</p>
    </div>
    <!-- <p>Click here for <a href="#gallery">engines photos</a>.</p> -->
    <!--
<a href="#"><img class="smaller-image thick-green-border" src="https://cdn.freecodecamp.org/curriculum/cat-photo-app/relaxing-cat.jpg" alt="A cute orange cat lying on its back."></a>
-->
    <!-- 
<a href="#"><img class="smaller-image thick-green-border" src="./pics/stiahnuť (4).jpg" alt="A cute orange cat lying on its back." /></a>
 -->
    <div class="col-xs-4">
      <a href="#"><img class="img-responsive thick-green-border" src="./pics/stiahnuť (7).jpg" alt="A cute orange cat lying on its back." /></a>
    </div>
  </div>

  <img class="img-responsive" src="./pics/stiahnuť (5).jpg" />

  <div class="row">
    <div class="col-xs-4">
      <button class="btn btn-block btn-primary"><i class="fa fa-thumbs-up"></i> Like</button>
    </div>
    <div class="col-xs-4">
      <button class="btn btn-block btn-info"><i class="fa fa-info-circle"></i> Info</button>
    </div>
    <div class="col-xs-4">
      <button class="btn btn-block btn-danger"><i class="fa fa-trash"></i> Delete</button>
    </div>
  </div>

  <p>Things engines <span class="text-danger">love</span>:</p>
  <ul>
    <li>pistons</li>
    <li>greese</li>
    <li>lubes</li>
  </ul>
  <p>Top 3 things engines hate:</p>
  <ol>
    <li>inflation</li>
    <li>oil crisis</li>
    <li>other engines</li>
  </ol>
  <form action="https://freecatphotoapp.com/submit-cat-photo">
    <div class="row">
      <div class="col-xs-6">
        <label><input type="radio" name="indoor-outdoor"> Indoor</label>
      </div>
      <div class="col-xs-6">
        <label><input type="radio" name="indoor-outdoor"> Outdoor</label>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4">
        <label><input type="checkbox" name="personality"> Loving</label>
      </div>
      <div class="col-xs-4">
        <label><input type="checkbox" name="personality"> Lazy</label>
      </div>
      <div class="col-xs-4">
        <label><input type="checkbox" name="personality"> Crazy</label>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-7">
        <input class="form-control" type="text" placeholder="engine photo URL" required>
      </div>
      <div class="col-xs-5">
        <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>Submit</button>
      </div>
    </div>
  </form>