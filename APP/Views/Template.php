<?php
include_once './APP/Config.php';
include_once 'Init.php';


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$test = new APP\Controllers\Home();


$result = $test->Getlistar();
$p = new APP\Controllers\Home();

 //$p->Insert($p);
 
 $config = new init\INIT();
 
 

// put your code here


 

       
     







?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php foreach ($result as $rows){
           echo $rows->id; 
            }
            
            ?>
            
            
        </div>
    </body>
</html>
