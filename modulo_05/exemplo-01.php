<?php

    echo date("d/m/Y H:i:s");
    echo "<br />";
    echo time();


    echo "<br />";

    // echo strtotime("2001-09-11");

    $ts = strtotime("+1 week");

    echo date("d/m/Y", $ts);


?>