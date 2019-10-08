<?php

function validaSesion()
	{
        $cookie = $_COOKIE["EstaLogeado"];
        if(!$cookie=="1"){
            redirect(base_url().'inicio');
        }
    }
?>