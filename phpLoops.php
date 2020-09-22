<?php
    $numArr = array(1,2,3,4,5,6,7,8,8,9,10,12);
    for($i=0; $i<sizeof($numArr); $i++){
    	if ($numArr[$i]%2 == 0){
            echo "$numArr[$i] ";
        } 
    }
?>