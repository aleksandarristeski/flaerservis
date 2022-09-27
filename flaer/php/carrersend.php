<?php 

require_once 'functions.php';

require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 
$pp->sendEmailTo(''); // ← Your email here
echo $pp->process($_POST);



