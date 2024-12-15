<?php
    $ini_array = parse_ini_file("settings.ini");
    // session_start();
    // $_SESSION["showSeconds"] = $ini_array["showSeconds"];
    // $_SESSION["timePattern"] = $ini_array["timePattern"];
    // $_SESSION["lang"] = $ini_array["lang"];
    header("Location: widget-request-consultation-index.php?" . http_build_query($ini_array));
?>