<?php
for($a = 1;$a <= 100;$a++){
    $c = 0;
    for($b = 1;$b < $a;$b++){
        if($a % $b == 0){
            $c += 1;
        }
        
    }
    if($c == 1){
        echo $a;
        echo "  ";
    }
}
?>