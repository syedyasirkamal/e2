<?php
  
  
// Use sessions since we will be receiving and storing information from both the form and session in predefined variables that will need to be unset at the end of each session to start a new game.
    session_start();
 
   
// Set variables that will accept input from the user to guess the number and give instructions/validation responses on each guess
$guess=$str='';
$submit='<input type="text" name="guess" /><br /> <input type="submit" name="submit" value="GUESS"/><br />   <input type="hidden" name="counter" />';
 
$min = 1;
$max = 10;

// Create a counter based on each session to count the number of attempts. I have set the limit to 4 attempts. Reset counter at start of each new session.
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 4;
}

// Generate a random number from each session and store it in a variable.
if(!isset($_SESSION['random'])){ 
     $_SESSION['random'] = rand(1,10); 
} 
$number = $_SESSION['random'];  

// Capture and retrieve the user input on POST action of the form and store it in a variable.
if (isset($_POST['submit']) and $_POST['guess']!=null) {
    $guess=(int)$_POST['guess'];
    
}  

// Check if the user input exists
if ($guess || $guess===0) {
    
    // Validate whether the input is an integer from 1 to 10
    if (filter_var($guess, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        $str="Invalid entry!<br />Your guess must be an integer from 1 to 10";
    }

    // Match the random number and guess and output results as appropriate. If player guesses it right, the game is aborted and session is detroyed for a new game.
   else { 
    if ($number==$guess) {
        $str="You guessed it right";
        $submit='<input type="submit" name="replay" value="Play again"/><br />';
         
        session_destroy();
    } elseif ($number<$guess) {
        $str="Woahhh that's too high. Try again!";
    } elseif ($number>$guess) {
        $str="Too low my friend. Guess again!";
    } 

    // Decrease the attempts counter by 1 on each successful match
       if(isset($_POST['submit'])) {
        --$_SESSION['counter'];   
    } 
 
    // Set the counter so that if all the attempts are used the game is aborted and the session is destroyed for a new game
    if ($_SESSION['counter']<1) {
        $str='You lost! The correct number was '.$number;
            $submit='<input type="submit" name="replay" value="Play again"/><br />';
           
        session_destroy();
    }
   }
} else {
    $str="Come on!!!<br />Guess a number that is an integer from 1 to 10";
};

// Create and set an attempt variable to provide user with on screen statement on how many attempts they have left.
if ($_SESSION['counter']==1) {
    $attempts='You have '.$_SESSION['counter'].' attempt left';
} else {
    $attempts='You have '.$_SESSION['counter'].' attempts left';
}



require 'index-view.php';