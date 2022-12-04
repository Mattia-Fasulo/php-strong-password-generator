<?php

function generatePassword($passwordLenght,$allowDuplicate )
{

    $password = '';
    $result = '';
    $characters = [
        'alphabet' => 'qwertyuiopasdfghjklzxcvbnm',
        'alphabetUpp' => 'QWERTYUIOPASDFGHJKLZXCVBNM',
        'numbers' => '1234567890',
        'symbols' => '\|!$%&/()=?^*.,-_#@][><'
    ];

    if (empty($passwordLenght)) {
        $result = 'Nessun parametro valido inserito';
    } elseif ($passwordLenght < 8 || $passwordLenght > 32) {
        $result = 'La lunghezza della password deve essere compresa tra gli 8 e i 32 caratteri';
    } else {
            while (strlen($password) < $passwordLenght) {
                $num = rand(1, 4);
                
                if ($num == 1) {
                    $index = rand(0, strlen($characters['alphabet']));
                    $char = $characters['alphabet'][$index];
                    $password .= $char;
                } 
                elseif ($num == 2) {
                    $index = rand(0, strlen($characters['alphabetUpp']));
                    $char = $characters['alphabetUpp'][$index];
                    $password .= $char;
                } 
                elseif ($num == 3) {
                    $index = rand(0, strlen($characters['numbers']));
                    $char = $characters['numbers'][$index];
                    $password .= $char;
                } 
                else {
                    $index = rand(0, strlen($characters['symbols']));
                    $char = $characters['symbols'][$index];
                    $password .= $char;
                }

               $result = $password; 
            }
            
            
        }
        return $result;
    }
    

