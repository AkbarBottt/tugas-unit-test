<?php
    require_once 'Validator.php';

    $testCases = [
        "Akbar Eka Saputra",
        20,
        "",
    ];

    foreach ($testCases as $case) {
        try {
            $result = validateName($case);
            echo "Valid name ". "\"" . $case . "\"" . " " . "\n";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "\n";
        }
    }
