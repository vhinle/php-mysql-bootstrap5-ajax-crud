<?php
    
    require 'SQL.php';

    /*
        Retrieves the list of students
    */
    function GetAllStudents($where=null, $orderBy=null){
        $sql = new SQL();
        $query = "SELECT * FROM students ";
        if($where != null) $query = $query . " WHERE {$where} ";
        if($orderBy != null) $query = $query . " ORDER BY {$orderBy} ";

        return $sql->getData($query);
    }

    /*
        Retrieves a student based on ID
    */
    function GetStudentById($id){
        $sql = new SQL();
        $query = "SELECT * FROM students WHERE id={$id}";
        return $sql->getData($query);
    }
    function GetStudentByIdJson($id){
        $sql = new SQL();
        $query = "SELECT * FROM students WHERE id={$id} LIMIT 1";
        return $sql->getData($query);
    }
