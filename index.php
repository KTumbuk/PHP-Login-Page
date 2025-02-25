<?php
$page = isset($_GET['page']) ? $_GET['page']:'home';

function loadPage($page): void{
  switch ($page){
    case 'home':
      include 'file_/home.php';
  default :
      echo "404 - not found";
      break;  
  }
}

loadPage(page: $page);
?>