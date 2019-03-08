<?php

    function soma(int  ...$valores) {
        return array_sum($valores);
    }


    echo soma(2, 2, 5, 9);
    echo "<br />";
    echo soma(1.5, 5, 9);


?>