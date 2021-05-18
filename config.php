<?php

    session_start();

    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "en";
    elseif (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "ru") {
            $_SESSION['lang'] = "ru";
        } elseif ($_GET['lang'] == "uk") {
            $_SESSION['lang'] = "uk";
        } else {
            $_SESSION['lang'] = "en";
        }
    }

    require_once "languages/" . $_SESSION['lang'] . ".php";