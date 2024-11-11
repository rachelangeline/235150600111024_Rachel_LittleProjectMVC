<?php 

setcookie(
    "nama", 
    "Devan", 
    time() + 60
);

header("Location: index.php");  