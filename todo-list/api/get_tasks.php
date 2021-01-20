<?php 
    if (!file_get_contents('../todo.db')) echo json_encode([]);
    else echo file_get_contents('../todo.db');
?>