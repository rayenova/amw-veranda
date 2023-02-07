<?php

header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$dataString = json_decode(file_get_contents("php://input"), true);

$headers = "From: ranimm01@hotmail.com\r\n";

$to = "ranimm01@hotmail.com";
$subject = "Offerte form submission";
$message = "Form data:\n";
$message .= "Name: " . $dataString['contactInformatie']['name'] . "\n";
$message .= "Last Name: " . $dataString['contactInformatie']['lastname'] . "\n";
$message .= "Postcode: " . $dataString['contactInformatie']['postcode'] . "\n";
$message .= "Address: " . $dataString['contactInformatie']['adress'] . "\n";
$message .= "Email: " . $dataString['contactInformatie']['email'] . "\n";
$message .= "Phone: " . $dataString['contactInformatie']['phone'] . "\n\n";
$message .= "Color: " . $dataString['Materialen']['color'] . "\n";
$message .= "Dak: " . $dataString['Materialen']['dak'] . "\n";
$message .= "Voorkant: " . $dataString['Materialen']['voorkant'] . "\n";
$message .= "Zijwand Links: " . $dataString['Materialen']['zijwandLinks'] . "\n";
$message .= "Zijwand Rechts: " . $dataString['Materialen']['zijwandRechts'] . "\n";
$message .= "Spie Links: " . $dataString['Materialen']['spieLinks'] . "\n";
$message .= "Spie Rechts: " . $dataString['Materialen']['spieRechts'] . "\n";
$message .= "Spotjes: " . $dataString['Materialen']['spotjes'] . "\n\n";
$message .= "Breedte: " . $dataString['Afmetingen']['breedte'] . "\n";
$message .= "Diepte: " . $dataString['Afmetingen']['diepte'] . "\n";
$message .= "Opmerking: " . $dataString['Afmetingen']['opmerking'] . "\n";

if (mail($to, $subject, $message, $headers)) {
  echo json_encode(["status" => "Success"]);
  } else {
  echo json_encode(["status" => "Failure"]);
}
?>
