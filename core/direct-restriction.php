<?php

if (@empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && @$_SERVER["HTTP_X_REQUESTED_WITH"] != "XMLHttpRequest") {
    if (realpath($_SERVER["SCRIPT_FILENAME"]) == __FILE__) { // direct access denied
        die("Direct access not allowed :)");
        exit;
    }
}

