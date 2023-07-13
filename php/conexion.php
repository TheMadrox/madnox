<?php
    $enlace = mysqli_connect("localhost","root","","madnox");
    if(!$enlace){
        echo 'Error: '. mysqli_connect_error();
        echo 'Errno: '.mysqli_connect_errno();
        exit();
    }
?>