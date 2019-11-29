<?php
    $num1 = askNumber('wat is nummer 1?', true);
    $num2 = askNumber('klootzak vertel je nummer!', false);

    function askNumber($question, $numCheck) {
        $num = readline($question);
        if ($numCheck){
            if (!is_numeric($num)){
                exit('ongeldig');
            }
        }
        return $num;
    }
?>