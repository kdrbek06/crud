<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';


/*function whatIsHappening()
{
    echo '<pre>';
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    if(isset($_SESSION)){
        var_dump($_SESSION);
    }
    echo '</pre>';
}
whatIsHappening();*/



$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();



// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->get();



if($_POST)
{
    if (isset($_POST['editedId']))
    {
        $cardRepository->update();
    }
    else
    {
        $cardRepository->create();
    }

    $cards = $cardRepository->get();
}



// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view

if (isset($_GET['edit']))
{
    require 'edit.php';
}
else if (isset($_GET['delete']))
{
    $cardRepository->delete();
    $cards = $cardRepository->get();

// Redirect to index.php
    header("Location: index.php");
}
else
{
    require 'overview.php';
}
