<?php 

include('view/header.php'); 

if(isset($_GET['page']) && !empty($_GET['page'])){
  
    if(file_exists('view/' . $_GET['page'] . '.php')){
        include('view/' . $_GET['page'] . '.php');
    } else {
        include('view/error.php');
    }
    
} else {
    include('view/home.php');
}

include('view/footer.php'); 

