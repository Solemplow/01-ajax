<?php

$random = mt_rand(1000, 3000);

for($i=5000;$i>=$random;$i--){
    echo "$i | ";
}

echo "c'est fini. maintenant casse toi.";