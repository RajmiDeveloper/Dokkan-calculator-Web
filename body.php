<?php
    $body = isset($_REQUEST['body'])? $_REQUEST['body']:"inicial_page";
    include($body. ".php");
?>