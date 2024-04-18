<?php

function view(string $file): bool
{

    require_once __DIR__."/views/".$file.".php";
    return true;
}