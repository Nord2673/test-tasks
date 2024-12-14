<?php
    $startHour = 9;
    $endHour = 19;
    $hour = $_REQUEST["hh"];
    $minute = $_REQUEST["mm"];
    $second = $_REQUEST["ss"];
    $response = "success";

    if ($hour < $startHour || $hour > $endHour) $response = "fail";

    if ($hour == $endHour && $minute > 0) $response = "fail";

    if ($hour == $endHour && $second > 0) $response = "fail";

    echo $response;
?>