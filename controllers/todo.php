<?php

require 'models/todo.php';

class Todo
{

    private $todomodel;
    private $session;

    public function __construct()
    {
        $this->todomodel = new todomodel();
        $this->session = new Session();
    }

    public function getAllTask()
    {
        $tasks = $this->todomodel->getAllTask();
        require 'views/preview.php';
        exit;
    }

    public function addTask()
    {
        require 'views/create.php';
        exit;
    }

    public function saveTask()
    {
        $task = $_POST['new-task'];
        if (trim(empty($task))) {

            $this->session->saveFlashData('message','Cannot be empty !');
            $this->session->saveFlashData('status',false);
            header("Location: $GLOBALS[site_url]/add");
            exit;
        }
        $this->todomodel->saveTask($task);

        header("Location: $GLOBALS[site_url]");
        exit;
    }

    public function editTask($id)
    {
        $task = $this->todomodel->getTask($id);
        require 'views/edit.php';
        exit;
    }

    public function updateTask()
    {
        $id = $_POST['id'];
        $task = $_POST['edited-task'];
        $this->todomodel->updateTask($id, $task);
        header("Location: $GLOBALS[site_url]");
        exit;
    }

    public function deleteTask($id)
    {
        $this->todomodel->deleteTask($id);
        header("Location: $GLOBALS[site_url]");
        exit;
    }
}
