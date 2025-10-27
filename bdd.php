<?php

function connexion(){
    return new PDO('mysql:dbname=artbox;host=127.0.0.1', 'root', '');
}