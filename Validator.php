<?php
    function validateAge($age) {
        
        // memastikan bahwa $age adalah angka
        if(!is_numeric($age)) {
            throw new InvalidArgumentException("Age must be a number.");
        }

        // memastikan bahwa $age tidak bernilai negatif
        if($age < 0) {
            throw new InvalidArgumentException("The number cannot be smaller than 0.");
        }

        return true;
    }

    function validateName($name) {

        // memastikan bahwa $name adalah string
        if(!is_string($name)) {
            throw new InvalidArgumentException("Name must be a string.");
        }
        // memastikan bahwa $name tidak kosong
        if(strlen($name) < 1) {
            throw new InvalidArgumentException("Name cannot be empty.");
        }

        return true;
    }