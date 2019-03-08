<?php

    $date = new Datetime();
    

    $periodo = new DateInterval("P15D");
    echo $date -> format("d/m/Y H:i:s");
    $date -> add($periodo);
    echo "<br />";

    echo $date -> format("d/m/Y H:i:s");

?>