<?php

    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        // render buy form
        render("article.php".$_GET['pid'], ["title" => "Почему мы"]);        
    } else if ($_SERVER["REQUEST_METHOD"] == "POST"){
                  apologize("Some errors occurred. Please, try later");  
    }
?>