<?php
// Simulate some simple responses based on user input
$message = $_POST['message'];

$responses = array(
    "hi" => "Hello!",
    "how are you?" => "I'm just a bot.",
    "what's your name?" => "I'm a video bot.",
    // Add more responses as needed
);

$response = $responses[strtolower($message)] ?? "I'm sorry, I don't understand.";

echo $response;