<?php
session_start();
print_r($_SESSION);
//session_unset();   // For remove All Session Data
session_destroy(); // For Delete All Session data
//unset($_SESSION["Hello"]);  // For delete specific session variable
?>