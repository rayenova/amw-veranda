<?php

header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");


$formData = json_decode(file_get_contents("php://input"), true);

$to = "ranimm01@hotmail.com";
$subject = "Offerte form submission";
$message = "Form data:\n";
$message .= "Name: " . $formData['contactInformatie']['name'] . "\n";
$message .= "Last Name: " . $formData['contactInformatie']['lastname'] . "\n";
$message .= "Postcode: " . $formData['contactInformatie']['postcode'] . "\n";
$message .= "Address: " . $formData['contactInformatie']['adress'] . "\n";
$message .= "Email: " . $formData['contactInformatie']['email'] . "\n";
$message .= "Phone: " . $formData['contactInformatie']['phone'] . "\n\n";
$message .= "Color: " . $formData['Materialen']['color'] . "\n";
$message .= "Dak: " . $formData['Materialen']['dak'] . "\n";
$message .= "Voorkant: " . $formData['Materialen']['voorkant'] . "\n";
$message .= "Zijwand Links: " . $formData['Materialen']['zijwandLinks'] . "\n";
$message .= "Zijwand Rechts: " . $formData['Materialen']['zijwandRechts'] . "\n";
$message .= "Spie Links: " . $formData['Materialen']['spieLinks'] . "\n";
$message .= "Spie Rechts: " . $formData['Materialen']['spieRechts'] . "\n";
$message .= "Spotjes: " . $formData['Materialen']['spotjes'] . "\n\n";
$message .= "Breedte: " . $formData['Afmetingen']['breedte'] . "\n";
$message .= "Diepte: " . $formData['Afmetingen']['diepte'] . "\n";
$message .= "Opmerking: " . $formData['Afmetingen']['opmerking'] . "\n";
$headers = "From: ranimm01@hotmail.com\r\n";

if (mail($to, $subject, $message, $headers)) {
  echo json_encode(["status" => "Success"]);
  } else {
  echo json_encode(["status" => "Failure"]);
  }