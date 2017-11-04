<?php

$password = $argv[1];
$password_hash = password_hash($password, PASSWORD_BCRYPT);

echo "The password hash of '$password' is: $password_hash\n\n";
