<?php

function divide($a, $b) {
    try {
        if ($b == 0) {
            throw new Exception("You cannot divide by zero");

        }
        return $a / $b;

    } catch (Exception $e) {

    return "Exception caught: " . $e->getMessage();

    }
}

echo "Result: " . divide(30, 15);

?>