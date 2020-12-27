<?php
include_once './../src/Rsa.php';

use syrecords\Rsa;

$privateKey = './key/private_key.pem';
$publicKey = './key/rsa_public_key.pem';
$rsa = new Rsa($privateKey, $publicKey);


$originData = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique mattis eros, in scelerisque diam tempor sed. Sed sodales ante nunc, id feugiat ligula blandit ac. Vivamus fringilla feugiat nisl, et porttitor urna viverra eu. Donec diam sem, elementum quis nunc at, maximus facilisis turpis. Quisque pharetra orci urna, eu venenatis purus pharetra ac. In elementum pulvinar nisl, a condimentum sem lacinia at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec congue metus nec massa pharetra maximus. Duis aliquet fermentum ante, nec convallis lacus dignissim a. In molestie, leo non tristique maximus, lectus orci eleifend felis, id hendrerit odio est vel lacus. Nullam porta gravida interdum. Pellentesque non diam sit amet orci mattis luctus. Donec vel arcu dapibus, lobortis turpis id, aliquam lectus. Aliquam erat volutpat. Aliquam mi ex, eleifend sed dictum sit amet, fermentum in libero. In malesuada enim tellus, ut interdum ligula ullamcorper nec. Integer mattis nibh sit amet";

$ecryptionData = $rsa->privEncrypt($originData);
$decryptionData = $rsa->publicDecrypt($ecryptionData);

echo 'encryption Data ：' . $ecryptionData . PHP_EOL;
echo 'Decription Data: ' . $decryptionData;

echo '<hr/>';

$ecryptionData = $rsa->publicEncrypt($originData);
$decryptionData = $rsa->privDecrypt($ecryptionData);
echo 'encryption Data: ' . $ecryptionData;
echo '<br>Decription Data: ' . $decryptionData;
