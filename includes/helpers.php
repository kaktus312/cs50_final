<?php

    /**
     * helpers.php
     *
     * Computer Science 50
     * Final Project
     *
     * Helper functions.
     */

    require_once("config.php");

    /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        render("apology.php", ["message" => $message]);
    }

    /**
     * Facilitates debugging by dumping contents of argument(s)
     * to browser.
     */
    function dump()
    {
        $arguments = func_get_args();
        require("../views/dump.php");
        exit;
    }

    /**
     * Logs out current user, if any.  Based on Example #1 at
     * http://us.php.net/manual/en/function.session-destroy.php.
     */
    function logout()
    {
        // unset any session variables
        $_SESSION = [];

        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
    }

    
    /**
     * Redirects user to location, which can be a URL or
     * a relative path on the local host.
     *
     * http://stackoverflow.com/a/25643550/5156190
     *
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($location)
    {
        if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit;
    }

    /**
     * Renders view, passing in values.
     */
    function render($view, $values = [])
    {
        // if view exists, render it
        if (file_exists("../views/{$view}"))
        {
            // extract variables into local scope
            extract($values);

            // render view (between header and footer)
            require("../views/header.php");
            require("../views/{$view}");
            require("../views/footer.php");
            exit;
        }

        // else err
        else
        {
            trigger_error("Invalid view: {$view}", E_USER_ERROR);
        }
    }
    
    
    /**
     * Renders view, passing in values.
     */
    function adminRender($view, $values = [])
    {
        // if view exists, render it
        if (file_exists("../views/{$view}"))
        {
            // extract variables into local scope
            extract($values);

            // render view (between header and footer)
            require("../views/{$view}");
            //exit;
        }

        // else err
        else
        {
            trigger_error("Invalid view: {$view}", E_USER_ERROR);
        }
    }
    
    function tBodyRender($data){
		$tbody=[];
		if (!empty($data)){
			foreach($data as $row){
				$tbody[]="<tr>";
				foreach($row as $cell=>$val){
					$tbody[]="<td>{$val}</td>";	
				}
				$tbody[]="
				<td class=\"adm_tools\">
					<span class=\"glyphicon glyphicon-pencil\" title=\"Редактировать\"></span>
					<span class=\"glyphicon glyphicon-trash\" title=\"Удалить\"></span>
				</td>";		
				$tbody[]="</tr>";
			}
		} else {
			$tbody[]="<tr>";
			$tbody[]="<td colspan=\"10\">Данных пока нет</td>";
			$tbody[]="</tr>";
		}
		return implode("\n", $tbody);
    }
    
    function getList($options, $key){
        $list[]="<option value=\"0\" selected=\"selected\">Не определено</option>";
    	if (!empty($options) && !empty($key)){
    	    foreach($options as $option){
    	     $list[]="<option value='".$option["id"]."'>".$option[$key]."</option>";
    	    }
    	}
		return implode("\n", $list);
    }
?>
