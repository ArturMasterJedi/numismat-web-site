<?php
function myProtect($value){
    $value = trim($value);//Delete 'space' in start
    if (get_magic_quotes_gpc()) $value=stripcslashes($value);
    $value = htmlspecialchars($value,ENT_QUOTES);
    $value = str_replace('/n', '', $value);
    $value = str_replace('/r', '', $value);
    return $value;
}
?>