<?php

session_start();
if(!isset($_SESSION['results'])){ 
     
    $_SESSION['results']=null;
  
}      
 

if(!is_null($_SESSION['results'])){ 
    $results=$_SESSION['results'];
    $guess=$results['guess'];
    $number=$results['number'];
    $counter=$results['counter'];
    $failGame=$results['failGame'];
    $invalidGuess=$results['invalidGuess'];
      
    

}    
  
  
require 'index-view.php';
 