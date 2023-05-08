<?php
require 'controllers/todo.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$urls = explode('/', $url);  //split the url into an array

switch ($urls[1]) {
    case '/':
        $tasks = new Todo();
        $tasks->getAllTask();
        break;
    case 'add':
        $tasks = new Todo();
        $tasks->addTask();
        break;
    case 'save':
        $tasks = new Todo();
        $tasks->saveTask();
        break;
    case 'edit':
        $tasks = new Todo();
        $tasks->editTask($urls[2]);
        break;
    case 'update':
        $tasks = new Todo();
        $tasks->updateTask();
        break;
    case 'delete':
        $tasks = new Todo();
        $tasks->deleteTask($urls[2]);
        break;
    default:
        $tasks = new Todo();
        $tasks->getAllTask();
        break;
}
