<?php
spl_autoload_register(function ($class_name) {
    try {
        // echo $class_name;
        include_once ($class_name . '.php');
    } catch(\Exception $e){
        echo 'Class Error : '.$e->getMessage();
    }
});
?>