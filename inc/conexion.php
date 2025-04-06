<?php

try {
     $bd = new mysqli('localhost', 'root', 'root', 'carolina');
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
/*
if($bd->ping() ) {
    echo 'todo bien';

}else{
    echo $bd->connect_error;
}
*/
