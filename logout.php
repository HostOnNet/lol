<?php

include './include/config.php';


if(session_destroy())
{
    header('Location: ' . BASE_URL) ;
}
