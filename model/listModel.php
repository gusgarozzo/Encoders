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

    function insertTask($id, $task){
        $query=$this->db->prepare("INSERT INTO tasks (folder_id, tarea) VALUES(?,?)");
        $query->execute(array($id, $task));
        return $query->rowCount();
    }

    function getTaskById($id){
        $query=$this->db->prepare('SELECT * FROM tasks WHERE id=?');
        $query->execute(array($id));
        $task = $query->fetchAll(PDO::FETCH_OBJ);
        return $task;  
    }

    function editTask($folder, $task, $id){
        $query=$this->db->prepare("UPDATE tasks SET tasks.folder_id=?, tasks.tarea=? WHERE tasks.id=?");
        $query->execute(array($folder, $task, $id));
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

    function getTasksByIdFolder($id){
        $query=$this->db->prepare('SELECT * FROM tasks WHERE folder_id=?');
        $query->execute(array($id));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function deleteFolder($id){
        $query=$this->db->prepare("DELETE FROM folders WHERE id_folder=?");
        $query->execute(array($id));
        return $query->rowCount();
    }


}