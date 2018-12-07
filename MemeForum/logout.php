<?php

//cryptococcus: deletes all cookies by making them expired and redirects to the main page

foreach($_COOKIE as $key => $value){
    setCookie($key, $value, time() - 3600);
}
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();

?>
