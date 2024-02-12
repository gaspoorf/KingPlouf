<?php
/*________ SAVE TIMER ________*/
$time = $_POST['time'];
session_start();

/*________ FORMAT TIME ________*/
function formatTime($value) {
    return ($value < 10) ? "0$value" : $value;
}

/*________ FORMAT TIME ________*/
if ($time < 60) {
    if ($time < 2) {
        $_SESSION['alert'] = "Vous ne méritez pas d'être roi, votre règne a duré $time seconde...";
    } else {
        $_SESSION['alert'] = "Décevant messire, votre règne se compte en secondes, $time précisemment...";
    }
} elseif ($time < 3600) {
    $minutes = floor($time / 60);
    $seconds = $time % 60;
    $_SESSION['alert'] = "Mes félicitations mon roi, votre règne a duré " . formatTime($minutes) . " minute(s) et " . formatTime($seconds) . " seconde(s)";
} else {
    $hours = floor($time / 3600);
    $minutes = floor(($time % 3600) / 60);
    $seconds = $time % 60;
    $_SESSION['alert'] = "Vous êtes grandiose mon altesse, votre règne a duré " . formatTime($hours) . " heure(s) " . formatTime($minutes) . " minute(s) et " . formatTime($seconds) . " seconde(s)";
}
