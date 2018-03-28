<?php

$quirks = array(null, true, false, 0, 1, '', "\0", "unset");

foreach($quirks as $var) {
    if ($var === "unset") unset($var);

    echo is_null($var) ? 1 : 0;
    echo isset($var) ? 1 : 0;
    echo "\n";
}

?>
