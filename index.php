<?php
// get the encrypted data from the POST request
$encrypted_data = $_POST['data'];

// decryption key and initialization vector
$key = 'this_is_a_secret_key';
$iv = 'this_is_a_secret_iv';

// decrypt the data using AES encryption
$decrypted_data = openssl_decrypt(base64_decode($encrypted_data), 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);

// print the decrypted data
echo $decrypted_data;
?>

