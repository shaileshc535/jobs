<?php
  include('../admin/assets/_dbconnect.php');
  // sec_session_start();
  $_SESSION=array();
  $params=session_get_cookie_params();
  setcookie(session_name(),
  ' ', time()-42000,
  $params["path"],
  $params["domain"],
  $params["secure"],
  $params["httponly"]
);
// setcookie('login','', time()-60*60*24*100);
    session_unset();
    session_destroy();
    header('location:http://materiallibrary.co.in/signin');
  exit;


?>
