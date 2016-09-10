<?php

define('DD', realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";

$students = DB::table("students")->get();
var_dump($students);
