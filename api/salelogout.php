<?php
session_start();  
unset($_SESSION['sale_id']);  
session_destroy();  
header("location: ../Sales/index.html");  
?> 