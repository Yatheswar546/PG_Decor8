<?php
    session_start();
    $_SESSION['mode'] =  'dark';
    $_SESSION['icon'] = 'sun';
    echo "<script>history.back()</script>";
?>