<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected label value
    $selectedLabel = isset($_POST['label']) ? $_POST['label'] : '';

    // Store the selected label in the session
    $_SESSION['selectedLabel'] = $selectedLabel;

    // Redirect to the landing page
    header("Location: landing.php");
    exit();
}

// Default label if none is selected
$selectedLabel = $_SESSION['selectedLabel'] ?? 'default';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h2>Selected Text Label:</h2>
    <?php
    // Display the selected label
    if ($selectedLabel == 'dog') {
        echo '<p>This is the Dog Label</p>';
    } elseif ($selectedLabel == 'cat') {
        echo '<p>This is the Cat Label</p>';
    } else {
        echo 'No label selected';
    }
    ?>
</body>
</html>
