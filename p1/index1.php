<?php
  
  
// Use sessions since we will be receiving and storing information from session in predefined variables that will need to be unset at the end of each session to start a new game.
 
session_start(); 
   
// Set variables that will be the user input number and print instructions/validation responses on each guess
$guess= rand(1,10); 
$str='';
 
// Generate a random number as the one that needs to be guessed.
 
$number = rand(1,10);  

// Create a counter based on each session to count the number of attempts. I have set the limit to 4 attempts. Reset counter at start of each new session.
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 4;
}


 

// Match the random number and guess and output results as appropriate. If player guesses it right, the game is aborted and session is detroyed for a new game.
   
    if ($number==$guess) {
        $str="The number was ".$number."</br>Your guess was ".$guess."</br>You guessed it right."; 
        session_destroy();
      
    } elseif ($number<$guess) {
        $str="The number was ".$number."</br>Your guess was ".$guess."</br>Woahhh that's too high. Try again!";
            // Decrease the attempts counter by 1 on each unsuccessful match
        --$_SESSION['counter'];     
    } elseif ($number>$guess) {
        $str="The number was ".$number."</br>Your guess was ".$guess."</br>Too low my friend. Guess again!";
        --$_SESSION['counter'];   
    } 


       
    // Create and set an attempt variable to provide user with on screen statement on how many attempts they have left.
    if ($_SESSION['counter']==1) {
    $attempts='You have '.$_SESSION['counter'].' attempt left';
} else {
    $attempts='You have '.$_SESSION['counter'].' attempts left';
}

 
    // Set the counter so that if all the attempts are used the game is aborted and the session is destroyed for a new game
    if ($_SESSION['counter']<1) {
        $str='You lost!'; 
        
        session_destroy();
       
    }
 




require 'index-view1.php';