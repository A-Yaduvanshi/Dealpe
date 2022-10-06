<?php
session_start();  
unset($_SESSION['Business_Name']);  
session_destroy();  
header("location: ../franchise/index.html");  
?> 