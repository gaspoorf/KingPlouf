<?php 
/*________ TOGGLE THEME ________*/
function toggleTheme($red, $blue, $green) {
    // Define GPIOs
    $red_gpio = 27;
    $blue_gpio = 4;
    $green_gpio = 17;

    // Red
    system("gpio -g mode " . $red_gpio . " out");
    system("gpio -g write " . $red_gpio . ' ' . $red);

    // Blue
    system("gpio -g mode " . $blue_gpio . " out");
    system("gpio -g write " . $blue_gpio . ' ' . $blue);

    // Green
    system("gpio -g mode " . $green_gpio . " out");
    system("gpio -g write " . $green_gpio . ' ' . $green);
}
