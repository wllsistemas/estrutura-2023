<?php

echo 'EXERCÍCIO 1<br>';

// 2 x 1 = 0
// 2 x 2 = 4
// 2 x 3 = 6

for ($i=0; $i <= 10; $i++)
    echo "2 x $i = ". (2 * $i) ."<br>";


echo '<br>EXERCÍCIO 2<br>';

// 2 x 1 = 0
// 2 x 2 = 4
// 2 x 3 = 6

// 3 x 1 = 0
// 3 x 2 = 6
// 3 x 3 = 9

for ($i=0; $i <= 100; $i++){

    for ($x=0; $x <= 10; $x++) { 
        echo "$i x $x = ". ($i * $x) ."<br>";
    }
    echo "<br>";

}

echo '<br>EXERCÍCIO 3<br>';

// 2 x 1 = 0
// 2 x 2 = 4
// 2 x 3 = 6

// 3 x 1 = 0
// 3 x 2 = 6
// 3 x 3 = 9


for ($i=0; $i <= 10; $i++){

    if($i % 2 != 0){
        for ($x=0; $x <= 10; $x++) { 
            echo "$i x $x = ". ($i * $x) ."<br>";
        }
    }
    echo "<br>";

}
