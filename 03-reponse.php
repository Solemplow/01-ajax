<?php

echo $a=mt_rand(100, 999);
echo " | ".date("Y-m-d H:i:s");

for($i=$a;$i<99999;$i++){
    echo "$i | ";
}

