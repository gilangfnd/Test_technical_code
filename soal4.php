<?php

$angka =1345000;
$split = str_split ($angka);
$len = count($split);
for ($i= 0; $i<=$len - 1; $i++){
    echo $split[$i];
    for($j= 0; $j < $len + $i - 6; $j++){
        echo '0';
    }
    echo '<br/>';
    
}