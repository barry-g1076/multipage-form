<?php
session_start(); // Start the session

// Define variables to store validation errors
$addressError = $cityError = $stateError = $zipCodeError = $countryError = $contactNumberError = $emailError = "";

// Define variables to store form data
$address = $city = $state = $zipCode = $country = $contactNumber = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Address
    if (empty($_POST["address"])) {
        $addressError = "Street Address is required";
    } else {
        $address = $_POST["address"];
    }

    // Validate City
    if (empty($_POST["city"])) {
        $cityError = "City is required";
    } else {
        $city = $_POST["city"];
    }

    // Validate State / Province / Region
    if (empty($_POST["state"])) {
        $stateError = "State / Province / Region is required";
    } else {
        $state = $_POST["state"];
    }

    // Validate Postal / Zip Code
    if (empty($_POST["postal"])) {
        $zipCodeError = "Postal / Zip Code is required";
    } else {
        $zipCode = $_POST["postal"];
    }

    // Validate Country
    if (empty($_POST["country"])) {
        $countryError = "Country is required";
    } else {
        $country = $_POST["country"];
    }

    // Validate Contact Number
    if (empty($_POST["number"])) {
        $contactNumberError = "Contact Number is required";
    } else {
        $contactNumber = $_POST["number"];
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    } else {
        $email = $_POST["email"];
    }

    // If all fields are valid, you can process the form data
    if (empty($addressError) && empty($cityError) && empty($stateError) && empty($zipCodeError) && empty($countryError) && empty($contactNumberError) && empty($emailError)) {

        $data = [
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'zip' => $zipCode,
            'country' => $country,
            'phone' => $contactNumber,
            'email' => $email
        ];

        $serializedData = serialize($data);
        setcookie('contactData', $serializedData);

        $contactFile = fopen('contact.txt', 'a') or die('unable to open File');
        foreach ($data as $key => $value) {
            fwrite($contactFile, $key . ": " . $value . "\n");
        }
        fclose($contactFile);

        header("Location: academic.php");
        
    }
}

// If validation fails, set error messages in the session
if (!empty($addressError) || !empty($cityError) || !empty($stateError) || !empty($zipCodeError) || !empty($countryError) || !empty($contactNumberError) || !empty($emailError)) {
    $_SESSION['addressError'] = $addressError;
    $_SESSION['cityError'] = $cityError;
    $_SESSION['stateError'] = $stateError;
    $_SESSION['zipCodeError'] = $zipCodeError;
    $_SESSION['countryError'] = $countryError;
    $_SESSION['contactNumberError'] = $contactNumberError;
    $_SESSION['emailError'] = $emailError;

    header("Location: contact.php");
    exit;
}

// Clear any previous error messages from the session
unset($_SESSION['addressError']);
unset($_SESSION['cityError']);
unset($_SESSION['stateError']);
unset($_SESSION['zipCodeError']);
unset($_SESSION['countryError']);
unset($_SESSION['contactNumberError']);
unset($_SESSION['emailError']);
