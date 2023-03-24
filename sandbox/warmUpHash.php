<?php

$pwd = "PaSsw0rd";

$pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);
//password_hash(string $password, string|int|null $algo, array $options = []): string
$i = 1;