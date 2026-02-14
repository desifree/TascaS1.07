<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // valida el nombre
    if (empty($_POST["name"])) {
        $errors[] = "The name field cannot be empty";
    }

    // valida la edad
    if (empty($_POST["age"])) {
        $errors[] = "The age field is required.";
    } elseif (!is_numeric($_POST["age"])) {
        $errors[] = "Age must be a numeric value";
    }

    // muestra resultado
    if (empty($errors)) {
        echo "Form submitted successfully!";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        echo '<br><a href="form.php">Go back</a>';
    }
}



?>