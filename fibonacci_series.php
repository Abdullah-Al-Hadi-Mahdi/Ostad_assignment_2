<?php
    function fibonacci($count) {
        $n1 = 0;
        $n2 = 1;


        for ($i = 1; $i <= $count; $i++) {
          echo "$n1 ";
          $number = $n1 + $n2;
            $n1 = $n2;
            $n2 = $number;
        }
    }

fibonacci(15);

