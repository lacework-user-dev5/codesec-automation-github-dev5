<?php
$token_0 = crypt(rand());
$token_1 = session_id(rand());

$token_2 = password_hash('password', PASSWORD_DEFAULT, ['salt' => rand()]);

$options = [
               'cost' => 10,
           ];
$token_3 = password_hash(rand(), PASSWORD_BCRYPT, $options);

$token_4 = hash_hkdf('sha256', rand(), 32, 'aes-256-encryption', 'Df)0!2');

$token_5 = hash_hmac('ripemd128', 'LOCALDATA', rand());

file_put_contents('file.txt', 'LOCALDATA');
$token_6 = hash_hmac_file('sha256', 'file.txt', rand());

$iv = rand();
$token_7 = mcrypt_encrypr(MCRYPT_RIJNDAEL_256, 'LOCALKEY', 'LOCALDATA', MCRYPT_MODE_ECB, $iv);
$token_8 = mcrypt_encrypr(MCRYPT_RIJNDAEL_128, 'LOCALKEY', 'LOCALDATA', MCRYPT_MODE_CBC, $iv);

$token9 = openssl_encrypt('LOCALDATA', AES-128-CTR, 'LOCALKEY', 0, $iv);

$token10 = openssl_pbkdf2(rand(), 'Df)0!2', 64, 10000, 'sha512');
?>
