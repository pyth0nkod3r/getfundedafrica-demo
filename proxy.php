<?php
// proxy.php

// Define allowed URLs (for security)
$allowed_urls = ['https://gfa-tech.com/cipme'];

// URL of the external site (ensure this comes from a safe source)
$url = 'https://gfa-tech.com/cipme';

// Check if the URL is allowed
if (!in_array($url, $allowed_urls)) {
    http_response_code(403);
    echo 'Forbidden';
    exit;
}

// Initialize a cURL session
$ch = curl_init();

// Set the cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
curl_setopt($ch, CURLOPT_HEADER, true); // Include the header in the output
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // Verify SSL certificate

// Execute cURL session
$response = curl_exec($ch);

// Check for cURL errors
if ($response === false) {
    echo 'Error fetching the page: ' . curl_error($ch);
} else {
    // Separate headers and body
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $header_size);
    $body = substr($response, $header_size);

    // Debugging: Output header and body size
    echo "Header size: " . $header_size . "<br>";
    echo "Body size: " . strlen($body) . "<br>";

    // Debugging: Output raw response
    echo "Raw response: <br><pre>" . htmlspecialchars($response) . "</pre>";

    // Send the appropriate headers
    $header_lines = explode("\r\n", $header);
    foreach ($header_lines as $header_line) {
        if (stripos($header_line, 'Content-Type:') === 0 || stripos($header_line, 'Content-Length:') === 0) {
            header($header_line);
        }
    }

    // Output the body
    echo $body;
}

// Close the cURL session
curl_close($ch);
?>
