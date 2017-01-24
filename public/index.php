<?php

    // configuration
    require("../includes/config.php"); 
    
    //get portfolio
    // $positions = [];
    // $summ=0;
    // $rows = CS50::query("SELECT shares, symbol FROM portfolios WHERE user_id = ?", $_SESSION["id"]);
    // foreach ($rows as $row)
    // {
    //     $stock = lookup($row["symbol"]);
    //     if ($stock !== false)
    //     {
    //         $positions[] = [
    //             "name" => $stock["name"],
    //             "price" => $stock["price"],
    //             "shares" => $row["shares"],
    //             "symbol" => $row["symbol"],
    //             "total" => $row["shares"]*$stock["price"]
    //         ];
    //         $summ+=$row["shares"]*$stock["price"];   
    //     }
    // }
    
    // render portfolio
    //render("portfolio.php", ["positions"=> $positions, "summ"=>$summ, "title" => "Portfolio"]);
    render("main.php");

?>
