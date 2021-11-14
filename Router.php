<?php
    require_once './controller/listController.php';
    require_once './RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    // LIST CONTROLLER
    $r->addRoute("home", "GET", "listController", "home"); // vista home
    $r->addRoute("tasks", "GET", "listController", "getTasks"); // todas las tareas
    $r->addRoute("insertTask", "POST", "listController", "insertTask"); // agrega tarea
    $r->addRoute("editTask/:ID", "GET", "listController", "getTaskID"); // trae tarea para ser editada
    $r->addRoute("editar", "POST", "listController", "editTasks"); // NO FUNCIONA
    $r->addRoute("delete/:ID", "GET", "listController", "deleteTask"); // elimina tarea

    //Ruta por defecto.
    $r->setDefaultRoute("listController", "home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
