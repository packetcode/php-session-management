<?php

    $conn = mysqli_connect("localhost", "homestead", "secret", "packetcode_test");

    if(!conn){
        echo "<h3 class='my-3 text-center bg-dark text-white rounded-lg p-3'>Unable to establish connection to Database</h3>";
    }

?>