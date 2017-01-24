<?php
    require("../includes/config.php");
    $txt=[];
    if (isset($_POST["q"]) && !empty($_POST["q"]) && !empty($_SESSION["id"]) && $_SESSION["role"]==2){
        $path="adm_".$_POST["q"]."_form.php";
        if (file_exists("../views/{$path}")){
            $lists["roles"] = CS50::query("SELECT * FROM roles");
            $lists["clients"] = CS50::query("SELECT * FROM clients");
            $lists["portfolios"] = CS50::query("SELECT * FROM portfolios");
            $lists["categories"] = CS50::query("SELECT * FROM categories");
            adminRender($path, ["lists"=>$lists]);
            exit;    
        } else {
            echo ("Ошибочка... Нет соответствующей формы. Позвоните разработчику (:");
        }
    } else {
        echo ("А туда вам не нужно...");
    }
    // $msg=["msg"=>["class"=>"info", "txt"=>$txt]];
    // echo json_encode($msg);
?>
