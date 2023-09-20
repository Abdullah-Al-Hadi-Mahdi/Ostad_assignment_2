<?php

    echo "For loop for even numbers: ";
        for ($i = 2; $i <= 20; $i += 2) {
            echo $i . " ";
        }
    echo"<br>";
    echo"<br>";

    echo "While loop for even numbers: ";
        $i = 2;
            while ($i <= 20) {
                echo $i . " ";
                    $i += 2;
            }
    echo "<br>";
    echo"<br>";


    echo "DoWhile loop for even numbers: ";
        $i = 2;
            do {
                echo $i . " ";
                    $i += 2;
            }
             while ($i <= 20);

