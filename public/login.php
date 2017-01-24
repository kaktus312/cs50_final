<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("login.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $msg=[];
        // validate submission
        if (empty($_POST["uName"]))
        {
            //apologize("You must provide your username.");
            // render("login.php", ["title" => "Log In", "msg" => "You must provide your username"]);
            $msg=["msg"=>["class"=>"error", "txt"=>["You must provide your username"]]];
            echo json_encode($msg);
            exit;
        }
        else if (empty($_POST["uPass"]))
        {
            //apologize("You must provide your password.");
            //render("login.php", ["title" => "Log In", "msg" => "You must provide your password"]);
            $msg=["msg"=>["class"=>"error", "txt"=>["You must provide your password"]]];
            echo json_encode($msg);
            exit;
        } else 
        {
    
            // query database for user
            $rows = CS50::query("SELECT * FROM users WHERE login = ?", $_POST["uName"]);
                
            // if we found user, check password
            if (count($rows) == 1)
            {
                // first (and only) row
                $row = $rows[0];
                //echo (password_hash($_POST["uPass"], PASSWORD_DEFAULT));
                // compare hash of user's input against hash that's in database
                if (password_verify($_POST["uPass"], $row["hash"]))
                {
                    // remember that user's now logged in by storing user's ID in session
                    $_SESSION["id"] = $row["id"];
                    $_SESSION["role"] = $row["role"];
    
                    // redirect to admin's page
                    $msg=["msg"=>["class"=>"info", "txt"=>["Welcome!"], "nUrl"=>"admin.php"]];
                    echo json_encode($msg);
                    
                    //redirect("admin.php", ["title" => "Administrativ Area", $msg]);
                    
                    exit;
                }
            }
    
            // else apologize
            //render("login.php", ["title" => "Log In", "msg" => ["txt"=>"Invalid username and/or password", "class"=>"error visible"]]);
            $msg=["msg"=>["class"=>"error", "txt"=>["Invalid username and/or password"]]];
             echo json_encode($msg);
             
        }
    }

?>
