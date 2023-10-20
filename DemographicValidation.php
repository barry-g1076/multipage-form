<?php
session_start(); // Start the session

// Define variables to store validation errors
$idNumberError = $firstNameError = $lastNameError = $dateOfBirthError = $genderError = "";

// Define variables to store form data
$idNumber = $firstName = $lastName = $dateOfBirth = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate ID Number
    if (empty($_POST["id_number"])) {
        $idNumberError = "ID Number is required";
    } else {
        $idNumber = $_POST["id_number"];
    }

    // Validate First Name
    if (empty($_POST["fname"])) {
        $firstNameError = "First Name is required";
    } else {
        $firstName = $_POST["fname"];
    }

    // Validate Last Name
    if (empty($_POST["lname"])) {
        $lastNameError = "Last Name is required";
    } else {
        $lastName = $_POST["lname"];
    }

    // Validate Date of Birth
    if (empty($_POST["dob"])) {
        $dateOfBirthError = "Date of Birth is required";
    } else {
        $dateOfBirth = $_POST["dob"];
    }

    // Validate Gender
    if (empty($_POST["element_4_1"]) && empty($_POST["element_4_2"])) {
        $genderError = "Gender is required";
    } else {
        $gender = isset($_POST["element_4_1"]) ? "Male" : "Female";
    }

    // If all fields are valid, you can process the form data
    if (empty($idNumberError) && empty($firstNameError) && empty($lastNameError) && empty($dateOfBirthError) && empty($genderError)) {
        // Process the form data (e.g., save to a database or send an email)
        // Redirect to a thank you page or perform other actions
        // For this example, we'll just display a success message
        echo "Form submitted successfully!";
    }
}

// If validation fails, set error messages in the URL
if (!empty($academicLevelError) || !empty($modulesTakenError) || !empty($degreePursuingError)) {
    $_SESSION['idNumberError'] = $idNumberError;
    $_SESSION['firstNameError'] = $firstNameError;
    $_SESSION['lastNameError'] =
    $lastNameError;
    $_SESSION['dateOfBirthError'] =
    $dateOfBirthError;
    $_SESSION['genderError'] = $genderError;

    header("Location: demographic.php");
    exit;
}

// Clear any previous error messages from the session
unset($_SESSION['idNumberError']);
unset($_SESSION['firstNameError']);
unset($_SESSION['lastNameError']);
unset($_SESSION['dateOfBirthError']);
unset($_SESSION['genderError']);

