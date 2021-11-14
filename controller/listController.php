<?php

require_once './model/listModel.php';
require_once './view/listView.php';

class listController{
    private $listModel;
    private $listView;

    public function __construct(){
        $this->listModel = new listModel();
        $this->listView = new listView();
    }

    function home(){
        $folders = $this->listModel->getFolders();
        $this->listView->showHome($folders);
    }

    function getTasks(){
        $folders = $this->listModel->getFolders();
        $tasks = $this->listModel->getTasks();
        $this->listView->showTasks($tasks, $folders);
    }

    function getTaskID($params = null){
        if((isset($params[':ID']))){
            $task_id = $params[':ID'];
            $action=$this->listModel->getTaskById($task_id);

            if($action){
                $folders = $this->listModel->getFolders();
                $this->listView->showEditTaskForm($folders, $action);
            }
            
        }
    }

    function insertTask(){
        if((isset($_POST['newTask'])) && (isset($_POST['id']))){
                $task = $_POST['newTask'];
                $id = $_POST['id'];
                $action=$this->listModel->insertTask($id, $task);

                if($action > 0){
                    header("Location:".BASE_URL."tasks");
                }
                
            }
    }

    function editTasks(){
        if(isset($_POST['id']) && ($_POST['task']) && ($_POST['folder'])){
            $id = $_POST['id'];
            $task = $_POST['task'];
            $folder = $_POST['folder'];
            $action = $this->listModel->editTask($folder, $task, $id);

            if($action > 0){
                header("Location:".BASE_URL."tasks");
            }
        }
    }

    function deleteTask($params=null){
        if(isset($params[':ID'])){
            $id = $params[':ID'];
            $action = $this->listModel->deletetaskID($id);

            if($action > 0){
                header("Location:".BASE_URL."tasks");
            }
        }
    }

    function getFoldersAndTasks($params=null){
        if(isset($params[':ID'])){
            $id_folder = $params[':ID'];
            $action = $this->listModel->getTasksByIdFolder($id_folder);

            if($action>0){
                $folders = $this->listModel->getFolders();
                $this->listView->showTasks($action, $folders);
            }
        }
    }

    function getFolders(){
        $folders = $this->listModel->getFolders();
        $this->listView->showFolders($folders);
    }

    function deleteFolder($params=null){
        if(isset($params[':ID'])){
            $id = $params[':ID'];
            $action = $this->listModel->deleteFolder($id);

            if($action > 0){
                header("Location:".BASE_URL."folders");
            }
        }
    }
}
