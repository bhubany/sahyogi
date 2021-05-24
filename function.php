<?php

function validate($field){
    if($field == ""){
        echo "Empty Field";
    }
    if(len($field)>255){
        echo "Out of bounds";
    }
}
?>

















?>