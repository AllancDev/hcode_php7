<?php


    function soma(float ...$valores):float {
        return array_sum($valores);
    }


    echo soma(1.2, 5.9);
?>