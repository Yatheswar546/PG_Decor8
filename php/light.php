<?php
    session_start();
    $_SESSION['mode'] =  ' ';
    $_SESSION['icon'] = 'moon';
    echo "<script>history.back()</script>";
?>