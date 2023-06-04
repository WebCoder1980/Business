<?php
    function autov($name) {
        chdir($_SERVER['DOCUMENT_ROOT']);
        $filedir = (getcwd() . '/' . $name);
        echo $name . '?v=' . strval(filemtime($filedir));
    };
?>