<?php
/*
 * Authors: George Mcmullen
 * Date: February 19th, 2021
 * File: index.php
 */

//This is my CONTROLLER page

// Start a session
session_start();

//Require the auto autoload file
require_once('vendor/autoload.php');
require_once ("model/data-layer.php");

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('Debug',3);

// Redirect .PHP to / using fat-free
$f3->redirect('GET /index.php','/');

//Define a default route (home page)
$f3->route('GET /', function() {
    // Display a view

    echo "<h1>Midterm Survey</h1>";
    echo "<a href='/SDEV328MIDTERM/Part2/midterm/survey'>Take my Midterm Survey.</a>";

    //creating a new view using the Template constructor
    $view = new Template();
    //echo the view and invoke its render method and supply the path
    echo $view->render('views/home.html');

});

// Define another route
$f3->route('GET /survey', function() {


    // Display a view
    $view = new Template();
    echo $view->render("views/survey.html");
});


//Run fat free
$f3->run();