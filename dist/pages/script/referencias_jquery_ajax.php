<?php
        $user = "labcowork_bless";
        $password = "123456789";
        $dbname = "labcowork_bless";
        $host = "127.0.0.1";
    
    //connect with the database
    $db = new mysqli($host,$user,$password,$dbname);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM usuarios WHERE id LIKE '%".$searchTerm."%' ORDER BY nombres ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['nombres'];
    }
    
    //return json data
    echo json_encode($data);
?>
