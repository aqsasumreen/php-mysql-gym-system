<?php
    session_start();
    session_destroy();
    header("Location: /21/index.php");
?>