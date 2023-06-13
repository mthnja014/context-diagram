<?php

if(!isset($_POST['submit']))

{

echo "Please enter order details";

{

$name = $_POST['name'];

$surname = $_POST['surname'];

$tshirt = $_POST['tshirt'];

$t = $_POST['t'];

$tcolour = $_POST['tcolour'];

$hoodie = $_POST['hoodie'];

$h = $_POST['h'];

$hcolour = $_POST['hcolour'];

if ($tshirt == "" && $hoodie == "")

{

echo "Please select at least one item to order!";

exit;

}

$email_from = 'njabulo.mrc@gmail.com';

$email_subject = 'Online Order';

$email_body = "Name: $name.\n".

"Surname: $surname.\n".

"Cellphone Number: $contact.\n".

".\n"

"Type of tshirt: $tshirt.\n".

"Colour of tshirt: $tcolour.\n".

"Number of tshirt: $t.\n".

".\n"

"Type of Hoodie: $hoodie.\n".

"Colour of Hoodie: $hcolour.\n".

"Number of Hoodies: $h.\n".

".\n"

$to = "njabulo.mrc@gmail.com";

$headers = "From: $email_from\r\n";

mail($to, $email_subject, $email_body, $headers);

?>
