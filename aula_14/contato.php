<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

echo $page;

switch ($page) {
    case 'page1':
        include '';
        break;
    case 'page2':
        include '';
        break;
    
    default:
        # code...
        break;
}



