  <?php
  
session_start();
    if(isset($_SESSION['mode'])){
      $mode = $_SESSION['mode'];
    }
    else{
      $mode = '';
    }
    if(isset($_SESSION['icon'])){
      $icon = $_SESSION['icon'];
    }
    else{
      $icon = 'moon';
    }