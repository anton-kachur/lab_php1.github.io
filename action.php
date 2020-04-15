<?php
    session_start();

?>

<html>
    <body>
        <?php
            echo $_SESSION['s'];
            unset($_SESSION['s']);
            echo $_SESSION['s'];
            session_destroy();
        ?>
    </body>
</html>