<?php

    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        // render buy form
        render("contacts.php", ["title" => "Контакты"]);        
    } else if ($_SERVER["REQUEST_METHOD"] == "POST"){
                  apologize("Some errors occurred. Please, try later");  
    }
?>