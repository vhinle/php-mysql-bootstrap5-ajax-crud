<?php
    
    require_once 'libraries/data-api.php';   

    //For JSON
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Get student data
        $data = GetStudentById($id);
        
        // Return the data as JSON
        echo json_encode($data);
        
    }
?>