<?php
/**
 * Created by PhpStorm.
 * User: agrisales
 * Date: 28/03/17
 * Time: 09:58 PM
 */


function reverse($inicio, $fin, $decrement) {
    $x = $inicio;
    while ($x >= $fin) {
        print $x. "<br>";
        $x-=$decrement;
    }
}

reverse(100, 0, 20);