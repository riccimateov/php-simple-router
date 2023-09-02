<?php

require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../core/direct-restriction.php';

if(isset($url_params['id']))
{
    //Include profile view and you can handle the content via url param
    echo $url_params['id'];
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '../views/profile.view.php';
} 

 