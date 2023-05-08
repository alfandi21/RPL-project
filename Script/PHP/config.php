<?php
    // CODE BY JOSUA PINEM

    $conf  = mysqli_connect("localhost","root","","tridarma_ilkomunimed");
    if (mysqli_connect_errno()){
        echo "The Connection is failed : " . mysqli_connect_error();
    }
