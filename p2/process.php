<?php

session_start();


if(!isset($_SESSION['results'])){ 
    $counter=4;
    $number = rand(1,10); 
    $failGame=false;
    $invalidGuess=false;
     
}  else {
    $number=$_SESSION['results']['number'];
    $counter=$_SESSION['results']['counter'];
}
 



$min = 1;
$max = 10;
    
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['submit'])) {
   
    if (!is_null($_POST['guess'])) { 
        $guess=(int)$_POST['guess'];
        if (filter_var($guess, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
            
            $invalidGuess=true;
           
            } else {
                if ($guess != $number) {
                    --$counter;
            }
            if ($counter<1) {
                $failGame=true;
            }
    } 
        

       
    }
}  else {
    session_destroy();
}
 
 

$_SESSION['results'] = [
    'guess'=> $guess,
    'number'=> $number,
    'counter'=> $counter,
    'failGame' => $failGame,
    'invalidGuess' => $invalidGuess
];


header('Location: index.php');