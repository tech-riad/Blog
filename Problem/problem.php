<?php
$a = 5;  // Number of rows.
for($i=1;$i<=$a;$i++){
    echo str_repeat(' ', $a-$i) . str_repeat('#', $i);
    echo '<br> ';

}


$b = 10;
for($i=1;$i<=$b;$i++){
    echo str_repeat(' ', $b-$i) . str_repeat('#', $i);
    echo '<br>';
    
}
?>