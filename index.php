<?php 
    require_once "./database.php";
    if ($_SERVER['REQUEST_URI'] === "/index.php") {
        require_once "./select_consulta.php";
        require_once "./table_query_group.php";
        require_once "./table.php";

        
        
    }