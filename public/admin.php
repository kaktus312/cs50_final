<?php
    // configuration
    require("../includes/config.php"); 
    
    //unset($_SESSION["adm_currTab"]);   
    
    if (isset($_POST["q"]) && !empty($_POST["q"])){
        $query=$_POST["q"];
    } else if (isset($_SESSION["adm_currTab"]) && !empty($_SESSION["adm_currTab"])){
        $query=$_SESSION["adm_currTab"];
    } else {
        $query="messages";
    }
    $_SESSION["adm_currTab"]=$query;
    $content = [];
    $rows=[];
    $lists=[];//выпадающие списки
    if ($query!="info") {
        $data = CS50::query("SELECT * FROM {$query}");
        $lists[$query] = CS50::query("SELECT * FROM {$query}");
        switch($query){
            case "messages":
                $title="Сообщения";
                break;
            case "users":
                $title="Пользователи";
                $data = CS50::query("SELECT users.id, users.login, users.email, roles.role FROM users JOIN roles ON users.role=roles.id");
                break;
            case "clients":
                $title="Клиенты";
                break;
            case "categories":
                $title="Категории";
                $data = CS50::query("SELECT id, category FROM {$query}");
                break;
            case "portfolios":
                $title="Портфолио";
                $data = CS50::query("SELECT portfolios.id, portfolios.title, categories.category, clients.company, portfolios.pics, portfolios.views, portfolios.comment 
                                             FROM portfolios 
                                            JOIN categories ON portfolios.category=categories.id
                                            JOIN clients ON portfolios.client=clients.id ");
                break;
            case "comments":
                $title="Отзывы";
                $data = CS50::query("SELECT comments.id, clients.company, portfolios.title, comments.comment 
                                            FROM comments 
                                            JOIN portfolios ON comments.work=portfolios.id
                                            JOIN clients ON comments.client=clients.id ");
                break; 
            default:
                $title="Administrative Area";
                break;
        }
    } else {
        $title="Информация"; 
        $data=[];
    }
    if (isset($_POST["q"]) && !empty($_POST["q"])){
       adminRender("adm_{$query}.php", ["data"=>$data, "lists"=> $lists, "title"=>$title]);
    } else {
        render("admin.php", ["data"=>$data, "lists"=> $lists, "tab"=>"adm_{$query}.php", "title"=>$title]);
    }
?>
