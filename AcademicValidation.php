<?php
session_start(); // Start the session
// Define variables to store validation errors
$academicLevelError = $modulesTakenError = $degreePursuingError = "";

// Define variables to store form data
$academicLevel = $modulesTaken = $degreePursuing = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Academic Level
    if (empty($_POST["academic"])) {
        $academicLevelError = "Academic Level is required";
    } else {
        $academicLevel = $_POST["academic"];
    }

    // Validate Number of Modules Taken
    if (empty($_POST["mods"])) {
        $modulesTakenError = "Number of Modules Taken is required";
    } else {
        $modulesTaken = $_POST["mods"];
    }

    // Validate Degree Pursuing
    if (empty($_POST["degree"])) {
        $degreePursuingError = "Degree Pursuing is required";
    } else {
        $degreePursuing = $_POST["degree"];
    }

    // If all fields are valid, you can process the form data
    if (empty($academicLevelError) && empty($modulesTakenError) && empty($degreePursuingError)) {
        // Process the form data (e.g., save to a database or send an email)
        // Redirect to a thank you page or perform other actions
        // For this example, we'll just display a success message
        echo "Form submitted successfully!";
    }
}

// If validation fails, set error messages in the URL
if (!empty($academicLevelError) || !empty($modulesTakenError) || !empty($degreePursuingError)) {
    $_SESSION['academicLevelError'] = $academicLevelError;
    $_SESSION['modulesTakenError'] = $modulesTakenError;
    $_SESSION['degreePursuingError'] = $degreePursuingError;

    header("Location: academic.php");
    exit;
}

// Clear any previous error messages from the session
unset($_SESSION['academicLevelError']);
unset($_SESSION['modulesTakenError']);
unset($_SESSION['degreePursuingError']);
