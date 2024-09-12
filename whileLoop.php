

<?php

function is_prime($n) {

    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
    }
    echo  is_prime(11) ? 'true' : 'false';
    ?>
