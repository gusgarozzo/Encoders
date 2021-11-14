<?php

require_once './libs/smarty/Smarty.class.php';

class listView{

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showhome($folders){
        $this->smarty->assign("folders", $folders);
        $this->smarty->display('../templates/index.tpl');
    }

    function showTasks($tasks, $folders){
        $this->smarty->assign("tasks", $tasks);
        $this->smarty->assign("folders", $folders);
        $this->smarty->display('../templates/todolist.tpl');
    }

    function showEditTaskForm($task){
        $this->smarty->assign("task", $task);
        $this->smarty->display('../templates/editTask.tpl');
    }


}