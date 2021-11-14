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
        $tasks = $this->listModel->getTasks();
        $folders = $this->listModel->getFolders();
        $this->listView->showTasks($tasks, $folders);
    }

    function getTaskID($params = null){
        if((isset($params[':ID']))){
            $task_id = $params[':ID'];
            $action=$this->listModel->getTaskById($task_id);

            if($action){
                $this->listView->showEditTaskForm($action);
            }else{
                //$this->admView->renderError("Hubo un error. Revise y reintente");
            }
            
        }else{
           // $this->admView->renderError("Hubo un error. Reintente");
        }
    }

    function insertTask(){
        if((isset($_POST['newTask'])) && ($_POST['id'])){
                $task = $_POST['newTask'];
                $folder_id = $_POST['id'];
                $action=$this->listModel->insertTask($folder_id, $task);
                
                if($action > 0){
                    header("Location:".BASE_URL."tasks");
                }else{
                    var_dump("error 1");
                }
                
            }else{
                var_dump("error 2");
            }
    }

    function editTasks(){
        if(isset($_POST['id']) && ($_POST['task'])){
            $id = $_POST['id'];
            $task = $_POST['task'];
            $action = $this->listModel->editTask($task, $id);

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



}
