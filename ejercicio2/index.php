<?php

session_start();

// validacion del nombre del campo
function validateName(string $name): string {
    if (empty($name)) {
        throw new Exception("The name field cannot be empty");

    }
    return $name;

}

// validando el campo de edad
function validateAge(string $age): int {
    if (empty($age)) {
        throw new Exception("Thee age field is required");
    }
    if (!is_numeric($age)) {
        throw new Exception("Age must be a numeric value");
    }
    return (int)$age;
}

try {
    if ($_SERVER["REQUEST_METHOD"]!== "POST") {
        throw new Exception("Invalid reqquest metod");
    }

    //Validar campos
    $name = validateName($_POST["name"]);
    $age = validateAge($_POST["age"]);

    // guardar sesion
    $_SESSION["name"] = $name;
    $_SESSION["age"] = $age;

    echo "Form submitted successfully!<br>";
    echo "Saved in session:<br>";
    echo "Name: " . $_SESSION["name"] . "<br>";
    echo "Age: " . $_SESSION["age"] . "<br>";

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";
        echo '<br><a href="form.html">Go back</a>';
        
    }

?>