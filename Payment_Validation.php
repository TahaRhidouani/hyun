<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

// Posted values only go into a plain-text body sent to a fixed address.
function field($name)
{
    $value = $_POST[$name] ?? '';
    return is_string($value) ? mb_substr(trim($value), 0, 500) : '';
}

$item = field('postitem');
$address = field('postaddress');
$name = field('postname');
$color = field('postcolor');
$size = field('postsize');
// The PayPal order id is also used in the subject, so keep it to plain characters.
$id = preg_replace('/[^A-Za-z0-9-]/', '', field('postid'));

if ($id === '') {
    http_response_code(400);
    exit;
}

$to='hyunsupply@outlook.com';
$subject= 'Payment information for order '.$id;
$message="Item: ".$item."\n"."Shipping address: ".$address."\n"."Color: ".$color."\n"."Name of buyer: ".$name."\n"."Size: ".$size."\n"."Purchase ID: ".$id."\n\n"."Check full payment details: https://www.paypal.com/mep/dashboard";

mail($to, $subject, $message);

?>