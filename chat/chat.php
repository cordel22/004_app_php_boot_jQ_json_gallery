<?php
/*  tento fle je included...
Notice: session_start(): Ignoring session_start() because a session is already active in C:\Users\Sisi\Desktop\akcia_14_07_21\php-14-07-21\wa4e_php_mysql_jquery\002_app_php_boot_jQ_json_chat\chat\chat.php on line 2
*/
//  session_start();
//  include('../includes/header.html');
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
}
?>
<!--	<html>
<head>	
</head>

<body>-->
<h1>Chat</h1>
<form method="post" action="app.php">
  <p>
    <input type="text" name="message" size="60" />
    <input type="submit" value="Chat" />
    <input type="submit" name="reset" value="Reset" />
    <a href="chat/chatlist.php" target="_blank">chatlist.php</a>
  </p>
</form>
<div id="chatcontent">
  <img src="chat/spinner.gif" alt="Loading..." />
</div>
<script type="text/javascript" src="chat/jquery.min.js">
</script>
<script type="text/javascript">
  function updateMsg() {
    window.console && console.log('Requesting JSON');
    $.getJSON('chat/chatlist.php', function(rowz) {
      window.console && console.log('JSON Received');
      window.console && console.log(rowz);
      $('#chatcontent').empty();
      for (var i = 0; i < rowz.length; i++) {
        arow = rowz[i];
        $('#chatcontent').append('<p>' + arow[0] +
          '<br/>&nbsp;&nbsp;' + arow[1] + "</p>\n");
      }
      setTimeout('updateMsg()', 4000);
    });
  }

  // Make sure JSON requests are not cached
  $(document).ready(function() {
    $.ajaxSetup({
      cache: false
    });
    updateMsg();
  });
</script>
<!--	</body>	-->
<?php
//  include('../includes/footer.html');
?>