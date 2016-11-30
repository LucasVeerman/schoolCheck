<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/functs.php';
// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'School Check');

// Display template: output html
$templateParser->display('head.tpl');
$action=isset($_GET['action'])?$_GET['action']:'home';
switch($action){
    
    case 'admin':
        $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:"show";
        switch($cms_action)
        {
            case 'show':
                include 'model/select_all_items.php';
                $templateParser->assign('result',$result);
                $templateParser->display('cms_show.tpl');
            break;
            case 'delete':
                $id = $_GET['id'];
                include 'model/delete_item.php';
            break;
            case 'insert':
            
            break;
            case 'edit':
        
            break;
        }
       
    break;
}

