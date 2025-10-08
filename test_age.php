<?php

    require_once 'Validator.php';

    try{
        $result = validateAge("-12");
        echo "Valid age\n";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }