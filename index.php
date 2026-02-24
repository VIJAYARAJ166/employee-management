<?php
session_start();

// and page is page =='' || page =='list'
if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] === true  || ( $_GET['page'] === 'list' || $_GET['page']=='' )) {
    include "view/Employees.php";
} else {
    include "view/login.php";
}


// addtional added route set here.... 
// if (isset($_GET['page']) && $_GET['page'] === 'page_two') {
//     include "view/pdf_tem.php";
// }





?>