<?php

if (!defined('ABSPATH')) {
    die('-1');
}
console("init");

function console($txt, $key = null)
{
    echo '
    <script>
    console.log("moein - ' . $key . ' - ' . $txt . '");
    </script>
    ';
}

include_once('resource/services_single.php');