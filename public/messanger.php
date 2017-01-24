<?php
    require("../includes/config.php");
    $txt=[];
    $msgType = "error";
    $txt[0]="Действие не может быть выполнено. Свяжитесь с разработчиком или повторите попытку позднее";
    //сообщения пользователей
    if (isset($_POST["Msg"]) && isset($_POST["Subj"]) && isset($_POST["uMail"]) && isset($_POST["uName"]) 
    && !empty($_POST["Msg"]) && !empty($_POST["uMail"]) && !empty($_POST["uName"])  ){
        $query= CS50::query("INSERT INTO messages (username, email, subject, message) VALUES (?, ?, ?, ?)",
                                                    $_POST["uName"], $_POST["uMail"], $_POST["Subj"], $_POST["Msg"]);
        
        
        //поле "txt" представляет собой массив! сообщений, который может содержать одно сообщение
        if ($query){
            $msgType = "info";
            $txt[0]="Ваше сообщение успешно отправлено";
        } else {
             $txt[0]="Ошибка при отправке Вашего сообщения. Попробуйте позднее";    
        }       
    }
    
    //категории работ
    if (isset($_POST["category"]) && !empty($_POST["category"])){
        $query= CS50::query("INSERT INTO categories (category) VALUES (?)", $_POST["category"]);
        
        //поле "txt" представляет собой массив! сообщений, который может содержать одно сообщение
        if ($query){
            $txt[0]="Данные успешно добавлены";
        } else {
             $txt[0]="Ошибка при добавлении. Попробуйте позднее";    
        }       
    }
    
    //клиенты
    if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["company"]) 
    && !empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["company"])  ){
        $query= CS50::query("INSERT INTO clients (firstName, lastName, company) VALUES (?, ?, ?)",
                                                    $_POST["firstName"], $_POST["lastName"], $_POST["company"]);
        
        //поле "txt" представляет собой массив! сообщений, который может содержать одно сообщение
        if ($query){
            $msgType = "info";
            $txt[0]="Данные успешно добавлены";
        } else {
             $txt[0]="Ошибка при добавлении. Попробуйте позднее";    
        }       
    }
    
    //клиенты
    if(isset($_POST["login"]) && isset($_POST["pass"]) && isset($_POST["confirm"]) && isset($_POST["email"])  && isset($_POST["role"]) 
    && !empty($_POST["login"]) && !empty($_POST["pass"]) && !empty($_POST["confirm"]) && !empty($_POST["email"]) && !empty($_POST["role"]
    && ($_POST["pass"]==$_POST["confirm"]))  ){
        $query= CS50::query("INSERT INTO users (login, hash, email, role) VALUES (?, ?, ?, ?)",
                                                    $_POST["login"], password_hash($_POST["pass"], PASSWORD_DEFAULT), $_POST["email"], $_POST["role"]);
        
        //поле "txt" представляет собой массив! сообщений, который может содержать одно сообщение
        if ($query){
            $msgType = "info";
            $txt[0]="Данные успешно добавлены";
        } else {
             $txt[0]="Ошибка при добавлении. Попробуйте позднее";    
        }       
    }
    
    //отзывы
    if(isset($_POST["client"]) && isset($_POST["work"]) && isset($_POST["comment"])  
    && !empty($_POST["client"]) && !empty($_POST["work"]) && !empty($_POST["comment"])  ){
        $query= CS50::query("INSERT INTO comments (client, work, comment) VALUES (?, ?, ?)",
                                                    $_POST["client"], $_POST["work"], $_POST["comment"]);
        
        //поле "txt" представляет собой массив! сообщений, который может содержать одно сообщение
        if ($query){
            $msgType = "info";
            $txt[0]="Данные успешно добавлены";
        } else {
             $txt[0]="Ошибка при добавлении. Попробуйте позднее";    
        }       
    }
    
    //работы
    if(isset($_POST["title"]) && isset($_POST["category"]) && isset($_POST["client"]) && isset($_POST["pics"]) && isset($_POST["comment"])  
    && !empty($_POST["title"]) && !empty($_POST["category"]) && !empty($_POST["client"]) && !empty($_POST["pics"]) && !empty($_POST["comment"])  ){
        $query= CS50::query("INSERT INTO portfolios (title, category, client, pics,comment) VALUES (?, ?, ?, ?, ?)",
                                                    $_POST["title"], $_POST["category"], $_POST["client"], $_POST["pics"], $_POST["comment"]);
        
        //поле "txt" представляет собой массив! сообщений, который может содержать одно сообщение
        if ($query){
            $msgType = "info";
            $txt[0]="Данные успешно добавлены";
        } else {
             $txt[0]="Ошибка при добавлении. Попробуйте позднее";    
        }       
    }
    
    $msg=["msg"=>["class"=>$msgType, "txt"=>$txt]];
    echo json_encode($msg);
?>
