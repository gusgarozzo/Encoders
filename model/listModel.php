<?php

class listModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=todolist;charset=utf8', 'root', '');
    }

    function getTasks(){
        $query=$this->db->prepare('SELECT * FROM tasks');
        $query->execute();
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
        return $tasks;  
    }

    function insertTask($id_folder, $task){
        $query=$this->db->prepare("INSERT INTO tasks (id_folder, tarea) VALUES(?,?)");
        $query->execute(array($id_folder, $task));
        return $query->rowCount();
    }

    function getTaskById($id){
        $query=$this->db->prepare('SELECT * FROM tasks WHERE id=?');
        $query->execute(array($id));
        $task = $query->fetchAll(PDO::FETCH_OBJ);
        return $task;  
    }

    function editTask($task, $id){
        $query=$this->db->prepare("UPDATE tasks SET tarea=? WHERE id=?");
        $query->execute(array($task, $id));
        return $query->rowCount();
    }

    function deleteTaskID($id){
        $query=$this->db->prepare("DELETE FROM tasks WHERE id=?");
        $query->execute(array($id));
        return $query->rowCount();
    }

    function getFolders(){
        $query=$this->db->prepare('SELECT * FROM folders');
        $query->execute();
        $folders = $query->fetchAll(PDO::FETCH_OBJ);
        return $folders; 
    }
}