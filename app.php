<?php
session_start();
include('./includes/header.html');
?>
<html>

<!-- <head>
</head>	-->

<body style="font-family: sans-serif;">

    <div class="container-fluid">
        <h1>Cool Application</h1>
        <?php
        if (isset($_SESSION["success"])) {
            echo ('<p style="color:green">' . $_SESSION["success"] . "</p>\n");
            unset($_SESSION["success"]);
        }

        // Check if we are logged in!
        if (!isset($_SESSION["account"])) { ?>
            <p>Please <a href="login/login.php">Log In</a> to start.</p>
        <?php } else { ?>
            <p>Maybe some Menu here..?</p>
            <div id="chat">
                <?php
                include('./chat/chat.php');
                ?>
            </div>
            <div id="engines">
                <?php
                include('./engines/engines.php');
                ?>
            </div>
            <div id="gallery">
                <?php
                include('./upload/gallery.php');
                ?>
            </div>
            <div id="upload">
                <?php
                include('./upload/uploadForm.html');
                ?>
            </div id="logout">
            <p>Please <a href="login/logout.php">Log Out</a> when you are done.</p>
        <?php } ?>
    </div>
    <!-- </body>

</html> -->

    <?php
    include('./includes/footer.html');
    ?>