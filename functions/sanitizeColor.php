<?php 
/*________ SANITIZE COLOR ________*/
function sanitizeColor($color) {
    // If color is a string of a one or a zero, return it. Else, return 0.
    if ($color === "1" || $color === "0") {
        return $color;
    } else {
        return "0";
    }
}