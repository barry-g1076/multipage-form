<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Academic</title>
    <link rel="stylesheet" type="text/css" href="view.css" media="all">
    <script type="text/javascript" src="view.js"></script>
    <style>
        /* Style for the container of each set of data */
        .data-container {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        /* Style for the key (label) */
        .key {
            font-weight: bold;
        }

        /* Style for the value */
        .value {
            margin-left: 10px;
        }
    </style>

</head>

<body id="main_body">

    <img id="top" src="/images/top.png" alt="">
    <div id="form_container">

        <h1><a>Academic</a></h1>
        <?php
        if (isset($_COOKIE['storedData'])) {
            $serializedData = $_COOKIE['storedData'];
            $retrievedData = unserialize($serializedData);
            echo '<div class="data-container">';
            echo '<h2>Personal Information</h2>';
            foreach ($retrievedData as $key => $value) {
                echo '<p><span class="key">' . $key . ':</span> <span class="value">' . $value . '</span></p>';
            }
            echo '</h1>';
        }

        if (isset($_COOKIE['contactData'])) {
            $serializedData = $_COOKIE['contactData'];
            $retrievedData = unserialize($serializedData);
            echo '<div class="data-container">';
            echo '<h2>Contact Information</h2>';
            foreach ($retrievedData as $key => $value) {
                echo '<p><span class="key">' . $key . ':</span> <span class="value">' . $value . '</span></p>';
            }
            echo '</div>';
        }

        if (isset($_COOKIE['academicData'])) {
            $serializedData = $_COOKIE['academicData'];
            $retrievedData = unserialize($serializedData);
            echo '<div class="data-container">';
            echo '<h2>Academic Information</h2>';
            foreach ($retrievedData as $key => $value) {
                echo '<p><span class="key">' . $key . ':</span> <span class="value">' . $value . '</span></p>';
            }
            echo '</div>';
        }
        ?>
        <div id="footer">
            Completed by [1900204] [Sheldon Smith].
        </div>
    </div>
    <img id="bottom" src="/images/bottom.png" alt="">

</body>

</html>