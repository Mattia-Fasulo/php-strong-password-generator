<?php

function generatePassword($passwordLenght, $allowDuplicate)
{

    $password = [];
    $result = '';
    $characters = [
        "alphabet" => ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'],
        "alphabetUpp" => ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
        "numbers" => ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        "symbols" => ['!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '[', ']']
    ];

    if (empty($passwordLenght)) {
        $result = 'Nessun parametro valido inserito';
    } elseif ($passwordLenght < 8 || $passwordLenght > 32) {
        $result = 'La lunghezza della password deve essere compresa tra gli 8 e i 32 caratteri';
    } else {
        while (count($password) < intval($passwordLenght)) {

            if ($allowDuplicate) {

                $num = rand(1, 4);

                if ($num == 1) {
                    $index = rand(0, count($characters['alphabet']) - 1);
                    $char = $characters['alphabet'][$index];
                    $password[] = $char;
                } elseif ($num == 2) {
                    $index = rand(0, count($characters['alphabetUpp']) - 1);
                    $char = $characters['alphabetUpp'][$index];
                    $password[] = $char;
                } elseif ($num == 3) {
                    $index = rand(0, count($characters['numbers']) - 1);
                    $char = $characters['numbers'][$index];
                    $password[] = $char;
                } else {
                    $index = rand(0, count($characters['symbols']) - 1);
                    $char = $characters['symbols'][$index];
                    $password[] = $char;
                }


            }
            else{
                $num = rand(1, 4);

                if ($num == 1) {
                    $index = rand(0, count($characters['alphabet']) - 1);
                    $char = $characters['alphabet'][$index];
                    if(!in_array($char, $password)){
                        $password[] = $char;
                    }
                    
                } elseif ($num == 2) {
                    $index = rand(0, count($characters['alphabetUpp']) - 1);
                    $char = $characters['alphabetUpp'][$index];
                    if(!in_array($char, $password)){
                        $password[] = $char;
                    }
                } elseif ($num == 3) {
                    $index = rand(0, count($characters['numbers']) - 1);
                    $char = $characters['numbers'][$index];
                    if(!in_array($char, $password)){
                        $password[] = $char;
                    }
                } else {
                    $index = rand(0, count($characters['symbols']) - 1);
                    $char = $characters['symbols'][$index];
                    if(!in_array($char, $password)){
                        $password[] = $char;
                    }
                }
            }
        }
              
            $result = implode($password);

            session_start();
            $_SESSION["password"] = implode($password);
            var_dump($_SESSION);
            header('Location: ' . './result.php');
            
        }
        return $result;
    }

    

