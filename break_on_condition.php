<?php

    $n1 = 0;
    $n2 = 1;

        for ($i = 1; $i <= 10; $i++) {
            $number = $n1 + $n2;

             echo "$number ";

                if ($number > 100) {
                    break;
                 }

            $n1 = $n2;
            $n2 = $number;
        }

    echo "\n";
