<?php


// global $__site_config;
// $__site_config_path = "/home/aswinlegarcon/schoolconfig.json";
//  $__site_config = file_get_contents($__site_config_path);

// function get_config($key, $default=null)
// {
//     $array = json_decode($__site_config, true);
//     if (isset($array[$key])) {
//         return $array[$key];
//     } else {
//         return $default;
//     }
// }


function get_templates($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/_templates/$name.php";
}



?>