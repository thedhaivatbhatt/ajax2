<?php
var_dump($_POST);
extract($_POST);
foreach($_POST as $key => $value)
{
    echo $key."<br>";
};
?>