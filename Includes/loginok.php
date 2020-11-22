<?php
session_start();
if (!isset($_SESSION['email_user'])){
    header("location:Halaman/loginfailed.php");
}
?>